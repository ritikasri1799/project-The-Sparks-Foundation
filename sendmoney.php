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
            		      <a class="nav-link" href="#">Customers</a>
            	    </li>
                  </ul>
            </nav>

    
</div>            


	
           <h1 class="two">TRANSFER MONEY</h1>
        		 <div class="three">       
                <button class="btn btn-info" data-toggle="modal" data-target="#sendMoney">Send Money</button>
                <a class="btn btn-info" href="" data-toggle="modal" data-target="#transactionHistory">See All Transactions</a></div> 


            <div class="modal fade" id="sendMoney" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Send Money</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="sendmoney.php">
                                <div class="input-group mb-3">
                                    <input type="text" id="enterName" class="form-control" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2">@email.com</span>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input type="text" id="enterAmount" class="form-control" placeholder=" Enter Amount"
                                        aria-label="Amount 
                                        ">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" onclick="sendMoney()" class="btn btn-success" data-dismiss="modal">Send
                                Money</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
<div>
    <?php

    if(isset($_POST['create']))
    {
        $enterName=$_POST['enterName'];
        $enterAmount=$_POST['enterAmount'];

        $sql="INSERT INTO users(username,amount) VALUES (?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$enterName,$enterAmount]);
        if($result)
        {
            echo 'Successfully saved';

        }
        else
        {
            echo 'There is some error';
        }
        

    }

      ?>
</div>               

</body>
</html>