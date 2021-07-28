<?php

    declare(strict_types=1);

    ini_set('display_errors', '1');
    ini_set('display_startup_errors', '1');
    error_reporting(E_ALL);



    $firstCurrency = $_POST["from"];
    $secondCurrency = $_POST["to"];
    $submitButton = $_POST["submit"];
    $amount = $_POST["amount"];
    $from = $_POST["from"];
    $to = $_POST["to"];



    $euro = 86.83;
    $ruble = 1;

    if($submitButton == "submit"){
        if($from == "Euro" && $to == "Ruble"){
            echo "<script type='text/javascript'>alert($amount * $euro);</script>";
            
        }
        elseif ($from == "Ruble" && $to == "Euro"){
            echo "<script type='text/javascript'>alert($amount / $euro);</script>";
        }
        else{
            echo "<script type='text/javascript'>alert(1);</script>";
        }
        // echo "<script type='text/javascript'>alert('$euro');</script>";
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Dream</title>
    <style>
        .container{
            width: 25%;
            margin: 100px auto;
            padding: 0;
            text-align: center;

        }
        #mainForm {

            text-align: justify;
        }
        #header{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 id="header">CURRENCY CONVERTER</h1>
        <form id="mainForm" action="" method="post">
            <label for="amount" >Amount:</label>
            <input type="number" id="amount" name= "amount" value="1" style="width: 40%;">

            <div id="firstCurrency">
                <label for="from">From  :</label>
                <select name="from" id="from" style="width: 40%;">
                    <option value="Select" selected>Select</option>                 
                    <option value="Euro">Euro</option>
                    <option value="Ruble">Ruble</option>
                </select>
            </div> 
            <div id="secondCurrency">
                <label for="to">To    :</label>
                <select name="to" id="to" style="width: 40%;">
                    <option value="Select" selected>select</option>                 
                    <option value="Euro">Euro</option>
                    <option value="Ruble">Ruble</option>
                </select>
            </div>
            <input type="submit" value="submit" name="submit" id="submit">
            
        </form>
    </div>
</body>
</html>





