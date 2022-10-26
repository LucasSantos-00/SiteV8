<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb77fe26474961f9e0f651cd21b8db5f0
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb77fe26474961f9e0f651cd21b8db5f0', 'loadClassLoader'), true, false);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb77fe26474961f9e0f651cd21b8db5f0', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb77fe26474961f9e0f651cd21b8db5f0::getInitializer($loader));

        $loader->register(false);

        return $loader;
    }
}
