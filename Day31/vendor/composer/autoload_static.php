<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11128d70ebe45bc017b1fdd98dfd801a
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit11128d70ebe45bc017b1fdd98dfd801a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11128d70ebe45bc017b1fdd98dfd801a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11128d70ebe45bc017b1fdd98dfd801a::$classMap;

        }, null, ClassLoader::class);
    }
}
