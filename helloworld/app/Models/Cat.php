<?php

namespace App\Models;

use Illuminate\Support\Facades\Log;

class Cat 
{
    private $colore;
    private $id;

    static private $contatore = 0;
    static private $lista = [];

    public function __construct() {
        // Faccio qualcosa quando creo l'oggetto Cat
        $this->colore = "red";
        $this->id = static::$contatore;

        static::$contatore += 1;
    }

    public static function addAndSave($newCat) {
        static::$lista[] = $newCat;
        $catsJsonEncoded = json_encode(static::$lista);

        Log::info(static::$lista);
        Log::info($catsJsonEncoded);

        file_put_contents(resource_path() . "/cats.json", $catsJsonEncoded);
    }

    public static function quantiGatti() {
        return static::$contatore;
    }

    public function dimmiCheColoreSono() {
        return $this->colore;
    }

    public function getColore() {
        return $this->colore;
    }

    public function getId() {
        return $this->id;
    }

    public static function bellaZi() {
        return "Bella zi!";
    }

    public static function stampaLista() {
        foreach (static::$lista as $cat) {
            echo $cat->dimmiCheColoreSono();
        }
    }

    public static function index() {
        return static::$lista;
    }
}