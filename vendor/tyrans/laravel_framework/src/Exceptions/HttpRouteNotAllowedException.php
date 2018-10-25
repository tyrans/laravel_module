<?php

namespace Tyrans\Framework\Exceptions;

use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

/**
 * 非法请求
 *
 * Class HttpRouteNotAllowedException
 * @package Tyrans\Framework\Exceptions
 */
class HttpRouteNotAllowedException extends Exception {

    protected $code = 3;

    public function __construct(MethodNotAllowedHttpException $exception) {
        $this->message = '未定义的请求，请检查路由是否正确！';
        $this->details = $exception->getMessage();
    }
}
