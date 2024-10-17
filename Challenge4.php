<?php
// nom:film et acteur 
$movies = [
    'je suis un monstre ' => ['Stephen Weeks,', 'Milton Subotsky,', 'Christopher Lee'],
    ' Black Arrow' =>        ['oliver reed', 'benedict taylor', 'stephan chase'],
    'kidnapped' =>           ['Michael Caine', 'Lawrence Douglas', 'Jack Hawkins'],
];

//Movies and actors 


foreach ($movies as $films => $actors) {
    // afficher les principaux acteurs
    echo "Dans le film $films , les principaux acteurs sont :<br>";
    foreach ($actors as $actor)

        echo "- $actor <br>";  
        echo "<br>";

    
}
