<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d82a3d5583604e9ef77d61c9e81ca0b
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Letgrow\\WordPress\\Core\\' => 23,
            'Letgrow\\MailHistory\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Letgrow\\WordPress\\Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/letgrow-wordpress/core',
        ),
        'Letgrow\\MailHistory\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d82a3d5583604e9ef77d61c9e81ca0b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d82a3d5583604e9ef77d61c9e81ca0b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d82a3d5583604e9ef77d61c9e81ca0b::$classMap;

        }, null, ClassLoader::class);
    }
}