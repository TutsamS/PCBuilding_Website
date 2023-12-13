<?php
$con = mysqli_connect('localhost', 'root', '','db_orders');

// get the post records
$txtFName = $_POST['txtFName'];
$txtLName = $_POST['txtLName'];
$txtAddr = $_POST['txtAddr'];
$txtCity = $_POST['txtCity'];
$txtState = $_POST['txtState'];
$txtZip = $_POST['txtZip'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtPrice = $_POST['txtPrice'];
$txtPro = $_POST['txtPro'];
$txtOid = rand(10000,100000);


// database insert SQL code
$sql = "INSERT INTO `tbl_orders` (`firstname`, `lastname`, `address`, `city`,`state`,`zipcode`,`modelid`,`price`,`email`,`phone`,`orderid`,`status`) VALUES ('$txtFName', '$txtLName', '$txtAddr', '$txtCity', '$txtState', '$txtZip', '$txtPro', '$txtPrice', '$txtEmail', '$txtPhone', '$txtOid', 'INPROGRESS')";

// insert in database 
$rs = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html> 
<head>
    <title>Order Confirmed</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    
    <h1 align="center" valign="middle" style= "background-color:lightskyblue; border-radius: 10px; font-family:'Times New Roman', Times, serif;">Top 10 PC Builds Just For You</h1>

    <div align="middle" class="topnav">
        <a href="homepage.html">Home</a>
        <a href="budgets.html">Budgets</a>
        <a href="orders.php">Orders</a>
            <div align="left" valign="middle" class="row">
                <div class="column"><img src="https://www.logo.wine/a/logo/Ryzen/Ryzen-AMD-White-Dark-Background-Logo.wine.svg" alt= "amd" style="position:absolute; width:5%; height:5%;">
                </div>
                <div class="column"><img src="https://iconape.com/wp-content/files/tm/352706/svg/352706.svg" alt= "nvidia" style="position:absolute; width:5%; height:5%;">
                </div>
                <div class="column"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Intel_Core_2020_logo.svg/1200px-Intel_Core_2020_logo.svg.png" alt= "intel" style="position:absolute; width:3%; height:5%;">
                </div>
                <div class="column"><img src="https://logodownload.org/wp-content/uploads/2014/09/msi-logo-1.png" alt= "msi" style="position:absolute; width:8%; height:5%;">
                </div>
                <div class="column"><img src="https://www.pngkey.com/png/full/360-3602841_corsair-png-file-corsair-logo-horizontal-png-shopify.png" alt= "corsair" style="position:absolute; width:10%; height:4.8%;">
                </div>
            </div>
      </div>
    <div align="center" valign="middle">
		<p><span style="font-size: 60px;">
    <?php
        if($rs)
        {
            $a = "Order Record Inserted, Order ID is ";
            $b = $a . $txtOid;
            echo $b;
        }
    ?></span></p>
	<div align="center" valign="middle">
		<img src="https://www.freeiconspng.com/thumbs/checkmark-png/checkmark-png-5.png" alt="check" height="200px">
	</div>
	<p>
	<span style="font-size: 36px; cursor: pointer; color: lightskyblue;" onclick=mclick() onmouseover="mover(this)" onmouseout="mout(this)"><b>Go back to Budgets page.</b></span>
	</p>
	</div>
	<script>    
    
	function mover(thecell) {
		thecell.style.color='white'
	}
	
	function mout(thecell) {
		thecell.style.color='lightskyblue'
	}

	function mclick() {
		location.href = "/Period-1/budgets.html"
	}
	</script>
</body>
</html>
