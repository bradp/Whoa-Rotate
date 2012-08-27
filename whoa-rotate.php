<?php
/*
Plugin Name: Whoa! Rotate
Description: Whoa! Rotate gives you an easy to use shortcode that will rotate your page for the user. Just use the shortcode [whoarotate] anywhere in a page or post. Perfect for April Fools or for joke pages.
Version: 1.0
Author: Brad Parbs
Author URI: http://bradparbs.com
*/

function whoarotate(){
    ?>
    <style>
    @-webkit-keyframes rotate {
        0%   { -webkit-transform:rotate(0deg);}
        100% { -webkit-transform:rotate(390deg); }
    }
    #page{
        -webkit-animation: rotate 5s infinite;
        }
    </style>
    <?
}

add_shortcode('whoarotate','whoarotate');