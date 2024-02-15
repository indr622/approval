<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit273bb61f1c5e467dcfcd47e1fff9ed01
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'IndraBasuki\\Approval\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'IndraBasuki\\Approval\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit273bb61f1c5e467dcfcd47e1fff9ed01::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit273bb61f1c5e467dcfcd47e1fff9ed01::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit273bb61f1c5e467dcfcd47e1fff9ed01::$classMap;

        }, null, ClassLoader::class);
    }
}