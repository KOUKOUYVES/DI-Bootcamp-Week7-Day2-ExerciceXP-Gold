<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style type="text/css">
		.error {
			color:red;
		}
	</style>
</head>
<body><br><br>
    <h1 style="text-align: center;">ExerciceXP-Gold 2 Get The Century</h1>
    <div class="container">

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer 1</label>
                <input type="number" name="number1" class="form-control">
                <span class="error"><?php if (isset($number1Error)) echo $number1Error ?></span>

            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer 2</label>
                <input type="number" name="number2" class="form-control">
                <span class="error"><?php if (isset($number2Error)) echo $number2Error ?></span>

            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php

            if($_SERVER["REQUEST_METHOD"]==="POST"){

                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                
                $som = $number1 + $number2;
            }   
        ?>

        <h3>Result: <?php echo $som; ?></h3>
     
    </div>
</body>
</html>