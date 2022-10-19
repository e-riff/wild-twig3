<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$products = ['mandoline', 'bass', 'banjo', 'cithare', 'lyre', 'harpe'];
echo $twig->render('home.html.twig', ['products' => $products]);
