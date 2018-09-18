<?php
$tasks = $app['database']->selectAll('todos');
require 'Task.php';
require 'views/index.view.php';