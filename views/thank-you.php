<!DOCTYPE html>
<html lang="en">
<head>
<?php include('includes/head.php');?>

    <title>Thank you</title>
    <style>
        .section1{
            min-height:80vh;
        }
        .homeButton{
            border-radius: 10px;
            padding: 14px 20px;
            background-color: #fa130d;
            color: #fff;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    
    <?php include('includes/header.php');?>
    <section class="section1 d-flex h-100vh">
        <div class="container align-self-center">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <h1 class="first-color font-80 font-weight-bold"> -->
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['thanksMsg'])){ echo $_REQUEST['thanksMsg'];} ?></h1>
                    <h1 class="first-color font-80 font-weight-bold"><?php if(isset($_REQUEST['successMsg'])){ echo $_REQUEST['successMsg'];} ?></h1>
                            
                    <!-- </h1> -->
                    <button class="btn homeButton" onclick="window.open('/','_self');">Go To Home</button>
                </div>
            </div>
        </div>
    </section>

    <?php include('includes/footer.php');?>

</body>
</html>