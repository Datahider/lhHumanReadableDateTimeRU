<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
date_default_timezone_set("Europe/Moscow");
require_once 'lhHumanReadableDateTimeRU/classes/lhHumanReadableDateTimeRU.php';

echo "Hello World!\n";

$dt = new lhHumanReadableDateTimeRU("2020-09-23T09:00:00+03:00");
echo $dt->when() . "\n";