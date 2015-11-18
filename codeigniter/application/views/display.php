<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="<?php echo base_url(); ?>../css/main.css" type="text/css" rel="stylesheet" />
</head>

<body>


    <?php
    for($i = 0; $i < count($search->response->beers->items); $i++ ) {
        
        $beerName = $search->response->beers->items[$i]->beer->beer_name;
        $beerABV = $search->response->beers->items[$i]->beer->beer_abv;
        $beerDescrip = $search->response->beers->items[$i]->beer->beer_description;
    ?>



        <div id="container">
            <p>
                <?php echo $beerName ?>
            </p>
            <p>
                ABV: <?php echo $beerABV ?>
            </p>
            <p>
                <?php echo $beerDescrip ?>
            </p>
        </div>
        </br>
        </br>
        </br>
        </br>

        <?php
    }  
        ?>

</body>

</html>