<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite346fe4b98472a83dfeae8ab14705b62
{
    public static $files = array (
        '97be8d00d4e1b8596dda683609f3dce2' => __DIR__ . '/..' . '/tcdent/php-restclient/restclient.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInite346fe4b98472a83dfeae8ab14705b62::$classMap;

        }, null, ClassLoader::class);
    }
}
