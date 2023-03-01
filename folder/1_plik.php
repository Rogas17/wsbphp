<?php
    $firstname = "Dominik";
    $lastname = "Rogoziński";
    echo "imie i nazwisko: $firstname $lastname<br>";
    echo 'imie i nazwisko: $firstname $lastname<br>';

    //heredoc
    echo <<< DATA
        <hr>
        Imię: $firstname<br>
        Nazwisko: $lastname<br>
DATA;
?>