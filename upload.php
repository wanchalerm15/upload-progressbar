<?php

if ( !empty($_FILES) ) 
{
    $file = $_FILES['file'];
    $status = move_uploaded_file($file['tmp_name'], $file['name']);
    if( $status )
    {
        echo $file['name'];
    }
}