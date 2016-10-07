<?php

        if (!isset($weather_type)) {

            echo '<p><q>Tout vient a point a qui sait attendre !</q><p>';

        } elseif ($weather_type == 'Clouds') {

            echo '<p><q>“La faim est un nuage d\'où il tombe une pluie de science et d\'éloquence. La satiété est un autre nuage qui fait pleuvoir une pluie d\'ignorance et de grossièreté.”</q></p></<br><strong>Platon</strong>';

        } elseif ($weather_type == 'Thunderstorm') {

            echo '<p><q>“L\'habituel défaut de l\'homme est de ne pas prévoir l\'orage par beau temps.”</q></p></<br><strong style="text-align: center">Machiaveli</strong>';

        } elseif ($weather_type == 'Drizzle') {

            echo '<p><q>“En septembre, la bruine, - Est toujours bonne à la vigne.”</q></p></<br><strong>Inconnu</strong>';

        } elseif ($weather_type == 'Rain') {

            echo '<p><q>“La pluie tombe toujours plus fort sur un toit percé.”</q></p></<br><strong>Proverbe Japonais</strong>';

        } elseif ($weather_type == 'Snow') {

            echo '<p><q>““Qui a plus de toits a plus de neige.””</q></p></<br>Proverbe Persan';

        } elseif ($weather_type == 'Atmosphere') {

            echo '<p><q>“C\'est l\'incertitude qui nous charme. Tout devient merveilleux dans la brume.”</q></p></<br><strong>Oscar Wilde</strong>';

        } elseif ($weather_type == 'Clear') {

            echo '<p><q>“Les mots sans les pensées ne vont jamais au ciel.”</q></p></<br><strong>William Shakespeare</strong>';

        } elseif ($weather_type == 'Extreme') {

            echo '<p><q>“La mer est aussi profonde dans le calme que dans la tempête.”</q></p></<br><strong>John Donne</strong>';

        }
 ?>