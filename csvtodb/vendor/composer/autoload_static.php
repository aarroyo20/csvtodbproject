<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9fd99d79541ba923c4d4227c5386c1d0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9fd99d79541ba923c4d4227c5386c1d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9fd99d79541ba923c4d4227c5386c1d0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
