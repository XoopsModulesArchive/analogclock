<?php

$modversion['name'] = _MY_CLOCK_NAME;
$modversion['version'] = 0.01;
$modversion['description'] = _MY_CLOCK_DESC;
$modversion['credits'] = _MY_CLOCK_CRED;
$modversion['author'] = 'Marco Sánchez [Dr. Clone] [www.drclone.net]';
$modversion['help'] = '';
$modversion['license'] = 'GPL';
$modversion['official'] = 0;
$modversion['image'] = 'images/clock_slogo.png';
$modversion['dirname'] = 'analogclock';

// Menu
$modversion['hasMain'] = 0;
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'clock.php';
$modversion['blocks'][1]['name'] = _MY_CLOCK_BNAME1;
$modversion['blocks'][1]['description'] = _MY_CLOCK_DESC;
$modversion['blocks'][1]['show_func'] = 'b_clock_show';
