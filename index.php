<?php
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
            foreach($film_list as $film){
                echo '<ul>';                    
                foreach ($film as $key => $value) {
                    echo '<li>';
                    if ($key == 'genere') {
                        foreach ($value as $genere) {
                            echo $key, ' : ', $genere, ' - ';
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