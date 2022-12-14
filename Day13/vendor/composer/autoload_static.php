<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit12c75d380062c7d5eab0e549987f922d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit12c75d380062c7d5eab0e549987f922d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit12c75d380062c7d5eab0e549987f922d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit12c75d380062c7d5eab0e549987f922d::$classMap;

        }, null, ClassLoader::class);
    }
}
