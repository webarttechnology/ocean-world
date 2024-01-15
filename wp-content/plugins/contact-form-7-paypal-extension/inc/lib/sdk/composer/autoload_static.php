<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite364d05e55fce0ffc0638754788d8fcb
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PayPal' => 
            array (
                0 => __DIR__ . '/..' . '/paypal/rest-api-sdk-php/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite364d05e55fce0ffc0638754788d8fcb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite364d05e55fce0ffc0638754788d8fcb::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite364d05e55fce0ffc0638754788d8fcb::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}