<?php

class Controller  
{
    public function view($lokasi, $data = [])
    {
        require_once"../app/views/$lokasi.php";
    }
}