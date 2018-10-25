<?php
/**
 * Created by PhpStorm.
 * User: Tyrans
 * Date: 2018/3/12
 * Time: 10:22
 */

namespace Tyrans\Framework\Employs;

use Tyrans\Framework\Exceptions\MethodUndefinedException;

/**
 * Trait CallstaticEmploy
 * @package Tyrans\Framework\Employs
 */
trait CallstaticEmploy
{

    /**
     * @param $methodName
     * @param $arguments
     * @return mixed
     * @throws MethodUndefinedException
     */
    public static function __callStatic($methodName, $arguments)
    {
        $instance = new static;
        if (method_exists($instance, $methodName)) {
            return $instance->{'_'.$methodName}(...$arguments);
        }
        throw new MethodUndefinedException($methodName, static::class);
    }

}