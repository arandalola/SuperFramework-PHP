<?php
    require_once dirname(__DIR__). '/vendor/autoload.php';

    use App\Kernel;

    $kernel = Kernel::getInstance();
    $kernel->init();

   