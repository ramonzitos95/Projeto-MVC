<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit73a863a1ee38024b3fac3d11ff6628b8
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SON\\' => 4,
        ),
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SON\\' => 
        array (
            0 => __DIR__ . '/..' . '/SON',
        ),
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/APP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit73a863a1ee38024b3fac3d11ff6628b8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit73a863a1ee38024b3fac3d11ff6628b8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}