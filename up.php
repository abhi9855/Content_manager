<?php
session_start();
if (isset($_SESSION['userid'])) {
    $usrid = $_SESSION['userid'];
    // include_once 'header.php';
    ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
    include_once 'functions.php';
    $id1 = $_GET['id'];
    $page_ID = $_GET['page_no'];
    $search = $_GET['query'];
    echo "<script> console.log($search); </script>";
    if (isset($id1)) {
        # code...
        $result = $crud->update_data($id1, "cms", $conn);
        $fetch = mysqli_fetch_assoc($result);
        $fetchid = $fetch['LIQROO_ID'];
        $fetch_liqroo_url = $fetch['liqroo_url'];
        $fetch_liqroo_price = $fetch['liqroo_price'];
        $fetchurl1 = $fetch['URL1'];
        $fetch_url1_price = $fetch['URL1_price'];
        $fetchurl2 = $fetch['URL2'];
        $fetch_url2_price = $fetch['URL2_price'];
        $fetchurl3 = $fetch['URL3'];
        $fetch_url3_price = $fetch['URL3_price'];
        $fetchurl4 = $fetch['URL4'];
        $fetch_url4_price = $fetch['URL4_price'];
        $fetchurl5 = $fetch['URL5'];
        $fetch_url5_price = $fetch['URL5_price'];

    }

    if (isset($_GET['edit'])) {
        $id = $_GET['id'];
        // echo "<script>alert($id);</script>";
        $liqroo_url = $_GET['liqroo_url'];
        $liqroo_price = $_GET['liqroo_price'];
        $url1 = $_GET['Whisky_Exchnage_Url'];
        $url1_price = $_GET['Whisky_Exchnage_Price'];
        $url2 = $_GET['Master_Of_Malt_Url'];
        $url2_price = $_GET['Master_Of_Malt_Price'];
        $url3 = $_GET['DrinkSupermarket_Url'];
        $url3_price = $_GET['DrinkSupermarket_Price'];
        $url4 = $_GET['Other_Site_Url'];
        $url4_price = $_GET['Other_Site_Price'];
        $url5 = $_GET['url5'];
        $url5_price = $_GET['URL5_Price'];

        $sql = $crud->update($id, 'cms', "liqroo_url = '$liqroo_url',liqroo_price = '$liqroo_price', URL1 = '$url1', URL1_price = '$url1_price', URL2 = '$url2', URL2_price = '$url2_price', URL3 = '$url3', URL3_price = '$url3_price', URL4 = '$url4', URL4_price = '$url4_price', URL5 = '$url5', URL5_price = '$url5_price', Last_Updated_By = '$usrid'", $conn);
        // print_r($sql);
        // die();

        if ($sql) {
            echo "<script>alert('Data Updated');</script>";
            // header("Location: index.php?page_no=".$_GET['page_no']."");
            echo "<script>window.location.href = 'index.php?page_no=" . $page_ID . "&query=" . $search . "'</script>";
            // echo "<script>window.location.href='index.php';</script>";
        } else {
           echo "<script>alert('Data Not Updated');</script>";
            //echo "<script>window.location.href = 'up.php?page_no=" . $page_ID . "&id=" . $id1 . "'</script>";
        }
    }
    ?>

<?php
// including update.php file responsible for data fetching
    include_once 'update.php';
} else {
    header("Location: login.php");
}
?>
	</form>
<?php
include_once 'footer.php';
?>
