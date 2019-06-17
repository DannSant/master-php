<?php

class ConfigurationStatic{
    public static $color;
    public static $newsletter;
    public static $entorno;

    const URL_COMPLETA = "http://localhost:8081";

    public static function getColor(){
        return self::$color;
    }
    public static function setColor($color){
        self::$color=$color;
    }
}

?>