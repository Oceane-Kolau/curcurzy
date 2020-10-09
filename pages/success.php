<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../layouts/head.php' ?>
   <title>Success</title>
</head>
<body>
    <?php include '../layouts/header.php'; ?>
    <section class="section2-home">
        <h2 class="title2-home"> Order confirmation
            <hr>
        </h2>

        <div class="flex-container-success">
            <p>Votre commande est validée elle sera envoyé sous reservatoin de paiement à : <?php echo $_GET['email']; ?>
            </p>
            <div class="flex-container-content-success">
            <img class="illustration-success" src='../assets/images/home/grid-pic.jpg' alt="" />
            </div>
        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>