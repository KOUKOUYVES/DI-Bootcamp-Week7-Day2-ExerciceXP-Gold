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
    <h1 style="text-align: center;">ExerciceXP-Gold 1 Validate User Input.</h1>
    <div class="container">
    <?php
            $name = $email = $password = $emailError = $passwordError = $nameError='';

            if ($_SERVER["REQUEST_METHOD"] === "POST") {

                 if(isset($_POST["name"],$_POST["email"],$_POST["password"])){

                    $name = trim(htmlspecialchars($_POST["name"]));
                    $email = trim(htmlspecialchars($_POST["email"]));
                    $password = trim(htmlspecialchars($_POST["password"]));
                    // request method is post
                    // now handle the form data
                
                    // declare name and email variables 
                
                    if (empty($name)) {
                        $nameError = 'Name should be filled';
    
                    } elseif(empty(filter_var($email, FILTER_VALIDATE_EMAIL))){
    
                        $emailError = 'Please add your email';
    
                    }elseif(empty(strlen($password)>=8)) {
    
                        $passwordError = "Please add your password";
    
                    }else {
                        $message_succes = "Form submitted successfully!";
                    }
                
               }

               
            }
    ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Nom</label>
                <input type="text" name="name" class="form-control">
                <span class="error"><?php if (isset($nameError)) echo $nameError ?></span>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre Email</label>
                <input type="text" name="email" class="form-control">
                <span class="error"><?php echo $fil ?><?php if (isset($emailError)) echo $emailError ?></span>
                
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer Votre mot de passe</label>
                <input type="password" name="password" class="form-control">
                <span class="error"><?php if (isset($passwordError)) echo $passwordError ?></span>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php if (isset($message_succes)): ?>
             <p style='color:green;'><?php echo $message_succes; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>