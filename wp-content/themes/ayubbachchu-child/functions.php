<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file. 
* Wordpress will use those functions instead of the original functions then.
*/







add_filter('avf_postgrid_excerpt_length','avf_postgrid_excerpt_length_mod', 10, 1);
function avf_postgrid_excerpt_length_mod($length)
{
   $length = 90;
   return $length;
}






