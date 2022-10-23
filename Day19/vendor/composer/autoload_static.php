<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28ff56c97e31bc835c547742523f312b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit28ff56c97e31bc835c547742523f312b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28ff56c97e31bc835c547742523f312b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit28ff56c97e31bc835c547742523f312b::$classMap;

        }, null, ClassLoader::class);
    }
}
