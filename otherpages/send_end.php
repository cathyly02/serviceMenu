<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "lycathy71@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo "
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Princess Nails Service Menu</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.cdnfonts.com/css/maharlika" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/c011338aa2.js" crossorigin="anonymous"></script>
        <style>
            @import url('https://fonts.cdnfonts.com/css/maharlika');
        </style>
    </head>
    <body>
       <div class="header">
            <label class="hamburger-menu">
                <input type="checkbox">
            </label>
            <aside class="sidebar">
                <div>
                    <a href="../index.html">
                        <button class="sibebar-text">
                             Home
                        </button>
                    </a>
                </div>
                <div>
                    <a href="manicure.html">
                        <button class="sibebar-text">
                            Manicures
                        </button>
                    </a>
                </div>
                <div>
                    <a href="pedicure.html">
                        <button class="sibebar-text">
                            Pedicures
                        </button>
                    </a>
                </div>
                <div>
                    <a href="fill.html">
                        <button class="sibebar-text">
                            Fills
                        </button>
                    </a>
                </div>
                <div>
                    <a href="waxing.html">
                        <button class="sibebar-text">
                            Waxing
                        </button>
                    </a>
                </div>
                <div>
                    <a href="addon.html">
                        <button class="sibebar-text">
                            Add Ons
                        </button>
                    </a>
                </div>
            </aside>
            <div class="logo">
                <a href="../index.html">
                    <button>Princess Nails</button>
                </a>
            </div>

        <div class="container">
            <h1>Contact Us</h1>
        </div>
       </div>

       <!--Under the Photo Header-->

        <div class="services">
            <div class="square">
                <a href="../index.html">
                    <button id="Back">Back to Home</button>
                </a>
            </div>

            <div class = "form">    
            <h3>Thank you so much for your feedback. We will get back to you in a bit.</h3>

            </div>


        </div>

<!--------------Footer------------->
<div class = "footer">
    <p>Follow Us On Social Media or Leave a Review</p>
    <a href = "https://www.facebook.com/AnthemPrincessNails"><i class="fa-brands fa-facebook"></i></a>
    <a href = "https://www.google.com.tr/search?q=The+Princess+Nails+85086&sca_esv=595760448&ei=jxmXZeHqOcjOkPIP7fuHgAw&ved=0ahUKEwih7rLOzcSDAxVIJ0QIHe39AcAQ4dUDCBA&uact=5&oq=The+Princess+Nails+85086&gs_lp=Egxnd3Mtd2l6LXNlcnAiGFRoZSBQcmluY2VzcyBOYWlscyA4NTA4NjIIEAAYgAQYogQyCBAAGIAEGKIESPoQULYDWPoLcAJ4AZABAJgBqAGgAYsCqgEDMS4xuAEDyAEA-AEBwgIKEAAYRxjWBBiwA-IDBBgAIEHiAwUSATEgQIgGAZAGCA&sclient=gws-wiz-serp"><i class="fa-brands fa-google-plus"></i></a>
    <a href = "https://www.instagram.com/princessnailsanthem/"><i class="fa-brands fa-instagram"></i></a>
    <a href = "https://www.yelp.com/biz/the-princess-nails-anthem"><i class="fa-brands fa-yelp"></i></a>
    <p>Copyright © 2024, Princess Nails Menu</p>
</div>
    </body>
</html>


";
?>
