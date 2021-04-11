<?php

use Illuminate\Support\Str;

  
function highlight($title){
    return Str::of($title->title)->replace('(', '<span>')->replace(')','</span>');    
}
   
