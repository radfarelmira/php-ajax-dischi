<?php
require __DIR__.'/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="container">
            <img src="img/logo.png" alt="Logo">
        </div>
    </header>
    <!-- EnND HEADER -->

    <!-- MAIN -->
    <main>
        <div class="sm-container">
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5 g-4">
                <?php foreach($database as $disc){ ?>
                    <div class="col">
                        <div class="card h-100">
                            <img src=<?php echo $disc['poster']?> class="card-img-top" alt=<?php echo $disc['title']?>>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $disc['title']?></h5>
                                <p class="card-text"><?php echo $disc['author']?><br><?php echo $disc['year']?></p>
                            </div>
                        </div>
                    </div>       
                <?php }?>  
            </div>
        </div>    
    </main>
    <!-- END MAIN -->

</body>
</html>