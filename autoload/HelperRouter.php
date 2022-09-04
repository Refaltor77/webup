<?php

use Pecee\SimpleRouter\SimpleRouter as Router;
use Pecee\Http\Url;
use Pecee\Http\Response;
use Pecee\Http\Request;


if (!function_exists('url')) {
    function url(?string $name = null, $parameters = null, ?array $getParams = null): Url
    {
        return Router::getUrl($name, $parameters, $getParams);
    }
}

if (!function_exists('response')) {
    function response(): Response
    {
        return Router::response();
    }
}


if (!function_exists('request')) {
    function request(): Request
    {
        return Router::request();
    }
}


if (!function_exists('input')) {
    function input($index = null, $defaultValue = null, ...$methods)
    {
        if ($index !== null) {
            return request()->getInputHandler()->value($index, $defaultValue, ...$methods);
        }

        return request()->getInputHandler();
    }
}

if (!function_exists('redirect')) {
    function redirect(string $url, ?int $code = null): void
    {
        if ($code !== null) {
            response()->httpCode($code);
        }

        response()->redirect($url);
    }
}

if (!function_exists('render')) {
    function render(string $namespace): void
    {
        $content = file_get_contents($namespace);
        echo $content;
    }
}

if (!function_exists('css')) {
    function css(string $name): string
    {
        return '../resources/css' . $name . '.css';
    }
}

if (!function_exists('csrf_token')) {
    function csrf_token(): ?string
    {
        $baseVerifier = Router::router()->getCsrfVerifier();
        if ($baseVerifier !== null) {
            return $baseVerifier->getTokenProvider()->getToken();
        }

        return null;
    }
}
