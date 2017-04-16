<?php
$string='21-11-2015';
$pattern='/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement='month $2, date $1, число $3';
echo preg_replace($pattern, $replacement, $string);