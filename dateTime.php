<?php

$data = new DateTime();

$interval = new DateInterval('P5DT10H50M');

$data->sub($interval);

echo $data->format('d/m/Y - h:i:s');

