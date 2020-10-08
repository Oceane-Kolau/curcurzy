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
    <title>Products</title>
</head>

<body>
    <?php include '../layouts/header.php'; ?>
    <section class="section2-home">
        <h2 class="title2-home">Cart
            <hr>
        </h2>
        <table>
            <thead>
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
                    <td>270 $</td>
                    <td><?php echo $panierInfos[$i]['qty'] * 27.5 ?>$</td>
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
        Total : <?php echo $total ."$"; ?>

        <div>
            <form action="success.php">
                <input type="email" name="email" id="email">
                <button type="submit">Pay</button>
            </form>
        </div>


        </div>
    </section>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>