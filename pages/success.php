<?php 
session_start();
session_destroy();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../layouts/head.php' ?>
   <title>Success</title>
</head>
<body>
    <?php include '../layouts/header.php'; ?>
    <section class="section2-home">
        <h2 class="title2-home">Validate command
            <hr>
        </h2>
        <div class="flex-container2-home">
           Votre commande est validée elle sera envoyé sous reservatoin de paiement à : <?php echo $_GET['email']; ?>
        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>