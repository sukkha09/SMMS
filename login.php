<?php
session_start();


?>



<div class="py-5">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

       <?php include('message.php'); ?>
         
            <div class="card">
                <div class="card-header">
                    <ha>Login</h4>
                </div>
                <div class="card-body">
                   <div class="form-group mb-3">
                    
                        <label>Email Id</label>
                        <input type="email" placeholder="Enter Email Address" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Login Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
include ('includes/footer.php');
?>