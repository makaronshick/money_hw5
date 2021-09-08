<?php
declare(strict_types=1);

use App\Currency;
use App\Money;

require_once '../vendor/autoload.php';

$money1 = new Money(150, new Currency('RRR'));
$money2 = new Money(200, new Currency('RRR'));
$money1->add($money2);


var_dump($money1);

//var_dump($money1->add($money2));
