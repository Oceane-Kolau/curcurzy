<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../layouts/head.php' ?>
   <title>Contact</title>
</head>

<body>
    <?php include '../layouts/header.php'; ?>
    <form action="thanks.php" method="post">
        <div class="container-contact">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2 class="h2-contact">Contact Us</h2>
                    <input type="text" class="field" name="user_name" placeholder="Your Name">
                    <input type="email" class="field" name="user_email" placeholder="Your Email">
                    <input type="tel" class="field" name="user_telephone" placeholder="Phone">
                    <select id="subject" name="subject" class="field">
                        <option value="Choice">Choose a request</option>
                        <option value="Partnerships">Partnerships</option>
                        <option value="Technical Issues">Technical Issues</option>
                        <option value="Jobs">Jobs</option>
                        <option value="Complaints">Complaints</option>
                        <option value="Other">Other</option>
                    </select>
                    <textarea name="message" class="field" placeholder="Message"></textarea>
                    <button type="submit" class="btn">Send</button>
                </div>
            </div>
        </div>
    </form>
    <?php include '../layouts/footer.php'; ?>
    <script src="script.js"></script>
</body>

</html>