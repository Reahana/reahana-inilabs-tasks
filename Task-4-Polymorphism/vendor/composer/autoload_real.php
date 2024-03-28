<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite71053aca56c5826f4521e1036d38c5a
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

        spl_autoload_register(array('ComposerAutoloaderInite71053aca56c5826f4521e1036d38c5a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite71053aca56c5826f4521e1036d38c5a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite71053aca56c5826f4521e1036d38c5a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
