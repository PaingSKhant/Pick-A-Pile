<?php

require_once "./oop/connection.php";

$answers = $piles->show();

$id = $piles->getData();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pick-a-pile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">
    <div class="container mt-3 ">
        <div class="row justify-content-center">
            <!-- header section  -->
            <div class="col">
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="mt-1"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>
                    <!-- <h4 class="text-center text-warning">သင်နှစ်သက်ရာမေးခွန်းကိုရွေးချယ်ပါ။</h4> -->
                    <a href="index.php">
                        <button class="btn btn-warning">နောက်သို့</button>
                    </a>
                </div>
                <hr class="text-warning">
            </div>
        </div>

        <!-- card section  -->
        <div class="row mt-4 justify-content-between  ">
            <?php foreach ($answers as $answer) : ?>
                <?php if ($answer['AnswerId'] == $id) : ?>
                    <div class="bg-dark col-3">
                        <img width="300px" height="300px" src="<?php echo $answer['AnswerImageUrl'] ?>" class="img-thumbnail shadow-sm rounded" alt="Card Image">

                    </div>
                    <div class="col-9 mt-4">
                        <h5 class="text-warning text-center mt-4"><?php echo $answer['AnswerName'] ?></h5>
                        <div class="d-flex">
                            <i class="fa-solid fa-envelope text-warning m-2"></i>
                            <p class="text-warning  "><?php echo $answer['AnswerDesp'] ?></p>
                        </div>
                    </div>
                <?php endif; ?>

            <?php endforeach; ?>
        </div>
    </div>



</body>

</html>