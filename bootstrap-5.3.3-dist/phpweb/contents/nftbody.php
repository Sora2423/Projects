<div class="container pb-5">
        <div class="row">
            <!-- COLUMN 1 FOR IMAGE -->
            <div class="col-lg mt-5">
                <div class="card mb-3">
                    <img src="<?php echo $Infos['image']; ?>" alt="<?php echo $Infos['name']; ?>" class="card-img-top"> <!-- Accessing the first character -->
                </div>
            </div>

            <!-- COLUMN 2 FOR INFO -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div id="<?php echo $Infos['id']; ?>" class="card-body">
                        <h5><?php echo $Infos['name']; ?></h5> <!-- Accessing the first character -->
                        <p><strong>Alias:</strong> <?php echo $Infos['alias']; ?></p>
                        <p><strong>Bounty:</strong> <?php echo $Infos['bounty']; ?></p>
                        <p><strong>Occupation:</strong> <?php echo $Infos['occupation']; ?></p>
                        <p><strong>Birthplace:</strong> <?php echo $Infos['birthplace']; ?></p>
                        <h6 class="description">Description:</h6>
                        <p><?php echo $Infos['description']; ?></p>

                        <div class="row pb-3">
                            <div class="col d-grid">
                                <!-- Buy button -->
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                            </div>
                            <div class="col d-grid">
                                <!-- Add to Cart button -->
                                <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocart">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
