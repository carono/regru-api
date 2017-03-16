<?php

namespace carono\regru;
/**
 * Class BaseParam
 * @package carono\regru
 */
class BaseParam extends \ArrayObject
{
    public $required = [];

    public function __construct()
    {
        parent::__construct([], self::STD_PROP_LIST | self::ARRAY_AS_PROPS, 'ArrayIterator');
    }

    public function getArrayCopy()
    {
        $array = array_merge(get_object_vars($this), parent::getArrayCopy());
        unset($array['required']);
        return $array;
    }
}