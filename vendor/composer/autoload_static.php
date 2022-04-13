<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit115fa0ef0208b813c28e6da5d47679cf
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MomoHandler\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MomoHandler\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit115fa0ef0208b813c28e6da5d47679cf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit115fa0ef0208b813c28e6da5d47679cf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit115fa0ef0208b813c28e6da5d47679cf::$classMap;

        }, null, ClassLoader::class);
    }
}