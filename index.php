<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN LOGIN PAGE</title>
     <link rel="stylesheet" type='text/css'  href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    
    </head>
<body style='background-color: powderblue; '>
    <div style="width: 400px; height: 300px; margin : 150px auto; background-color: rgba(211,211,211,0.5); padding:" class='col-md-6'>
       <h3> ADMIN | SIGN IN <h3> 
        </br>
        <form action="validate.php" method="post">

            <div class="form-group">
                USERNAME<input type="text" name='user' class='form-control' required>
            </div>
            <div class="form-group">
                PASSWORD <input type="password" name='password' class='form-control' required>
            </div>
            <button type='submit' class='btn btn-primary' > login </button>

        </form>
    </div>
</body>
</html>