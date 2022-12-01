<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2c6ae4569a9c2e775bf4d80e90dbc2b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2c6ae4569a9c2e775bf4d80e90dbc2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2c6ae4569a9c2e775bf4d80e90dbc2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2c6ae4569a9c2e775bf4d80e90dbc2b::$classMap;

        }, null, ClassLoader::class);
    }
}
