<?php

Route::get('myview/{name}', function($name){
    return "welcome " . $name;
});