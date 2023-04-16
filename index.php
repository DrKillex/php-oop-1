<?php
// richiamo i componenti
require_once __DIR__.'/models/ClassFilm.php';
require_once __DIR__.'/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <div>       
        <?php
            // per ogni film nella lista dei film
            foreach($film_list as $film){
                // creo un ul
                echo '<ul>'; 
                // per ogni chiave del film
                foreach ($film as $key => $value) {
                    // creo un li e ci stampo dentro il valore della chiave a seconda del formato che voglio visualizzare
                    echo '<li>';
                    if ($key == 'genere') {
                        foreach ($value as $genere) {
                            echo $genere, ' - ';
                        };
                    } elseif ($key == 'min'){
                        echo 'durata : ', $value, ' minuti';
                    } else {
                        echo $key, ' : ', $value;
                    }
                    echo '</li>';
                }
                echo '</ul>';
            }
        ?>
    </div>
</body>

</html>