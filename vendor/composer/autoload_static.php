<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit52180e7fc00e1e89cfdd6c8d237fe377
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit52180e7fc00e1e89cfdd6c8d237fe377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit52180e7fc00e1e89cfdd6c8d237fe377::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
