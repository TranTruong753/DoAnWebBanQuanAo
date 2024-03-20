<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- embed font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Sora:wght@100..800&display=swap"
        rel="stylesheet" />
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link css -->
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
    <?php 
        require('./MVC/models/connectDatabase.php');
        require('./MVC/view/Home/header.php');
        require('./MVC/view/Home/navbar.php');
        require('./MVC/view/Home/hero.php');     
      
            if(isset($_GET['chon'])){
                if($_GET['id']=='1'){
                    require("./MVC/view/SanPham/loadSanPham.php");
                }             
            }
            else{
                require('./MVC/view/Home/viewProduct.php');
                require('./MVC/view/Home/viewProduct.php');
                require('./MVC/view/Home/viewIntro.php');     
                require('./MVC/view/Home/viewProduct02.php');    
             
            }      

        

    require('./MVC/view/Home/footer.php');
    ?>
</body>

</html>