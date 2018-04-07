<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f6f9bc524222d8b7e7472dfce6a1c30
{
    public static $files = array (
        'c0c684e103c597a31a3e514398f79ec1' => __DIR__ . '/..' . '/zendframework/zend-stratigility/src/functions/double-pass-middleware.php',
        '968cb91a78f08ea033c0e1afe256c864' => __DIR__ . '/..' . '/zendframework/zend-stratigility/src/functions/host.php',
        '73f02b5e05532acfb968fa91193a3d17' => __DIR__ . '/..' . '/zendframework/zend-stratigility/src/functions/middleware.php',
        '7ba36b1c7d480f53d620df374623203a' => __DIR__ . '/..' . '/zendframework/zend-stratigility/src/functions/path.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stratigility\\' => 18,
            'Zend\\Escaper\\' => 13,
            'Zend\\Diactoros\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
        ),
        'F' => 
        array (
            'Fig\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stratigility\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stratigility/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Fig\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/fig/http-message-util/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f6f9bc524222d8b7e7472dfce6a1c30::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f6f9bc524222d8b7e7472dfce6a1c30::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}