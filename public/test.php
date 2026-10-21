<?php

echo "<h3>PHP Test</h3>";

echo "PHP Version: " . PHP_VERSION . "<br><br>";

echo "<h3>shell_exec</h3>";
var_dump(function_exists('shell_exec'));

echo "<h3>Composer command</h3>";

$output = shell_exec('which composer 2>&1');
echo "<pre>";
var_dump($output);
echo "</pre>";

echo "<h3>Composer version</h3>";

$output = shell_exec('composer --version 2>&1');

echo "<pre>";
var_dump($output);
echo "</pre>";