<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc22ab0734ad0b50412d68875fb24e8d4
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bajieeeee\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bajieeeee\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc22ab0734ad0b50412d68875fb24e8d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc22ab0734ad0b50412d68875fb24e8d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc22ab0734ad0b50412d68875fb24e8d4::$classMap;

        }, null, ClassLoader::class);
    }
}
