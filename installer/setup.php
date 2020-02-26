<?php

use ntentan\honam\Templates;

require "vendor/autoload.php";

$templateEngine = new Templates();
$templateEngine->prependPath("installer/views");

return $templateEngine->render("view", ['page' => 'welcome']);

