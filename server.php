<?php
require __DIR__.'/database.php';

$selected_genre = $_GET['genre'];

if(empty($selected_genre)){

    $json= json_encode($database);

} else{

    $filtered_discs = [];

    foreach($database as $disc) {
        
        if($disc['genre'] === $selected_genre){
            $filtered_discs = $disc;
        }
    }

    $json = json_encode($filtered_discs);
}



header('Content-Type: application/json');

echo $json;
?>