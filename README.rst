AkismetServiceProvider for Silex
======================

This is the Akismet_ service provider for the Silex_ microframework.

.. _Akismet: https://github.com/tijsverkoyen/Akismet
.. _Silex: https://github.com/fabpot/Silex

Installation
------------

Composer
********

`Composer <http://packagist.org/packages/myprod/akismet-service-provider>`_ is the easiest way to get the Service provider installed and running. Just add your ``composer.json`` the following::

    "myprod/akismet-service-provider":    "dev-master"

in the ``require`` section. Invoke « ``composer.phar install`` » and it should be installed with the ``Askimet`` library.


Register Service Provider :
-------------------

$app->register(
    new Myprod\Silex\Provider\AkismetServiceProvider(), 
    array(
        'akismet.apiKey'    => your_akismet_api_key,
        'akismet.url'       => your_blog_url
    )
);

Using Akismet Service
-------------------

// TODO

