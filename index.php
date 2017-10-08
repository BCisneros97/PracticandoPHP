<?php

$query = require 'bootstrap.php';

$greeting = "Hello my friend";

$tasks = $query->selectAll('todos', 'Task');

require "index.view.php";
