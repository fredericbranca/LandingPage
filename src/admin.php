<?php

require('db-functions.php'); 

?>

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
        <div class="pricing-u">
            <div class="text-pricing">
                <h3>Update Pricing</h3>
            </div>
            
            <div class="cards-pricing">
                
                <?php

foreach (getPricings() as $pricing) { ?>

                <form action="db-functions.php?id=<?= $pricing['id_pricing'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="card-u">  
                        <div class="card-u-center">
                            <div>
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="<?= $pricing['name']?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="price">Price</label>
                                <input type="number" min="0" id="price" name="price" value="<?= $pricing['price']?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="sale">Sale</label>
                                <input type="number" min="0" id="sale" name="sale" value="<?= $pricing['sale'] ?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="bandwidth">Bandwidth</label>
                                <input type="number" min="0" id="bandwidth" name="bandwidth" value="<?= $pricing['bandwidth'] ?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="onlinespace">OnlineSpace</label>
                                <input type="number" min="0" step="0.01" id="onlinespace" name="onlinespace" value="<?= $pricing['onlineSpace'] ?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="support">Support</label>
                                <input type="number" min="0" max="1" step="1" id="support" name="support" value="<?= $pricing['support'] ?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="domain">Domain</label>
                                <input type="text" id="domain" name="domain" value="<?= $pricing['domain'] ?>" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="hiddenfees">Hidden Fees</label>
                                <input type="number" min="0" max="1" step="1" id="hiddenfees" name="hiddenfees" value="<?= $pricing['hiddenFees'] ?>" autocomplete="off" required>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" name="submit" id="submit" Value="Update">
                        </div>
                    </div>
                </form>
        <?php 
        } ?>

                </div>
            </div>
    </section>

    <script src="../js/script.js"></script>

    <?php 
    if (isset($_SESSION['Message'])) { ?>
         <div id="alert"><?= $_SESSION['Message'] ?></div>
        <script>tempAlert(1000)</script>
<?php   unset($_SESSION['Message']);
    } ?>

</body>