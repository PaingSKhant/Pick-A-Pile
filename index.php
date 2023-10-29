<?php

require_once "./model/question.php";

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
    <div class="container mt-4 ">
        <div class="row justify-content-center ">
            <!-- header section  -->
            <div class="col">
                <div class="d-flex justify-content-between">
                    <a href="index.php" class="mt-1"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>
                    <h4 class="text-center text-warning">သင်နှစ်သက်ရာမေးခွန်းကိုရွေးချယ်ပါ။</h4>
                    <a href="index.php" class="mt-1"><i class="fa-brands fa-galactic-senate text-warning mt-2"></i></a>

                </div>
                <hr class="text-warning">

            </div>
            <!-- question section  -->
            <?php foreach ($questions as $question) : ?>
                <div class="">
                    <ul class="list-unstyled">
                        <li class="text-warning">
                            <i class="fa-solid fa-clipboard-question text-warning"></i>
                            <a href="show.php?id=<?php echo $question['QuestionId'] ?>" class="text-decoration-none text-white">
                                <?php echo $question['QuestionName'] ?>
                            </a>

                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>


    </div>

</body>

</html>