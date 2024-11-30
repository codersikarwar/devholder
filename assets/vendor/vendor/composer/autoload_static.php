<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4b657c64f8267eda11b7169eac8e3244
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
            'Intervention\\Gif\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src',
        ),
        'Intervention\\Gif\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/gif/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4b657c64f8267eda11b7169eac8e3244::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4b657c64f8267eda11b7169eac8e3244::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4b657c64f8267eda11b7169eac8e3244::$classMap;

        }, null, ClassLoader::class);
    }
}