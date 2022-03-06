<?php

require_once "lib/config.php";

class Vehiculos extends \ActiveRecord\Model
{
    public static $table_name = "vehiculo";
    public static $primary_key = "id";
}