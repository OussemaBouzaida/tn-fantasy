<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-contact.css">
    <title>contact form</title>
</head>

<body>
<?php include 'navbar.php' ?>
  <div class="center">
      <header>contact</header>
      <form action="https://formsubmit.co/yourmail@email.com" method="POST">


        <div class="txt_field">
          <input type="text" name="name" id="name" required>
          <span></span>
          <label>Full Name</label>
        </div>

        <div class="txt_field">
            <input type="text" name="email" id="email" required>
            <span></span>
            <label>Email</label>
        </div>

        <div class="txt_field">
          <input type="text" name="message" id="message" required>
          <span></span>
          <label>Message</label>
        </div>

        <div class="pass">
            <input class="pass" type="reset" value="Reset">
        </div>

        <input type="submit" value="Submit">
        <input type="hidden" name="_template" value="table">

        <div class="homePage_link">
        <a href="/tn-fantasy/index.php">Back to Home page</a>
        </div>

      </form>
  </div>
</body>
</html>

