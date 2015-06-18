<?php

if (!isset($_SESSION["passPhrase"])) {
    $_SESSION["passPhrase"] = "";
}

if ($_POST) {
    if (isset($_POST["passPhrase"]))
        $_SESSION["passPhrase"] = $_POST["passPhrase"];
}

$correctPass = "testPassword";

if ($_SESSION["passPhrase"] != $correctPass) {
    echo '
        <!doctype html>
        <html>
            <head>
                <meta charset="utf-8">
                <title>Enter your Passphrase</title>
            </head>
            <body>
                <form method="post">
                    <label>Enter passphrase: </label>
                    <input type="text" name="passPhrase" placeholder="Passphrase">
                    <input type="submit" value="Submit">
                </form>
            </body>
        </html>
    ';
    die;
}