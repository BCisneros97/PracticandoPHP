<?php

require 'core/bootstrap.php';

$greeting = "Hello my friend";

require Router::load('routes.php')
    ->direct(Request::uri());
