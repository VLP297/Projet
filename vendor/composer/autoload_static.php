<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite8dd63c873d9f9126b293a7fa0222b18
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite8dd63c873d9f9126b293a7fa0222b18::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite8dd63c873d9f9126b293a7fa0222b18::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
