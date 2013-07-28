<?php

/*
 * This file is part of a MyProd.net project.
 * 
 * (c) Fabien D. <fabien at myprod.net>
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Myprod\Silex\Provider\Tests;

use Silex\Application;
use Myprod\Silex\Provider\AkismetServiceProvider;

class AkismetServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function testServiceDeclaration()
    {
        $app = new Application();

        $app->register(new AkismetServiceProvider(), array(
            'akismet.apiKey'    => '',
            'akismet.url'       => ''
        ));
        
        $this->assertInstanceOf('TijsVerkoyen\\Akismet\\Akismet', $app['akismet']);
    }
}
