<?php

require('db-functions.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <script src="https://kit.fontawesome.com/de7e6c09fa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/update.css">

    <title>LandingPage : Pricing Update</title>
</head>

<body>

    <section class="container">
        <form action="" methode="">
            <div class="pricing-u">
                <div class="text-pricing">
                    <h3>Update Pricing</h3>
                </div>

                <div class="cards-pricing">

        <?php

        foreach ($pricings as $pricing) { ?>

                    <div class="card-u">  
                        <div class="card-u-center">
                            <div>
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="<?= $pricing['name']?>" required>
                            </div>
                            <div>
                                <label for="name">Price</label>
                                <input type="number" min="0" id="price" name="price" value="<?= $pricing['price']?>" required>
                            </div>
                            <div>
                                <label for="name">Sale</label>
                                <input type="number" min="0" id="sale" name="sale" value="<?= $pricing['sale'] ?>" required>
                            </div>
                            <div>
                                <label for="name">Bandwidth</label>
                                <input type="number" min="0" id="bandwidth" name="bandwidth" value="<?= $pricing['bandwidth'] ?>" required>
                            </div>
                            <div>
                                <label for="name">OnlineSpace</label>
                                <input type="number" min="0" id="onlinespace" name="onlinespace" value="<?= $pricing['online_space'] ?>" required>
                            </div>
                            <div>
                                <label for="name">Support</label>
                                <input type="number" min="0" max="1" step="1" id="support" name="support" value="<?= $pricing['support'] ?>" required>
                            </div>
                            <div>
                                <label for="name">Domain</label>
                                <input type="text" id="domain" name="domain" value="<?= $pricing['domain'] ?>" required>
                            </div>
                            <div>
                                <label for="name">Hidden Fees</label>
                                <input type="number" min="0" max="1" step="1" id="hiddenfees" name="hiddenfees" value="<?= $pricing['hidden_fees'] ?>" required>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" Value="Update">
                        </div>
                    </div>

        <?php 
        } ?>

                </div>
            </div>
        </form>
    </section>

</body>