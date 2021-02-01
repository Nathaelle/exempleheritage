<?php

require "controllers.php";

switch($route) {

    case "page1": $t = showPage1();
    break;
    case "page2": $t = showPage2();
    break;
    default : $t = showPage1();
}