<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd6a441a1e8e8bdd5d538d335b6547b17
{
    public static $files = array (
        '81a16f8d439a5133c54ce5f4ebfc55e8' => __DIR__ . '/../..' . '/somefile.php',
    );

    public static $classMap = array (
        'Apple' => __DIR__ . '/../..' . '/fruits/Apple.php',
        'Beli' => __DIR__ . '/../..' . '/flowers/Beli.php',
        'Jesmin' => __DIR__ . '/../..' . '/flowers/Jesmin.php',
        'Mango' => __DIR__ . '/../..' . '/fruits/Mango.php',
        'Orange' => __DIR__ . '/../..' . '/fruits/Orange.php',
        'Rose' => __DIR__ . '/../..' . '/flowers/Rose.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd6a441a1e8e8bdd5d538d335b6547b17::$classMap;

        }, null, ClassLoader::class);
    }
}
