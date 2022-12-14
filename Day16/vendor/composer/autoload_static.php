<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2fe41c83ac07e85ec32e0f0ab7d9565
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2fe41c83ac07e85ec32e0f0ab7d9565::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2fe41c83ac07e85ec32e0f0ab7d9565::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2fe41c83ac07e85ec32e0f0ab7d9565::$classMap;

        }, null, ClassLoader::class);
    }
}
