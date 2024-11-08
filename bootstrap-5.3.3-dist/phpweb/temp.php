<?php
// Array containing character name and bounty amount
$Nb = array (
    "Monkey D. Luffy",
    "$2,000,000,000"
);

// Associative array storing character details
$character = array (
    "Name : " => "Monkey D. Luffy",
    "Age : " => "19 ",
    "Occupattion : " => "Pirate Captain Emperor",
    "Birth : " => "East Blue(Goa Kingdom)"
);

// Extracting keys from the character array
$key = array_keys($character);

// Array storing a brief description about the character
$description  = array(
    "Monkey D. Luffy, commonly known as Straw Hat Luffy or simply Straw Hat, is the founder, captain, and strongest combatant of the increasingly",
    " infamous and powerful Straw Hat Pirates. He fearlessly pursues the legendary treasure of the late Gol D. Roger in order to become the new Pirate King and reach a further, untold dream . He believes that being the Pirate King means having the most freedom in the world.
"
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wanted Poster</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS and Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css2/fontawesome.min.css">
    <link rel="stylesheet" href="assets/homepage.css">
</head>

<body>
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <!-- Displaying character GIF -->
                    <img class="char-gif" src="../labexercise/gif_character/LUFFY.gif" class="char-img">
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <?php
                        // Loop through the Nb array to display the character's name and bounty
                        foreach($Nb as $NB){
                            echo "<h2> $NB  </h2> <br/>";
                        }
                        ?>

                        <?php 
                        // Loop through character details and display them
                        foreach($character as $luffy => $value){
                            echo "<b>$luffy </b>" . " " . $value . "<br/>";
                        }
                        ?>

                        <h6 class="description">Description:</h6>

                        <?php
                        // Loop through the description array and print each line
                        foreach($description as $info){
                            echo $info . " <br/>";
                        }
                        ?>

                        <ul class="list-unstyled pb-3"></ul>

                        <div class="row pb-3">
                            <div class="col d-grid">
                                <!-- Execute button -->
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                            </div>
                            <div class="col d-grid">
                                <!-- Save button -->
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocart">Add to Cart</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
