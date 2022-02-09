<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1701e57030237d0a575113d3ad9a127
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita1701e57030237d0a575113d3ad9a127::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1701e57030237d0a575113d3ad9a127::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1701e57030237d0a575113d3ad9a127::$classMap;

        }, null, ClassLoader::class);
    }
}
