<?php
$Info = [
    [   "id" => "luffy",
        "image" => "../phpweb/gif_character/LUFFY.gif",
        "name" => "Monkey D. Luffy",
        "alias" => "Straw Hat",
        "bounty" => "3,000,000,000",
        "occupation" => "Pirate Captain Emperor",
        "birthplace" => "East Blue (Goa Kingdom)",
        "description" => "Monkey D. Luffy, commonly known as Straw Hat Luffy or simply Straw Hat, is the founder, captain, and strongest combatant of the increasingly infamous and powerful Straw Hat Pirates. He fearlessly pursues the legendary treasure of the late Gol D. Roger in order to become the new Pirate King and reach a further, untold dream. He believes that being the Pirate King means having the most freedom in the world."
    ],
    [
        "id" => "zoro",
        "image" => "../phpweb/gif_character/zoronft.gif",
        "name" => "Roronoa Zoro",
        "alias" => "Pirate Hunter",
        "bounty" => "1,100,000,000",
        "occupation" => "Swordsman",
        "birthplace" => "East Blue (Shimotsuki Village)",
        "description" => "Roronoa Zoro is the first member of the Straw Hat Pirates and serves as their swordsman. He is known for his exceptional swordsmanship and ambition to become the world's strongest swordsman."
    ],
    [
        "id" => "nami",
        "image" => "../phpweb/gif_character/char_nami.gif",
        "name" => "Nami",
        "alias" => "Cat Burglar",
        "bounty" => "66,000,000",
        "occupation" => "Navigator",
        "birthplace" => "East Blue (Konomi Island)",
        "description" => "Nami is the navigator of the Straw Hat Pirates. She is skilled in cartography and weather prediction, often using her knowledge to guide the crew through dangerous waters. Nami dreams of creating a complete map of the world and is known for her intelligence and resourcefulness."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('../phpweb/components/nfthead.php'); ?>
</head>
<body>
    <?php include('../phpweb/components/header.php'); ?>

    <?php foreach($Info as $Infos): ?>
    <?php include('../phpweb/contents/nftbody.php'); ?>
    <?php endforeach; ?>
    <?php include('../phpweb/components/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
