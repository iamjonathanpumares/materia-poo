<?php

namespace Skynet\Middlewares;

use Aura\Router\Route;
use Aura\Router\Rule\RuleInterface;
use Psr\Http\Message\ServerRequestInterface;

class AuthRule implements RuleInterface
{
    public function __invoke(ServerRequestInterface $request, Route $route)
    {
    	$needsAuth = (isset($route->handler['auth'])) ? $route->handler['auth'] : false;
    	if ($needsAuth && isset($_SESSION['user']))
    	{
    		return true;
    	}
    	elseif (!$needsAuth)
    	{
    		return true;
    	}

    	return false;
        // $versions = $request->getHeader('X-Api-Version');
        // if (count($versions) !== 1) {
        //     return false;
        // }

        // $route->attributes(['apiVersion' => $versions[0]]);
        // return true;
    }
}