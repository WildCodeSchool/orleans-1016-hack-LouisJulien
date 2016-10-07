<?php
include 'weather_api.php';
?>
<section id="services" class="services bg-primary">
    <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                            <h4>
                                <strong>Service Name</strong>
                            </h4>
                            <div class="location">
                                <?php if (empty($decode)){

                                    echo 'Nous n\'avons pas trouvé : veuillez entrer un nom de ville ou son ID';

                                } else {

                                    echo $decode['name'];

                                }?>
                            </div>
                            <div class="degree">
                                <div class="num">
                                    <?php if (empty($decode)){

                                        echo "?";
                                    } else {
                                        echo round(($decode['main']['temp'] - 273.15),1);
                                    }

                                    ?>
                                    <sup>o</sup>C
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <?php
                        if (empty($weather_type)){
                            echo "<img src=\"images/icons/icon-1.svg\" alt=\">\" width='90'";
                        }
                        elseif ($weather_type=='Rain'){
                            echo "<img src=\"images/icons/icon-10.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Thunderstorm'){
                            echo "<img src=\"images/icons/icon-11.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Drizzle'){
                            echo "<img src=\"images/icons/icon-9.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Snow'){
                            echo "<img src=\"images/icons/icon-14.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Atmosphere'){
                            echo "<img src=\"images/icons/icon-7.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Clear'){
                            echo "<img src=\"images/icons/icon-2.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Clouds'){
                            echo "<img src=\"images/icons/icon-6.svg\" alt=\">\" width='90'";
                        }

                        elseif ($weather_type=='Extreme'){
                            echo "<img src=\"images/icons/icon-8.svg\" alt=\">\" width='90'";
                        }

                        else {
                            echo "<img src=\"images/icons/icon-5.svg\" alt=\">\" width='90'";
                        }

                        ?>
                        <span><img src="images/icon-umberella.png" alt="">
                            <?php if (empty($decode)){
                                echo '?';
                            } else {
                                echo $decode['main']['humidity'].'%';
                            }
                            ?>
								</span>
                        <span><img src="images/icon-wind.png" alt="">
                            <?php if (empty($decode)){
                                echo "?";
                            } else {
                                echo round(($decode['wind']['speed']*1.609)).' km/h';
                            }
                            ?>
								</span>
                    </div>

                    <div class="col-lg-offset-2 col-lg-4">
                        <div class="deezer center-block">
                            <?php include "deezer_api.php"; ?>
                        </div>
                    </div>



    </div>
        </div>
    <!-- /.container -->
</section>