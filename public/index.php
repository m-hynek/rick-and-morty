<?php declare(strict_types=1);

use App\Application;
use Nette\Loaders\RobotLoader;

include __DIR__ . '/../vendor/autoload.php';

define('TEMP_DIR', __DIR__ . '/../tmp');

$loader = new RobotLoader;
$loader->addDirectory(__DIR__ . '/../App');
$loader->setTempDirectory(TEMP_DIR);
$loader->register();

Application::run();