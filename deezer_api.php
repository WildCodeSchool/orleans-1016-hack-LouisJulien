<?php
    if (isset($weather_type)) {
        $query_deezer = "https://api.deezer.com/search?q='.$weather_type.'";
        $file_deezer = file_get_contents($query_deezer);
        $decode_deezer = json_decode($file_deezer, true);
        $id_deezer1 = $decode_deezer['data'][rand(0,10)];



        echo '<iframe class="embed-responsive-item" scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=true&width=400&height=400&color=076abf&layout=&size=medium&type=tracks&id=' . $id_deezer1['id'] . '&app_id=1" width="400" height="400"></iframe></br>';
    } else {
        return 'error';
    }
?>

