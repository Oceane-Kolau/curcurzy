<!DOCTYPE html>
<html lang="en">

<head>
   <?php include 'layouts/head.php' ?>
   <title>CCRZY Home</title>
</head>

<body>
    <?php include 'layouts/header.php'; ?>
    <section>
        <div class="container2-home">
            <div class="presentation-home">
                <h1 class="title1-home">PATTYPAN <br>MASTER</h1>
            </div>
            <div class="img-home">
                <img src='assets/images/home/pattypan-cucurzy.png' alt="pattypan cucurzy" />
            </div>
            <div class="description-home">
                <h2>Welcome in the enchanted world of Cucurbits...</h2>
                <p class="paragraphe-home">Throughout your journey, you will encounter endearing human beings blessed with the most extravagant personalities.<br>
                    You will discover the craziest events involving fierce competition.<br>
                    But first and foremost, you will learn about the wonderful benefits of cucurbits, represented at the forefront by our succulent Pattypan Master.<br>
                    <span>Please enjoy the ride!</span></p>
                <button class="btn-home" onclick="window.location.href='products.php';">DISCOVER OUR PRODUCTS</button>
            </div>
        </div>
    </section>
    <section class="section2-home">
        <h2 class="title2-home">THE CUCURZY WORLD
            <hr>
        </h2>
        <div class="flex-container2-home">
            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='products.php'>
                        <img src='assets/images/products/cucumber.jpg' alt="biologic cucumber powered by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">CUCUMBER</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                        Benefits<br>
                        Helps relaxation & mind focus</p>
                    <h4 class="title4-home">Products</h4>
                    <p> <a class="box-text-paragraph-home" href="products.php">Learn more ></a></p>
                </div>
            </div>
            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='assets/images/athletes/antonia-lakrazy.jpg' alt="woman athletes sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">ANTONIA LAKRAZY</h3>
                    <p>Antonia inherited the AK-47 mastery from her father, a former ruthless mercenary leading « The Pumpkin Kanibals », one of the most violent militia the Soviet Union has known.<br>
                        <h4 class="title4-home">Athletes</h4>
                        <a class="box-text-paragraph-home" href="athletes.php">Learn more ></a>
                </div>
            </div>

            <div class="flex-box-home">
                <div class="flex-box-home-img">
                    <a href='athletes.php'>
                        <img src='assets/images/products/pumpkin.jpg' alt="events with pumpkin sponsored by cucurzy" />
                    </a>
                </div>
                <div class="box-text-home">
                    <h3 class="title3-home">THE PUMPKIN CARVING FACTORY</h3>
                    <p>10 OCT 2020</p>
                    <p>An event open to creative minds and the most eccentric artists coming from all over the world, that wanna make a statement…through the Queen of Cucurbits!</p>
                    <h4 class="title4-home">Events</h4>
                    <a class="box-text-paragraph-home" href="events.php">Learn more ></a>
                </div>
            </div>
        </div>
    </section>
    <div class="info-container-home">
        <div class="illustration-home">
            <div>
            <img src='assets/images/home/info-chart.png' alt="cucurzy benefits information" />
            </div>
            <div>
            <img src='assets/images/home/grid-pic.jpg' alt="cucurzy benefits information" />
            </div>
        </div>
    </div>

    <?php include 'layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>