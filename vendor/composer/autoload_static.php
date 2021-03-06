<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc784028c826c7ee6d09eb7d3c01784c7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\src\\' => 8,
            'App\\config\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'App\\config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc784028c826c7ee6d09eb7d3c01784c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc784028c826c7ee6d09eb7d3c01784c7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc784028c826c7ee6d09eb7d3c01784c7::$classMap;

        }, null, ClassLoader::class);
    }
}
