<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <title>Contact Form</title>
</head>
<body>
    <h1>Contact Form</h1>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <input type="text" name="name" id="name" class="form" placeholder="Name:"
            value="<?php if (!$send && isset($name)) echo $name ?>">

            <input type="email" name="email" id="email" class="form" placeholder="Email:"
            value="<?php if (!$send && isset($email)) echo $email ?>">

            <!-- see style at the end -->
            <input type="password" name="country" id="country" class="form" placeholder="Country:"
            value="<?php if (!$send && isset($country)) echo $country ?>">

            <textarea name="message" id="message" class="form" placeholder="Your Message:"
            ><?php if (!$send && isset($message)) echo $message ?></textarea>

            <?php if (!empty($errors)): ?>
                <div class="alert error">
                        <?php echo $errors; ?>
                </div>
                <?php elseif($send): ?>
                    <div class="alert success">
                        <p>Your message has been submitted</p>
                </div>
            <?php endif ?>


            <input type="submit" name="submit" id="submit" class="send" value="Send Message">
        
        </form>

        <p class="how">
        This form works with HTML, CSS and PHP.
        <br />
        The code includes basic filter design.
        <br>
        It also includes a Honey Pot for avoid bots.
        </p>

        <p class="how">
        Files avaliable at : <a href="http://www.myhub.page">MyHub.page</a> 
        </p>
    </div>
</body>
</html>