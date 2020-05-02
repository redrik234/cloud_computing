<?php
require_once 'mustache.php';

echo $mustache->render('header', [
    'bootstrap_css' => './lib/Bootstrap/css/bootstrap.min.css'
]);

echo $mustache->render('index', []);

echo $mustache->render('bottom', [
    'bootstrap_js' => './lib/Bootstrap/js/bootstrap.min.js'
]);
