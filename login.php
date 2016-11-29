<?php include("include/header.php"); ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center"><h1>Please Login</h1></div>
            <div class="col-md-1"></div>
        </div>

        <form action="authenticate.php" method="post" role="form" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-4 text-right">Email:</div>
                <div class="col-md-3">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Username/Email" size="8">
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="form-group">
                <div class="col-md-4 text-right">Password:</div>
                <div class="col-md-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" size="8">
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-4">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </form>
        <div class="row">
        <?php
            if (isset($_GET["msg"])) {
                echo "<p class='col-md-3 col-md-offset-4 text-danger'>" . $_GET["msg"] . "</p>";
            }
        ?>
        </div>

<?php include("include/footer.php"); ?>
