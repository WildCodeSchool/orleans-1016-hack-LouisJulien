<?php

    foreach ($_POST as $key => $value){
        $post[$key] = trim(htmlentities($value));
    }

    $recherche = $post['search'];

    $query_deezer = "https://api.deezer.com/search?q='.$recherche.'";
    $file_deezer = file_get_contents($query_deezer);
    $decode_deezer = json_decode($file_deezer, true);

    echo 'le titre selectioné est : '.$decode_deezer['data'][0]['title'];
    echo '<iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=076abf&layout=&size=medium&type=tracks&id='.$decode['data'][0]['id'].'&app_id=1" width="300" height="300"></iframe>';


