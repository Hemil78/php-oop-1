<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->


<?php
require_once __DIR__ . "/classes/movies.php";

$pulpFiction = new Movies("Pulp Fiction", "Quentin Tarantino", "John Travolta, Uma Thurman, Samuel Lee Jackson", 1994, "Giallo, Drammatico");

$fightClub = new Movies("Fight Club", "David Fincher", "Brad Pitt, Edward Norton, Helena Bonham Carter", 1999, "Thriller, Drammatico");


echo "<h2>I film di oggi sono {$pulpFiction->getTitolo()} e {$fightClub->getTitolo()}, diretti da due famosi registi, {$pulpFiction->getRegisti()} e {$fightClub->getRegisti()}. Un cast di attori davvero impressionante: {$pulpFiction->getAttori()} per il primo e {$fightClub->getAttori()} per il secondo.</h2>";