<?php
	include_once 'header.php';
  include_once 'dbh.inc.php';

?>
<link rel="stylesheet" href="CSS/formstyle.css">
<title>VACCINATION & MEDICATION</title>

	<h1>PETS VACCINATION 
	<br>& MEDICATION</h1>

<style>
th, td {
  border-bottom: 1px solid #ddd;
}
</style>
<body>
<section style="text-align:center">

    <style>
    th, td {
     border-bottom: 1px solid #ddd;
    }
  </style>
  <form action="" method="post">

    <p>Enter your pets ID to Vaccination & Medication</p>
    <input type="text" name="pid" placeholder="Enter pets ID">
    <button type="submit" name="search">Search</button>
  </form></br>
  <h1>Vaccination</h1>
  <table style="width:100%">
  
    <tr>  
      <th>Pet ID</th>   
      <th>Vet Username</th>
      <th>Vacc Type</th>
      <th>Vacc Date</th>
      <th>Vacc Name</th>
      <th>Vacc Dueday</th>
      <th>Vacc Product</th>
    </tr>
          <?php
            if (isset($_POST["search"])) {
              $pid = $_POST['pid'];
              
              $query = "SELECT * FROM `Vaccination` where Pet_id = '$pid' ";
              $query_run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <tr style="text-align:center">
              <td><?php echo $row['Pet_id']; ?></td>
              <td><?php echo $row['Vet_username']; ?></td>
              <td><?php echo $row['Vacc_type'];?></td>
              <td><?php echo $row['Vacc_date']; ?></td>
              <td><?php echo $row['Vacc_name']; ?></td>
              <td><?php echo $row['Vacc_dueday']; ?></td>
              <td><?php echo $row['Vacc_productname']; ?></td>
            </tr>
            <?php
            }
            
            }
            
          ?>
            
  </table>

</section>

<section style="text-align:center">
<br><h1>Medication</h1>
<table style="width:100%">
  
    <tr>  
      <th>Pet ID</th>   
      <th>Medi Product</th>
      <th>Medi Purchasedate</th>

    </tr>
          <?php
            if (isset($_POST["search"])) {
              $pid = $_POST['pid'];
              
              $query = "SELECT * FROM `Medication` where Pet_id = '$pid' ";
              $query_run = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <tr style="text-align:center">
              <td><?php echo $row['Pet_id']; ?></td>
              <td><?php echo $row['Medi_product']; ?></td>
              <td><?php echo $row['Medi_purchasedate'];?></td>

            </tr>
            <?php
            }
            
            }
          ?>
            
  </table>
</section>
</body>

