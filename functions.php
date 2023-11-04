<?php

function university_files(){
    //1st arg nickname for our main stylesheet 2nd arg file location
    wp_enqueue_style('university_main_styles', get_stylesheet_uri()); //2nd arg here gets the wp main style file by calling another func
}

//This loads all the scripts and style files by the name of 2nd args which is a callback function
add_action('wp_enqueue_scripts', 'university_files');