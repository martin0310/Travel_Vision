<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Vision - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/slick.css" type="text/css" />
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>

<?php
    include('header.php');
?>

            <div class="container-fluid tm-content-container">
            <div class="circle intro-circle-1"></div>
            <div class="circle intro-circle-2"></div>
            <div class="circle intro-circle-3"></div>
            <div class="circle intro-circle-4"></div>    
        
                        <div class="d-flex position-relative tm-border-top tm-border-bottom intro-container">
                            <div class="intro-left tm-bg-dark" style="margin:0 auto">
                                <div style="text-align:center">    
                                    <h2>LOG IN</h2>
                                </div>
                                <p>
                                <!-- Login Box -->
                                <form name="form" action="http://140.123.173.10/mem_index.php" method="POST" accept-charset="UTF-8">
                                    <p>
                                    Account : <input type="text" name="memid" size="15" style="width:150px; height:15px; background:rgba(0,0,0,0); border:none; border-bottom: 1px solid white;" /> <br/><br/>

                                        Password : <input type="password" name="pw" size="15" style="width:144px; height:15px; background:rgba(0,0,0,0); border:none; border-bottom: 1px solid white;" /> <br/>
                                </p>
                                <p class="mb-4">
                                    <input type="reset" value="Reset"  class="loginbox loginbox-hover">
                                    <input type="submit" style="text-align:right;" value="Submit" class="loginbox loginbox-hover;"></br>
                                </p>

                                </form>
                                </p>
                                

                                <p class="mb-4">
                                    付費方式待討論。</p>
                                <p class="mb-0">
                                    方案選擇<a rel="nofollow" href="https://templatemo.com/contact" target="_blank">選擇</a> 點此。 </p>
                                
                            </div>

                            <div class="circle intro-circle-1"></div>
                            <div class="circle intro-circle-2"></div>
                            <div class="circle intro-circle-3"></div>
                            <div class="circle intro-circle-4"></div>
                        </div></div>

                        <div class="text-center">            
        </div>

<?php
    include('footer.php');
?>  

</body>

</html>
