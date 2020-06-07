<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="uploaded.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;1,400&family=Old+Standard+TT:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="../images/creativecooks.png">
    <title>CC</title>
</head>
<body style="height: 100vh; justify-content: center;">
    <div class="box">
        <h2>Your uploads</h2>
        <div >
            <?php
            $file = $_GET['file'];
            $dish= $_GET['dish'];
            $message= $_GET['message'];?>
            <img src="<?= $file ?>" width="300" height="250">
        </div>
        <div>
            <p class="title"><i>Dish Name:</i>"<?= $dish ?>"</p>
        </div>
        <div>
            <p><i>Instructions:</i>"<?= $message ?>"</p>
        </div>
        <form action="..\browse.html">
            <button type="submit">OK</button>
        </div>

    </div>
</body>
</html>