<?php
require 'connection.php';
session_start();
echo '<br>';
if (isset($_POST['submit'])){
    print_r ($_POST);
    //storing input values inside variable//
    $ProductName= $_POST['ProductName'];
    $Description= $_POST['Description'];
    $Category= $_POST['Category'];
    $Price= $_POST['Price'];
    $StockQuantity= $_POST['StockQuantity'];
    $Manufacturer= $_POST['Manufacturer'];
    $Supplier= $_POST['Supplier'];
    $Barcode= $_POST['Barcode'];
    $ReleaseDate= $_POST['ReleaseDate'];


    // // //Saving inside Database//
    $dbquery="INSERT INTO products(ProductName,Description,Category,Price,StockQuantity,Manufacturer,Supplier,Barcode,ReleaseDate) VALUES( '$ProductName', '$Description', '$Category', '$Price', '$StockQuantity', '$Manufacturer', '$Supplier', '$Barcode', '$ReleaseDate')";

    $savedquery = $dbconnection->query($dbquery);
    if($savedquery){
        echo $savedquery;
    }
    if($savedquery){
        echo "Successfully Saved";
    }else{
        echo "Not Successfully Saved";
    }
    }
   
?>