<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>SignUps Page</title>
</head>
<body>

<div class="container">
    <div>
        <div>
            <?php
            session_start();
            if(isset($_SESSION['msg'])){
                echo "<div class='text-center alert alert-danger'>".$_SESSION['msg']."</div>";
                session_unset(i);
            }
            ?>
        </div>
    </div>
        <div>
            <form action="submit.php" method="post">
                <input type="text" placeholder="ProductName" name="ProductName">
                <input type="text" placeholder="Description" name="Description">
                <input type="text" placeholder="Category" name="Category">
                <input type="number" placeholder="Price" name="Price">
                <input type="number" placeholder="StockQuantity" name="StockQuantity">
                <input type="text" placeholder="Manufacturer" name="Manufacturer">
                <input type="text" placeholder="Supplier" name="Supplier">
                <input type="text" placeholder="Barcode" name="Barcode">
                <input type="date" placeholder="ReleaseDate" name="ReleaseDate">
                <button type="submit" value="submit" name="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>