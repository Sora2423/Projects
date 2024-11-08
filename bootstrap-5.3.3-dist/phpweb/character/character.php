<?php
$Characters = [
        [
        "image" => "./gif_character/char_luffy.gif",
        "name" => "monkey d. luffy",
        "allias" =>  "straw hat",
        "bounty" =>  "3,000,000,000",
        "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora quas laudantium quae maxime 
                        accusamus rerum, vitae temporibus eligendi harum officia numquam ut repudiandae sequi dolorum 
                        quam qui cupiditate perspiciatis nobis. Lorem ipsum dolor sit amet, consectetur adipisicing 
                        elit. Quia iure sint, pariatur dolore obcaecati minus doloribus repellat vero maiores alias 
                        eligendi assumenda laudantium placeat veniam atque quo odio ipsa voluptates!",
        "link" => "../phpweb/nft.php?id=luffy"
        ],
        [
                "image" => "./gif_character/chat_zoro.gif",
                "name" => "Roronoa Zoro",
                "allias" =>  "Pirate Hunter",
                "bounty" =>  "1,111,000,000",
                "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora quas laudantium quae maxime 
                                accusamus rerum, vitae temporibus eligendi harum officia numquam ut repudiandae sequi dolorum 
                                quam qui cupiditate perspiciatis nobis. Lorem ipsum dolor sit amet, consectetur adipisicing 
                                elit. Quia iure sint, pariatur dolore obcaecati minus doloribus repellat vero maiores alias 
                                eligendi assumenda laudantium placeat veniam atque quo odio ipsa voluptates!",
                "link" => "../phpweb/nft.php?id=zoro"
        ],
        [
            "image" => "./gif_character/char_nami.gif",
            "name" => "Nami",
            "allias" =>  "Cat Burglar",
            "bounty" =>  "366,000,000",
            "description" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora quas laudantium quae maxime 
                            accusamus rerum, vitae temporibus eligendi harum officia numquam ut repudiandae sequi dolorum 
                            quam qui cupiditate perspiciatis nobis. Lorem ipsum dolor sit amet, consectetur adipisicing 
                            elit. Quia iure sint, pariatur dolore obcaecati minus doloribus repellat vero maiores alias 
                            eligendi assumenda laudantium placeat veniam atque quo odio ipsa voluptates!",
            "link" => "../phpweb/nft.php?id=nami"
        ],
]
?>

<?php foreach($Characters as $Character): ?>
    <div class="card" style="width: 16rem;">
                <h4>WANTED</h4>
                    <img src="<?php echo $Character['image']; ?>" class="character" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $Character['name']; ?><br> <?php echo $Character['allias']; ?></h5>
                        <p><?php echo $Character['bounty']; ?></p>
                        <p class="card-text">DEAD OR ALIVE</p>
                        <div class="long-msg">
                            <p>
                            <?php echo $Character['description']; ?>
                            </p>
                        </div>
                
                    <!-- View Button -->
                    <button class="view-btn" onclick="location.href='<?php echo $Character['link']; ?>'">View</button>
                </div>
    </div>      
<?php endforeach; ?>