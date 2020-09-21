<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require_once 'lhHumanReadableDateTimeRU/classes/lhHumanReadableDateTimeRU.php';

echo "Hello World!\n";

$dt = new lhHumanReadableDateTimeRU("2020-09-23");
echo $dt->when() . "\n";