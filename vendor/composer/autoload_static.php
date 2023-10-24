<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf3568f6b75b5a5673d98afa74df91f2
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf3568f6b75b5a5673d98afa74df91f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf3568f6b75b5a5673d98afa74df91f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf3568f6b75b5a5673d98afa74df91f2::$classMap;

        }, null, ClassLoader::class);
    }
}
