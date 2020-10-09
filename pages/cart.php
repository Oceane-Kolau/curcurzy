<?php
session_start();
require '../functions.php';

if (!empty($_GET)) {
    $product = $_GET['product'];
    deleteArticle($product);
};
$panierInfos = getCartInfos();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layouts/head.php' 
    ?>
    <title>Cart</title>
</head>

<body>
    <?php include '../layouts/header.php'; ?>
    
    <div class="header-shop">
        <div>
            <button class="btn-cart1" href="shop.php" type="submit">BACK TO SHOP</button>
        </div>
    </div>

    <section class="section2-home">
        <h2 class="title2-home">Cart
            <hr>
        </h2>
        <table class="orderTable">
            <thead class="thead">
                <tr>
                    <th colspan="2">#</th>
                    <th colspan="2">Product</th>
                    <th colspan="2">Quantity</th>
                    <th colspan="2">Price</th>
                    <th colspan="2">Total</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $total = 0;
            for ($i = 0; $i < count($panierInfos); $i++) {
                $total =+ $panierInfos[$i]['qty'] * 27.5;
            ?>
                <tr>
                    <th scope="row">#</th>
                    <td><?php echo $panierInfos[$i]['product'] ?></td>
                    <td><?php echo $panierInfos[$i]['qty'] ?></td>
                    <td>12 €</td>
                    <td><?php echo $panierInfos[$i]['qty'] * 27.5 ?>€</td>
                    <td>
                        <form method="GET">
                            <input type="text" class="d-none" name="product" value="<?php echo $panierInfos[$i]['product'] ?>">
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </form>
                    </td>
                </tr>

            <?php } ?>
            </tbody>
        </table>
        <div class="total">
            Total : <?php echo $total ."€"; ?>
        </div>

        <div class="payBtn">
            <form action="success.php">
                <input type="text" name="name" id="name" placeholder="name">
                <button class="submitBtn" type="submit">Pay</button>
            </form>
        </div>


        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>