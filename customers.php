<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sendmoney</title>
	<link rel="stylesheet" type="text/css" href="ss.css">
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
 <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

<div class="jumbotron jumbotron-fluid">
  
    
        <h5 id ="one">BANK TRANSFER</h5>

            <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
            		  <ul class="navbar-nav">
            		    <li class="nav-item active">
            		      <a class="nav-link" href="index.html">Home</a>
            		    </li>
            		    <li class="nav-item">
            		      <a class="nav-link" href="sendmoney.html">Send Money</a>
            		    </li>
            		    <li class="nav-item">
            		      <a class="nav-link" href="customers.php">Customers</a>
            	    </li>
                  </ul>
            </nav>

    
</div>            
<div class="display_table">
                 <h1>Customer Details</h1>
                 <div class="center_div">
               <div class="table-responsive">
                    <table>
                    <thead>
                     <tr>
                      <th>Email</th>
                       <th>Amount</th>
                    
                      <th colspan="2">operation</th>
                    </tr>
                    </thead>
                   <tbody>
                  </div>

                  <?php
          include 'config.php';
          $selectquery = " select * from useraccouts";
          $query = mysqli_query($db,$selectquery);
          $numofrows = mysqli_num_rows($query);

           while($res = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php echo $res['Email']; ?></td>
               <td><?php echo $res['Amount']; ?></td>
              <td><a href="transfermoney.php?idtransfer=<?php  echo $res['ID']; ?>" ><i class=" fa fa-user-circle large" aria-hidden="true" style="color:#04FB73;"></i></a></td>
               </tr>
             <?php
          }
           ?>