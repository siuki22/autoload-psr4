<?php

require 'vendor/autoload.php';

use Guillermo\AutoloadPsr4\Persona;

$persona = new Persona();

echo $persona->saludar();