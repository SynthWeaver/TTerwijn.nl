<?php

function phpInclude($location) {
    ob_start();
    include $location;
    return ob_get_clean();
}