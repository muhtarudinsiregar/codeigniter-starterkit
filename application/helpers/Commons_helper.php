<?php

if (!function_exists('dd')) {
    function dd($variable)
    {
        dump($variable);
        die;
    }
}
