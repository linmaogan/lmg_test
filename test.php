<?php
/**
 * Created by PhpStorm.
 * User: linmaogan
 * Date: 2019/4/3
 * Time: 8:02 PM
 */

require_once __DIR__ . '/vendor/autoload.php';

use Linmaogan\Hello;
use Flower\Rose\Rose;
use Flower\Lily\Lily;

$rose = new Rose();
$lily = new Lily();

echo $rose->desc();
echo "\n";
echo $lily->desc();
echo "\n";
echo Hello::world();
echo "\n";