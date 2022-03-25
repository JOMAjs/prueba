<?php

namespace App\Enums;

class EEstado extends AEnum
{
    /**
     *
     * @var array
     */
    protected static $items = array();


    const INICIADA    = '1';
    const PROCESOS    = '2';
    const CANCELADA   = '3';
    const COMPLETADA  = '4';


    protected static function values()
    {
        static::$items[static::INICIADA]   = new EEstado(1,'INICIADA', '<span class="badge badge-info badge badge-pill">INICIADA</span>');
        static::$items[static::PROCESOS]   = new EEstado(2,'SPROCESOS', '<span class="badge badge-secondary badge badge-pill">EN PROCESOS</span>');
        static::$items[static::CANCELADA]   = new EEstado(3,'CANCELADA', '<span class="badge badge-danger badge badge-pill">CANCELADA</span>');
        static::$items[static::COMPLETADA]   = new EEstado(4,'COMPLETADA', '<span class="badge badge-success badge badge-pill">COMPLETADA</span>');
    
    }

    public static function items()
    {
        if (blank(static::$items)) {
            static::values();
        }
        $items = [];
        foreach (static::$items as $item) {
            $items[$item->getId()] = $item->getDescription();
        }
        return $items;
    }



    
    public static function index($search)
    {
        if (blank(static::$items)) {
            static::values();
        }
        return static::$items[$search];
    }



    public static function result($search)
    {
        if (blank(static::$items)) {
            static::values();
        }
        $result = new EEstado(NULL, NULL);
        foreach (static::$items as $item) {
            if ($item->getId() == $search) {
                $result = $item;
                break;
            }
        }
        return $result;
    }

  
    public static function data()
    {
        if (blank(static::$items)) {
            static::values();
        }
        return static::$items;
    }
}