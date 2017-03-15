<?php
namespace carono\regru;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use GuzzleHttp\Client;

class Parser
{
    public static function processAbsClient()
    {
        $guzzle = new Client();

//$response = $guzzle->get('https://www.reg.ru/support/help/api2');
//$html = $response->getBody()->getContents();
//file_put_contents('test.html', $html);

        $html = file_get_contents('test.html');
        $query = \phpQuery::newDocument($html);
        $json = [];
        foreach ($query->find('#common_functions_list')->parent()->find('tr') as $tr) {
            $tr = pq($tr);
            if ($id = $tr->find('a')->attr('href')) {
                $section = $query->find($id)->parent();

                $name = trim($tr->find('a')->text());
                $description = trim($tr->find('td')->eq(1)->text());
                $access = trim($tr->find('td')->eq(2)->text());
                $json[$name] = ['description' => $description, 'access' => $access];

                $request = $section->find('h5:contains("Поля запроса")')->next('table');
                $response = $section->find('h5:contains("Поля ответа")')->next('table');
                $json[$name]['request'] = $json[$name]['response'] = [];
                $json[$name]['example_url'] = array_filter(explode("\n", $section->find('.sample-request')->find('a')->text()));
                $json[$name]['source'] = "https://www.reg.ru/support/help/api2$id";

                $arr = ['request' => $request, 'response' => $response];

                foreach ($arr as $attr => $q) {
                    foreach ($q->find('tr') as $attrTr) {
                        $attrTr = pq($attrTr);
                        $attrName = trim($attrTr->find('td')->eq(0)->text());
                        if ($attr == "request") {
                            if (preg_match('/[а-я]/ui', $attrName)) {
                                continue;
                            }
                            if (strpos($attrName, '...') !== false) {
                                $attrName = str_replace('0', 'X', explode('...', $attrName)[0]);
                            }
                        }
                        $attrNames = array_filter(explode("\n", $attrName));

                        foreach ($attrNames as $elem) {
                            $attrDescription = trim($attrTr->find('td:last-child')->text());
                            $data = [
                                'required' => mb_stripos($attrDescription, 'Необязательн', null, 'utf-8') === false,
                                'default'  => null
                            ];
                            $json[$name][$attr][$elem] = $data;
                        }
                    }
                }
            }
        }

        file_put_contents('api.json', json_encode($json));

        $f = new PhpFile();
        $f->addNamespace('carono\regru');


        $class = new ClassType('AbsClient');

        $class->addComment("Do not edit this file, it is automatically generated and can be overwritten in the future !!!");
        $class->addComment("Generator: parser_api.php");
        $class->addExtend('BaseClient');
        $class->setAbstract(true);

        $json = json_decode(file_get_contents('api.json'), true);
        foreach ($json as $api => $value) {
            $array = array_map('ucfirst', preg_split("#[_/]+#", $api));
            $array[0] = lcfirst($array[0]);

            uasort($value['request'], 'requiredSort');
            $method = join('', $array);
            $m = $class->addMethod($method)->addComment('');


            $m->addComment(ucfirst_utf8($value['description']) . "\n");
            $m->addComment('@see ' . $value['source']);
            if ($value['example_url']) {
                foreach ($value['example_url'] as $url) {
                    $m->addComment("@link $url");
                }
            }
            $m->addComment("");
            $params = [];
            foreach ($value['request'] as $param => $data) {
                $params[] = "'$param'" . ' => ' . '$' . $param;
                if ($data['required']) {
                    $m->addComment("@var mixed \$$param");
                    $m->addParameter($param);
                } else {
                    $m->addComment("@var mixed|null \$$param");
                    $m->addParameter($param, $data['default']);
                }
            }
            $m->addComment("");
            $m->addComment('@return mixed');
            $export = join(",\n\t", $params);
            $body = <<<PHP
\$params = [
\t$export
];
return \$this->request('$api', \$params);
PHP;
            $m->setBody($body);
        }
        file_put_contents('absClient.php', $f . $class);
    }

    public static function processServiceConfigs()
    {
        $query = \phpQuery::newDocument(self::getDocContent());
        foreach ($query->find('h5:contains("srv_"') as $h5) {
            $text = pq($h5)->text();
            preg_match("/\(([\w_]+)\)/", $text, $match);
            if (isset($match[1])) {
                $srvName = $match[1];
                Parser::processConingClass(self::formClassName($srvName) . 'Config', "h5:contains('$srvName')");
            }
        }
    }

    public static function processConingClass($className, $selector)
    {
        $html = file_get_contents('test.html');
        $query = \phpQuery::newDocument($html);
        $f = new PhpFile();
        $f->addNamespace('carono\regru');
        $class = new ClassType(ucfirst($className));
        $class->addExtend('BaseConfig');
        if (strpos($selector, '#') === 0) {
            $class->addComment("@see https://www.reg.ru/support/help/api2$selector");
        }
        $required = [];
        foreach ($query->find($selector)->nextAll('table')->eq(0)->find('tr') as $tr) {
            $tr = pq($tr);
            if ($rawProperty = $tr->find('td')->eq(0)->text()) {
                $property = self::clearParam($rawProperty);
                $description = trim($tr->find('td')->eq(1)->text());
                $p = $class->addProperty($property);
                if (self::isDeprecatedParam($rawProperty, $description)) {
                    $p->addComment('@deprecated');
                }
                if (!self::isOptionalParam($rawProperty, $description)) {
                    $required[] = $property;
                }
                $p->addComment($description);
            }
        }
        if ($required) {
            $class->addProperty('required', $required);
        }
        file_put_contents($className . '.php', $f . $class);
    }

    public function isDeprecatedParam($rawProperty, $description = null)
    {
        return strpos($rawProperty, 'deprecated') !== false;
    }

    public function isOptionalParam($rawProperty, $description = null)
    {
        return mb_stripos($description . ' ' . $rawProperty, 'Необязательн', null, 'utf-8') !== false;
    }

    public function clearParam($param)
    {
        $param = preg_replace('/\(deprecated\)/', '', $param);
        return trim($param);
    }

    protected function arrayAsPhpVar($array)
    {
        $export = join(",\n\t", $array);
        if ($array) {
            $result = "[\t$export]";
        } else {
            $result = "[]";
        }
        return $result;
    }

    public static function getDocContent()
    {
        return file_get_contents('test.html');
    }

    protected static function formClassName($string)
    {
        $array = array_map('ucfirst', preg_split("#[_/]+#", $string));
        $array[0] = lcfirst($array[0]);
        return join('', $array);
    }
}

function requiredSort($data)
{
    return !$data['required'];
}

function ucfirst_utf8($str)
{
    return mb_substr(mb_strtoupper($str, 'utf-8'), 0, 1, 'utf-8') . mb_substr($str, 1, mb_strlen($str) - 1, 'utf-8');
}