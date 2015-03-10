<?php
 include_once 'src/loader/ClassLoader.php';
 include_once 'src/AuriaApp.php';
 
 $loader = new Auria\Loader\ClassLoader();
 
 spl_autoload_register(array($loader,'load'),false,false);
 
 $app = new AuriaApp;
 
