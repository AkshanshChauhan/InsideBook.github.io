<html>
    <style>

        body {
            background-color: pink;
        }

        p {
            background-color: lightgreen;
        }

    </style>
    <body>
        <p>
            <?php
                $name = $_POST["fname"] . " " . $_POST["mname"] . " " . $_POST["lname"];
                $gender =  $_POST["gender"];
                $date = $_POST["date"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                if ($gender=="male" or $gender=="Male" or $gender=="MALE") {
                    echo "welcome mr." . $name;
                }
                else {
                    echo "welcome mrs." . $name;
                }
            ?>
        </p>
    </body>
</html>

<?php

$name = $_POST["fname"] . " " . $_POST["mname"] . " " . $_POST["lname"];
$gender =  $_POST["gender"];
$date = $_POST["date"];
$email = $_POST["email"];
$password = $_POST["password"];
$image = $_POST["image"];

$file = fopen($email . ".txt", "w");

fwrite($file, "Name: " . $name . "\n");
fwrite($file, "Gender: " . $gender . "\n");
fwrite($file, "Date of Birth: " . $date . "\n");
fwrite($file, "Email: " . $email . "\n");
fwrite($file, "password: " . $password . "\n");

fclose($file);

$img = fopen($image, "w");

fwrite($img, $image);

fclose($img);

?>