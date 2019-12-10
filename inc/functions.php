<?php

function set_background($url) {
    return "background: linear-gradient(to right, rgba(128, 90, 12, 0.8), rgba(128, 90, 12, 0.8)),
        url(" . get_template_directory_uri() . $url . ") no-repeat; background-size: cover;
        background-position: center";
}
