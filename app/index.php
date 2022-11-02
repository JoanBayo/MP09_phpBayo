<?php

use Framework\App;

require 'app/helpers.php';

$tasks = App::get('database')->selectAll('tasks');


$greeting = greet();