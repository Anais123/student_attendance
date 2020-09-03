<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Sign</title>
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
            <div style="width:80%">

                <form action="" method="POST">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Adresse email" require>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Mot de passe" require>
                    </div>
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Signez" name="Signer">
                </form>
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

            <div class="d-flex flex-column align-items-center justify-content-center" style="margin-bottom:10px; width:80%">
                <div class="text-center">
                    <img src="img/logo-google.svg" width="20" />
                    <span style="margin-left: 10px">Se connecter avec google</span>
                </div>
                <div>
                    <a href="#">Mot de passe oublie ?</a>
                <div>
            </div>
            
        </div>
        
    </div>

    </div>

    

    <div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#FFFF; margin-top: 10px; text-align:center; border-style: solid; border-width: 1px; border-color: lightgray; height:60px;">
        <div>
            <p> Vous n'êtes pas enregistré ? <a href="index.php">Enregistrez vous </a> </p>
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

if (isset($_POST['Signer'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $c = mysqli_query($conn,"SELECT * FROM student WHERE email = '$email' AND password = '$password'");

    $a = mysqli_query($conn,"SELECT * FROM attendance WHERE email = '$email' AND datesign = date('Y-m-d') ");

    if (mysqli_num_rows($c)>0){

        if (mysqli_num_rows($a) == 0 ) {        
            $row = mysqli_fetch_assoc($a);
            $iduser = $row['id'];

        $insert = mysqli_query($conn, "INSERT INTO attendance (iduser, email) VALUES ('$iduser', '$email')") ;
            echo '<script language="Javascript">';
            echo 'document.location.replace("./thanks.php")'; // -->
            echo ' </script>';
        // header('location : index.php'); 
            

        } else {echo '<script language="Javascript">';
                echo 'document.location.replace("./sorry.php")'; // -->
                echo ' </script>';}
    
        } 
    } else { echo "Veuillez vous enregistrer"; }
?>

</body>
</html>