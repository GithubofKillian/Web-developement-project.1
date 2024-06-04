<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb0817c5a4da21c82220b1e3d674fc89c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb0817c5a4da21c82220b1e3d674fc89c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb0817c5a4da21c82220b1e3d674fc89c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb0817c5a4da21c82220b1e3d674fc89c::$classMap;

        }, null, ClassLoader::class);
    }
}