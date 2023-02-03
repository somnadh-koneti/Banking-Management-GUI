
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .wrapper{
            display : grid;
            grid-template-columns: repeat(4,1fr);
            grid-auto-rows: minmax(150px,auto);
            grid-gap: 3em;

        }
        .wrapper > form{
            background:powderblue;
        }
        .wrapper > form:nth-child(odd){
            background: #A0CFEC;
        }
        .down{
            display:grid;
            align-items:center;
            justify-content: center;
        }
        
    </style>
</head>
<body >
    <div style="color:white;background-color: #000033 ; height: 90px;">
    <h1 style='text-align: center;'> BANK PORTAL | ADMIN PANEL </h1>
    </div>
    <br>
    <br>
    <br>
    <div class='wrapper'>
        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>

                <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from branch;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
                ?>
            </h1>
            <h3 style='text-align:center' >BRANCH DETAILS</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='1'> Full Details -> </button>
    
            </div>
        </div>
        </form>

        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>
                <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from employee;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
                ?>
            </h1>
            <h3 style='text-align:center'>EMPLOYEES</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='2'> Full Details -> </button>
    
            </div>
        </div>
        </form>

        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>
                <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from customer;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
                ?>
            </h1>
            <h3 style='text-align:center'>CUSTOMERS</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='3'> Full Details -> </button>
    
            </div>
        </div>
        </form>

        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>
                <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from accounts;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
                ?>
            </h1>
            <h3 style='text-align:center'>ACCOUNTS</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='4'> Full Details -> </button>
    
            </div>
        </div>
        </form>

        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>
            <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from transactions;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
            ?>
            </h1>
            <h3 style='text-align:center'>TRANSACTION DETAILS</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='5'> Full Details -> </button>
    
            </div>
        </div>
        </form>

        <form action="login validate.php" method='post'>
        <div>
            <h1 style='text-align:center'>
            <?php
                $servername='localhost';
                $username='root';
                $passcode='';
                $db_name="sk3395_fall2022";
                $conn=new mysqli($servername,$username,$passcode,$db_name,3308);
                $s="select * from loan_account;";
                $result= mysqli_query($conn,$s);
                $num=mysqli_num_rows($result);
                echo $num;
            ?>
            </h1>
            <h3 style='text-align:center'>LOAN ACCOUNTS</h3>
            <div class='down' style='height:40px;border-style: solid; border-color: black '>
                <button type='submit' class='btn btn-primary' style='width:100px; height:30px;' name='val' value='6'> Full Details -> </button>
    
            </div>
        </div>
        </form>
    </div>

    <br>
    <br>

    <form action="login validate.php" method='post'>
        <div>
            <h3>CLICK HERE TO FIND THE NUMBER OF EMPLOYEES WORKING IN EACH BRANCH : 
            <button type='submit' class='btn btn-primary' style='width:100px; height:30px; background-color:black; color: white' name='val' value='10'> Full Details -> </button>
            </h3>
        </div>
    </form>
    <br>
    <form action="login validate.php" method='post'>
        <div>
            <h3>CLICK HERE TO FIND THE NUMBER OF ACCOUNTS OPENED IN EACH BRANCH  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
            <button type='submit' class='btn btn-primary' style='width:100px; height:30px; background-color:black; color: white' name='val' value='11'> Full Details -> </button>
            </h3>
        </div>
    </form>

</body>
</html>
