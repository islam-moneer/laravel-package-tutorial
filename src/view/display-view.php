<?php

Route::get('myview/{name}', function($name){
    return view('myview.index');
});