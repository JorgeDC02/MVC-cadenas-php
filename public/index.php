<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

chdir(dirname(__DIR__));

require 'application/controllers/IndexControlador.php';
require 'application/controllers/cadenasControlador.php';

if (!isset($_GET['controller']))
{
    $controllerName = 'controllers\\IndexControlador';
    $action         = 'indexAction';
}
else
{
    $controllerName     = 'controllers\\' . ucfirst($_GET['controller']) . 'Controlador';
    $action             = $_GET['action'] . 'Action';
}

$controller = new $controllerName();
$controller->$action();