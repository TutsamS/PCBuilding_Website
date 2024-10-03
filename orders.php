<?php
// Turn off all error reporting
error_reporting(0);
$con = mysqli_connect('localhost', 'root', '','db_orders');
$oid=$_GET['od'];
if ($oid) {
    $q = "SELECT firstname,lastname,price,orderid,status FROM tbl_orders WHERE orderid=";
    $query = $q.$oid;
} else {
    $query = "SELECT firstname,lastname,price,orderid,status FROM tbl_orders";
}
$rs = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html> 
<head>
    <title>Orders</title>

        <link rel="stylesheet" href="style.css">
    
</head>

<body>
    
    <h1 align="center" valign="middle" style= "background-color:lightskyblue; border-radius: 10px; font-family:'Times New Roman', Times, serif;">Top 10 PC Builds Just For You</h1>

    <div align="middle" class="topnav">
        <a href="homepage.html">Home</a>
        <a href="budgets.html">Budgets</a>
        <a class="active" href="orders.php">Orders</a>
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
      <div align="center">
      <p>
        <label for="OrderId"><span style="font-size: 24px; background-color:lightskyblue; border-radius:5px;"><b>Search by Order ID: </b></span></label>
        <input type="text" name="searchdata" id="searchdata">
        <button onclick=mclick()>Search</button>
      </div>
      <table id="myTable" align="center" border="1px" style="width:600px; line-height:30px; background-color: lightskyblue;">
        <tr>
            <th colspan="5"><h3>Orders in the Database</h3></th>
        </tr>
        <t>
            <th> First Name</th>
            <th> Last Name</th>
            <th> Price</th>
            <th> Order ID</th>
            <th> Status</th>
        </t>
    <?php
        while($rows=mysqli_fetch_array($rs))
        {
    ?>
            <tr>
                <td><?php echo $rows['firstname']; ?></td>
                <td><?php echo $rows['lastname']; ?></td>
                <td><?php echo "$" . $rows['price']; ?></td>
                <td><?php echo $rows['orderid']; ?></td>
                <td><?php echo $rows['status']; ?></td>
            </tr>
    <?php
        }
    ?>    
    </table>
    <script>    
        function mclick() {
            
            location.href = "/orders.php?od="+document.getElementById("searchdata").value;
        }
    </script>
</body>
</html>
