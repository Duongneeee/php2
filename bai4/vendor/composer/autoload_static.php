<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit377abc209c624b7cf7000341810043c1
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit377abc209c624b7cf7000341810043c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit377abc209c624b7cf7000341810043c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit377abc209c624b7cf7000341810043c1::$classMap;

        }, null, ClassLoader::class);
    }
}
