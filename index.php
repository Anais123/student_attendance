<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
<div class="d-flex flex-column align-items-center justify-content-center" style="width:100%; min-height: 980px ; background: #C0C0C0">

<div id="msg" class="alert alert-dismissible fade hidde" role="alert">
    <strong id="msgText"></strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="d-flex flex-column" style="width:30%" >

    <div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#FFFF; padding-top: 30px">

        <div class="text-center" style="margin-top:20px; margin-bottom:20px;">
            <h1 style="text-align:center">Student<br>Attendance</h1>
        </div>
                
        <div style="margin-top:10px; margin-bottom:10px; width:80%">
            <a  href="#" class="btn btn-primary btn-lg btn-block">S'enregistrez avec facebook</a>
        </div>

        <div class="row" style="margin-top:30px; margin-bottom:20px; width:80%">

            <div class="col-5" style="padding-top:10px">
                <p style="height: 1.25px; background: lightgray"></p>
            </div>

            <div class="col-2 text-center" style="color: lightgray">
                <strong>OU</strong>
            </div>
                    
            <div class="col-5" style="padding-top:10px">
                <p style="height: 1.25px; background: lightgray"></p>
            </div>
        </div>

        <div style="width:80%; margin-bottom:20px;">

            <form action="" method="POST">

                <div class="form-group">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Adresse email" require>
                </div>
                <span id="emailInput" ></span>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nom complet" require>
                </div>
                <span id="nameInput" ></span>

                <div class="form-group">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" require>
                </div>
                <span id="passwordInput" ></span>

                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Enregistrez" name="Enregistrer">
            </form>

        </div>

    </div>
</div>

<div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#FFFF; margin-top: 10px; text-align:center; border-style: solid; border-width: 1px; border-color: lightgray; height:60px; width:30%">
    <div>
       <p> Vous êtes déjà enregistré  ? <a href="sign.php">Signez maintenant</a></p>
    </div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

<script>

</script>  

<?php
include('connect_db2.php');

if (isset($_POST['Enregistrer'])) {
   $email = $_POST['email'];
   $name = $_POST['name'];
   $password = md5($_POST['password']);

   $insert = "INSERT INTO student (password, email, name) VALUES ('$password', '$email', '$name')";
   
    if(mysqli_query($conn,$insert)) {
        echo '<script language="Javascript">';
        echo 'document.location.replace("./sign.php")'; // -->
        echo ' </script>';
        //header('location : sign.php');
    } else {echo "Error: " . $insert . "<br>" . mysqli_error($conn);}

} 

?>
    
</body>
</html>