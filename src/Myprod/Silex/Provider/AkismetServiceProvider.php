<?php

/*
 * This file is part of a MyProd.net project.
 * 
 * (c) Fabien D. <fabien at myprod.net>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Myprod\Silex\Provider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use TijsVerkoyen\Akismet\Akismet;

class AkismetServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['akismet'] = $app->share(function() use ($app) {
            return new Akismet($app['akismet.apiKey'], $app['akismet.url']);
        });
    }
    
    public function boot(Application $app)
    {
    }
}