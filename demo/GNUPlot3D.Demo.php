<?php

include ".../GnuPlot3D.php";


use Gregwar\GnuPlot\GnuPlot3D;

$alpha = 0;
$plot = new GnuPlot;

$vec1 = [100,100,100];
$vec2 = [200,200,200];
$vec3 = [-200,200,200];
usleep(50000);
$plot->reset();
$plot->setGraphTitle('The XYZ 3D plot');
$plot->setTitle(0, 'The visual vector');

$plot->setArrowFrom($vec1);
$plot->setArrowFrom($vec2);
$plot->setArrowFrom($vec3);

$plot->refresh();
sleep(1000);
