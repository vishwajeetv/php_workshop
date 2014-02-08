
<?php include 'header.php'; ?>

<div id="container">
    <div class="jumbotron">
        <h1 class="text-center">Register</h1>

    </div>
    <div id="formWrapper"></div>
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form action = "registerService.php" method="post" role="form">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control input-lg" name="username" placeholder="Username">
                </div>

                <div class="form-group">
                    <label>Email ID</label>
                    <input type="email" class="form-control input-lg" name="email" placeholder="Email ID">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control input-lg" name="confPassword" placeholder="Confirm Password">
                </div>

                <button type="submit" class="btn btn-danger pull-right">Submit</button>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
</div>

<?php include 'footer.php'?>