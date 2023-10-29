<?php

require_once "./model/card.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pick-a-pile </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">
    <div class="container mt-3">
        <!-- header section  -->
        <div class="row justify-content-center ">
            <div class="col">
                <?php foreach ($questions as $question) : ?>
                    <?php if ($question['QuestionId'] == $id) : ?>

                        <div class="d-flex  justify-content-between">
                            <a href="index.php"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>
                            <h5 class=" text-warning"><?php echo $question['QuestionName'] ?></h5>
                            <a href="index.php">
                                <button class="btn btn-warning">နောက်သို့</button>
                            </a>
                        </div>
                        <hr class="text-warning">
                        <h5 class=" text-warning"><?php echo $question['QuestionDesp'] ?></h5>


                    <?php endif; ?>
                <?php endforeach; ?>


            </div>

        </div>

        <!-- answer section  -->
        <div class="row mt-4 justify-content-between  ">
            <?php foreach ($answers as $answer) : ?>
                <?php if ($answer['QuestionId'] == $id) : ?>
                    <div class="col">
                        <h4 class="text-warning text-center m-2"><?php echo $answer['AnswerName'] ?></h4>
                        <a href="description.php?id=<?php echo $answer['AnswerId'] ?>">
                            <img width="300px" height="300px" src="<?php echo $answer['AnswerImageUrl'] ?>" class="img-thumbnail shadow-sm rounded" alt="Card Image">
                        </a>

                    </div>
                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
</body>

</html>