<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita5a5b31f999c8f8e05d8eb8c0717146a
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Noi\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Noi\\' => 
        array (
            0 => __DIR__ . '/..' . '/noi/parsedown-rubytext/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'ParsedownExtra' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown-extra',
            ),
            'Parsedown' => 
            array (
                0 => __DIR__ . '/..' . '/erusev/parsedown',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita5a5b31f999c8f8e05d8eb8c0717146a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita5a5b31f999c8f8e05d8eb8c0717146a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita5a5b31f999c8f8e05d8eb8c0717146a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
