<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2ee7c83067342060f88d81c370d48eee
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2ee7c83067342060f88d81c370d48eee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2ee7c83067342060f88d81c370d48eee::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
