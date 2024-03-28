<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitef51794c14a3dfe34da23fe69bfdf692
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitef51794c14a3dfe34da23fe69bfdf692', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitef51794c14a3dfe34da23fe69bfdf692', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitef51794c14a3dfe34da23fe69bfdf692::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}