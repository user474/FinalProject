<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d4e34e9895e8245a6dbeaaec4fd4d4e
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d4e34e9895e8245a6dbeaaec4fd4d4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d4e34e9895e8245a6dbeaaec4fd4d4e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}