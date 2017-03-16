<?php
namespace carono\regru;

use Nette\PhpGenerator\PhpFile;

class FileGenerator
{
    /**
     * @var \Nette\PhpGenerator\ClassType
     */
    public $class;
    /**
     * @var PhpFile
     */
    public $file;
    public $className;
    public $folder;

    public function process()
    {
        $className = $this->className ? $this->className : $this->class->getName();
        file_put_contents($this->folder . DIRECTORY_SEPARATOR . $className . '.php', $this->file . "\n" . $this->class);
    }
}