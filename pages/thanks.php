<!DOCTYPE html>
<html lang="en">
<head>
<head>
   <?php include '../layouts/head.php' ?>
   <title>Thanks</title>
</head>
</head>

<body>
    <?php include '../layouts/header.php'; ?>

    <div class="container-message">
    <div class="container-text-thanks">
        <p> <span class ="title-big-thanks">Thank You !</span></p>  
        <img src="../assets/images/thanks/check.gif" class ="sent-gif-thanks" alt="">
        <p class="content-thanks">Hello <?php echo $_POST["user_name"]?>, your request has been successfully sent. </br> Our team will contact you shortly. <br> Your request: "<span class ="italic-message"><?php echo $_POST["message"]?></span>" <br> <a href="../index.php" class="orange-emphasis">Retourner au menu </a></p> 
    </div>
    </div>
    <div class="container-team">
        <div class="container-team-gif">
            <p>Our amazing team</p>
            <img src="../assets/images/thanks/team-picture.jpg" alt="team picture">
        </div>
    </div>

    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>
</html>