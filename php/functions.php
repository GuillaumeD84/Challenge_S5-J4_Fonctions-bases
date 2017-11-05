<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
<!----------------------------------------->
        <article class="Fonction1">
            <h1>Calculs</h1>

<?php

// Retourne la somme et la multiplication de deux nombres passés en paramètre ($num1 et $num2)
function addMul($num1, $num2) {
    echo 'addition : '.($num1 + $num2);
    echo '<br>';
    echo 'multiplication : '.($num1 * $num2);
}

$nb1 = 2;
$nb2 = 10;
echo 'premier nombre : '.$nb1.', deuxième nombre : '.$nb2.'<br><br>';

addMul($nb1, $nb2);

?>

        </article>

<!----------------------------------------->
        <article class="Fonction2">
            <h1>Pair/Impair</h1>

<?php

// Retourne un 'string' indiquant si le nombre passé en paramètre est pair ou impair
function estPair($nb) {
    $isOdd = $nb % 2;
    return 'Le nombre '.$nb.' est '.($isOdd ? 'impair' : 'pair');
}

$nb1 = 8;
$nb2 = 41;
echo 'premier nombre : '.$nb1.', deuxième nombre : '.$nb2.'<br><br>';

echo estPair($nb1);
echo '<br>';
echo estPair($nb2);

?>

        </article>

<!----------------------------------------->
        <article class="Fonction3">
            <h1>Moyenne</h1>

<?php

$listNotes = [12, 18, 5, 5, 20, 20, 20];

echo 'Liste des notes : ';
foreach ($listNotes as $note) {
    echo $note.' ';
}
echo '<br><br>';

// Retourne la moyenne d'un tableau de 'int' passé en paramètre de la fonction
function moyenne($listNotes) {
    $somme = 0;
    // On parcourt chaque élément du tableau pour en faire la somme totale de tous les éléments
    foreach ($listNotes as $note) {
        $somme += $note;
    }

    // On retourne la somme total des notes divisées par le nombre de note, autrement dit la moyenne
    return ($somme / count($listNotes));
}

echo 'Moyenne : '.moyenne($listNotes).'<br>';

?>

        </article>

<!----------------------------------------->
        <article class="Fonction4">
            <h1>Bulletin de classe</h1>

<?php

$eleves = [
    'Mario' => [12, 18, 5, 5, 20, 20, 20],
    'Luigi' => [15, 4, 12, 13, 18, 0],
    'Peach' => [19, 18, 17, 18, 15, 15, 17],
    'Yoshi' => [7, 4, 9, 5, 2, 12, 13],
];

// Retourne la moyenne de chaques élèves d'après le tableau où sont stockés ses notes. Chacun de ces tableaux est contenu dans un autre tableau appelé '$eleves'
function bulletinClasse($eleves) {
    // On parcourt tout d'abord chacun des éléments du tableau '$eleves'
    foreach ($eleves as $nomEleve => $notesEleve) {
        $moyenne = 0;
        $somme = 0;

        // On parcourt ensuite pour chaque sous-tableau, tous les éléments qu'il contient, autrement dit chaques notes, afin d'en faire la somme pour ensuite calculer la moyenne
        foreach ($notesEleve as $note) {
            $somme += $note;
        }

        // On calcule la somme total des notes divisées par le nombre de note de l'élève
        $moyenne = $somme / count($notesEleve);

        // On affiche pour chaque élève sa moyenne
        echo $nomEleve.', Moyenne : '.$moyenne;
        echo "<br>";
    }
}

bulletinClasse($eleves);

?>

        </article>

<!----------------------------------------->
        <article class="Fonction5">
            <h1>Plusieurs calculs en un seul retour...</h1>

<?php

// On retourne un tableau contenant l'addition, la soustraction, la multiplication, la division et le reste (modulo) de deux nombres passés en paramètre
function allCalcs($num1, $num2) {
    $calcResults = array();

    // Addition
    $calcResults['addition'] = $num1 + $num2;
    // Soustraction
    $calcResults['subtraction'] = $num1 - $num2;
    // Multiplication
    $calcResults['multiplication'] = $num1 * $num2;

    // Division (avec prise en charge de l'erreur de division par zéro)
    $num2 === 0 ? $calcResults['division'] = 'erreur, division par 0 !' : $calcResults['division'] = $num1 / $num2;

    // Le reste (avec prise en charge de l'erreur de division par zéro)
    if ($num2 === 0) {
        $calcResults['modulo'] = 'erreur, division par 0 !';
    }
    else {
        $calcResults['modulo'] = $num1 % $num2;
    }

    return $calcResults;
}

$nb1 = 20;
$nb2 = 5;
echo 'premier nombre : '.$nb1.', deuxième nombre : '.$nb2.'<br>';

$operationResults = allCalcs($nb1, $nb2);

echo '<pre>';
print_r($operationResults);
echo '</pre>';

?>

        </article>

<!----------------------------------------->
        <article class="Fonction6">
            <h1>Décompte secondes en heures, minutes, secondes</h1>

<?php

function temps($timeInSeconds) {
    // On calcul le nombre d'heures contenues dans $timeInSeconds
    $hours = floor($timeInSeconds / 3600);
    // On calcul le nombre de minutes restantes contenues dans $timeInSeconds moins le nombre d'heures
    $minutes = floor(($timeInSeconds % 3600) / 60);
    // On calcul le nombre de secondes restantes dans $timeInSeconds moins le nombre d'heures et de minutes
    $seconds = floor(($timeInSeconds % 3600) % 60);

    echo $hours.' heures '.$minutes.' minutes '.$seconds.' secondes';
}

$time = 45236;

echo 'Temps en secondes : '.$time.'<br><br>';

temps($time);

?>

        </article>
    </body>
</html>
