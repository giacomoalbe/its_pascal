<?php

namespace App\Models;

class Student
{
    private $nome;
    private $cognome;
    private $materie = [];

    private static $numeroStudenti = 0;

    /*
    [
        [
            "name" => "Matematica",
            "id" => "mat001",
            "voti" => [
                [
                    "mark" => 7,
                    "date" => "2022-10-22T10:00",
                    "descritpion" => "Verifica intermedia",
                    "topics" => [
                        "funzioni",
                        "uguaglianze",
                    ]
                ],
            ]
        ]
    ]
    */

    public function __construct($nome = "Nome", $cognome = "Cognome") {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->materie = [
            "matematica" => [7, 8, 9, 2], 
            "italiano" => [10, 10, 10],
            "informatica" => [10, 10, 6],
            "educazione_fisica" => [6, 7, 6],
        ];

        static::$numeroStudenti += 1;
    }

    public static function contaStudenti() {
        return static::$numeroStudenti;
    }

    private function doAddMateria($materia) {
        $this->materie[$materia] = [];
    }

    public function addMateria($materia) {
        $this->doAddMateria($materia);
        $this->stampaMaterie();
    }

    public function rgfhhhvoto_2_def_v002() {
        /*
         * @return null
         * @nome TODO migliorare nome
         * 
         * @description aggiunge un voto, ma voglio saperlo **SOLO** io.
         * 
         * @possibili miglioramenti migliorare il commento, aggiungere tutte le info su come deployare
         * 
         * @authors Giacomo, Giovanni (e Aldo).
         * 
         * @date 20/20/22
         * @mood cista
         * 
         * @fame livello5
         * 
         * @location FABSCHOOl
         * 
         * @contatti doinomimalemacommentobene@gmail.com 
         * 
         */
    }

    public function addVoto($materia, $voto) {
        // Verifico che esista la chiave $materia dentro
        // l'array delle materie dell'oggetto chiamante
        if (!$this->isMateria($materia)) {
            echo "Materia " . $materia . " non esiste!\n";
            echo "Crearla con la funziona addMateria('" . $materia . "')\n";
            return;
        }

        $this->materie[$materia][] = $voto;
        echo "Aggiunto voto " . $voto . " alla materia " . $materia . "\n";
    }

    private function isMateria($materia) {
        return isset($this->materie[$materia]);
    }

    public function mediaMateria($materia) {
        $mediaMateria = $this->doMediaMateria($materia);

        if ($mediaMateria != null) {
            echo "La media dei voti di " . $materia . " è " . $mediaVoti . "\n";
        }
    }

    private function doMediaMateria($materia) {
        if (!$this->isMateria($materia)) {
            echo "Materia " . $materia . " non esiste, impossibile fare la media!\n";
            return null;
        }

        $voti = $this->materie[$materia];

        $sommaVoti = 0;
        $numeroVoti = 0;

        foreach ($voti as $voto) {
            $sommaVoti += $voto;
            // Equivalente a: $sommaVoti = $sommaVoti + $voto;

            $numeroVoti += 1;
        }

        $sommaVoti = array_sum($voti);
        $numeroVoti = count($voti);

        $mediaVoti = $sommaVoti / $numeroVoti;

        return $mediaVoti;
    }

    public function stampaMaterie() {
        foreach ($this->materie as $materia => $voti) {
            $mediaMateria = $this->doMediaMateria($materia);
            echo $materia . ": ha " . count($voti) . " voti e la media è: " . $mediaMateria . "\n";
        }
    }

    public function stampaNome() {
        echo $this->nome . " " . $this->cognome . "\n";
    }


}