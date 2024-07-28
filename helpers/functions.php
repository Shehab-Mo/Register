<?php
function dd($data = [])
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}


function redirect($url)
{
    header('Location: ' . $url);
    die;
}

function redirectAfterTime($url, $time)
{

    header("Refresh: $time; url=$url");
    die;
}
