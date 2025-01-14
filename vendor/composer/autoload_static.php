<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6c7d39d3bc1ae81db8079342e63237ab
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'iTRON\\SafetyPasswords\\' => 22,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'iTRON\\SafetyPasswords\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6c7d39d3bc1ae81db8079342e63237ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6c7d39d3bc1ae81db8079342e63237ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6c7d39d3bc1ae81db8079342e63237ab::$classMap;

        }, null, ClassLoader::class);
    }
}
