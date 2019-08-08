<?php
session_start();
if (isset($_SESSION['userid'])) {
    $usrid = $_SESSION['userid'];

    include 'functions.php';

    if (isset($_POST["add"])) {
        $id = $_POST['id'];
        
        $liqroo_url = $_POST['liqroo_url'];
        $liqroo_price = $_POST['liqroo_price'];

        if(isset($_POST['liqroo_price']) && !empty($_POST['liqroo_price'])){
            $liqroo_price = $_POST['liqroo_price'];

        }else{
            $liqroo_price = 'NULL';
        }

        $url1 = $_POST['Whisky_Exchnage_Url'];
        $url1_price = $_POST['Whisky_Exchnage_Price'];

        if(isset($_POST['Whisky_Exchnage_Price']) && !empty($_POST['Whisky_Exchnage_Price'])){
            $url1_price = $_POST['Whisky_Exchnage_Price'];

        }else{
            $url1_price = 'NULL';
        }

        $url2 = $_POST['Master_Of_Malt_Url'];
        $url2_price = $_POST['Master_Of_Malt_Price'];

        if(isset($_POST['Master_Of_Malt_Price']) && !empty($_POST['Master_Of_Malt_Price'])){
            $url2_price = $_POST['Master_Of_Malt_Price'];

        }else{
            $url2_price = 'NULL';
        }

        $url3 = $_POST['DrinkSupermarket_Url'];
        $url3_price = $_POST['DrinkSupermarket_Price'];

        if(isset($_POST['DrinkSupermarket_Price']) && !empty($_POST['DrinkSupermarket_Price'])){
            $url3_price = $_POST['DrinkSupermarket_Price'];

        }else{
            $url3_price = 'NULL';
        }

        $url4 = $_POST['Other_Site_Url'];
        $url4_price = $_POST['Other_Site_Price'];

        if(isset($_POST['Other_Site_Price']) && !empty($_POST['Other_Site_Price'])){
            $url4_price = $_POST['Other_Site_Price'];

        }else{
            $url4_price = 'NULL';
        }

        $url5 = $_POST['url5'];
        $url5_price = $_POST['URL5_Price'];

        if(isset($_POST['URL5_Price']) && !empty($_POST['URL5_Price'])){
            $url5_price = $_POST['URL5_Price'];

        }else{
            $url5_price = 'NULL';
        }

        // echo "<pre>";
        // print_r($_POST); 
        // echo "</pre>";
        // die();
        $crud->insert('cms', "LIQROO_ID = '$id',liqroo_url = '$liqroo_url',liqroo_price = $liqroo_price, URL1 = '$url1', URL1_price = $url1_price, URL2 = '$url2', URL2_price = $url2_price, URL3 = '$url3', URL3_price = $url3_price, URL4 = '$url4', URL4_price = $url4_price, URL5 = '$url5', URL5_price = $url5_price, Last_Updated_By = '$usrid'", $conn);


    }
    if (isset($_POST['view'])) {

        header("location:index.php");

    }
    include_once 'body.php';
} else {
    header("Location: login.php");
}
