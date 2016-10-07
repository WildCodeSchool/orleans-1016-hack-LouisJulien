<?php
    if (isset($weather_type)) {
        $query_deezer = "https://api.deezer.com/search?q='.$weather_type.'";
        $file_deezer = file_get_contents($query_deezer);
        $decode_deezer = json_decode($file_deezer, true);
        $decode_deezer[array_rand($decode_deezer)];



        echo '<iframe class="embed-responsive-item" scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=true&width=300&height=300&color=076abf&layout=&size=medium&type=tracks&id=' . $decode_deezer['data'][0]['id'] . '&app_id=1" width="300" height="300"></iframe></br>';
        echo 'le titre selectioné est : ' . $decode_deezer['data'][0]['title'];
    } else {
        return 'error';
    }
?>

