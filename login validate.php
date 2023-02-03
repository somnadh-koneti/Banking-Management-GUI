<html>
<head>
  <style>
    table{
     border-spacing:15px;
    }
    th{
        color: blue;
        text-align:start;

        }
    td,th,table{
        width: 150px;
        text-align:center:
        border: 5px solid black;
        padding: 5px;
    }
    
  </style>  
</head>
<body>
    
<?php
$servername='localhost';
$username='root';
$passcode='';
$db_name="sk3395_fall2022";
$conn=new mysqli($servername,$username,$passcode,$db_name,3308);
if ($conn-> connect_error)
{
    die("connection failed".$conn->connect_error);
}
else{ echo "";}

$val= $_POST['val'];

if ($val==1){

    $sql="select * from branch";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> BRANCH_ID</th> 
    <th>BRANCH_NAME</th>
    <th>CITY</th>
    <th>ADDRESS</th>
    <th>DISTRICT</th>
    <th>STATE</th>
    <th>MANAGER_NAME</th>
    <th>MGR_SSN</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["BRANCH_ID"];?></td> 
            <td><?php echo $row["BRANCH_NAME"];?></td>
            <td><?php echo $row["CITY"];?></td> 
            <td><?php echo $row["ADDRESS"];?></td>
            <td><?php echo $row["DISTRICT"];?></td> 
            <td><?php echo $row["STATE"];?></td>
            <td><?php echo $row["MANAGER_NAME"];?></td> 
            <td><?php echo $row["MGR_SSN"];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
    

}
if ($val==2){
    $sql="select * from employee";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> SSN</th> 
    <th>FIRST_NAME</th>
    <th>MIDDLE_NAME</th>
    <th>LAST_NAME</th>
    <th>START_DATE</th>
    <th>SEX</th>
    <th>SALARY</th>
    <th>ADDRESS</th>
    <th>SUPER_SSN</th>
    <th>EMP_BRANCH_ID</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["SSN"];?></td> 
            <td><?php echo $row["FIRST_NAME"];?></td>
            <td><?php echo $row["MIDDLE_NAME"];?></td> 
            <td><?php echo $row["LAST_NAME"];?></td>
            <td><?php echo $row["START_DATE"];?></td> 
            <td><?php echo $row["SEX"];?></td>
            <td><?php echo $row["SALARY"];?></td> 
            <td><?php echo $row["ADDRESS"];?></td>
            <td><?php echo $row["SUPER_SSN"];?></td> 
            <td><?php echo $row["EMP_BRANCH_ID"];?></td>
            
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==3){
    $sql="select * from CUSTOMER";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> CUST_SSN</th> 
    <th>CUST_NAME</th>
    <th>STREET_NUMBER</th>
    <th>CITY</th>
    <th>STATE</th>
    <th>APT_NUMBER</th>
    <th>ZIP_CODE</th>
    <th>CUST_PER_EMP_NAME</th>
    <th>EMP_SSN</th>
    <th>BRANCH_ID</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["CUST_SSN"];?></td> 
            <td><?php echo $row["CUST_NAME"];?></td>
            <td><?php echo $row["STREET_NUMBER"];?></td> 
            <td><?php echo $row["CITY"];?></td>
            <td><?php echo $row["STATE"];?></td> 
            <td><?php echo $row["APT_NUMBER"];?></td>
            <td><?php echo $row["ZIP_CODE"];?></td> 
            <td><?php echo $row["CUST_PERSONAL_BANKER_EMP_NAME"];?></td>
            <td><?php echo $row["EMP_SSN"];?></td> 
            <td><?php echo $row["BRANCH_ID"];?></td>
            
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==4){
    $sql="select * from ACCOUNTS";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> UNIQUE_ACCOUNT_NUMBER</th> 
    <th>BRANCH_ID</th>
    <th>RECENTLY_ACCESSED_DATE</th>
    <th>ACCOUNT_BALANCE</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["UNIQUE_ACCOUNT_NUMBER"];?></td> 
            <td><?php echo $row["BRANCH_ID"];?></td>
            <td><?php echo $row["RECENTLY_ACCESSED_DATE"];?></td> 
            <td><?php echo $row["ACCOUNT_BALANCE"];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==5){
    $sql="select * from TRANSACTIONS";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> TRANSACTION_CODE</th> 
    <th>AMOUNT</th>
    <th>DATE_AND_TIME_OF_TRANSACTION</th>
    <th>ACCOUNT_NUMBER</th>
    <th>TYPE_OF_TRANSACTION</th>
    <th>TRAN_BRANCH_ID</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["TRANSACTION_CODE"];?></td> 
            <td><?php echo $row["AMOUNT"];?></td>
            <td><?php echo $row["DATE_AND_TIME_OF_TRANSACTION"];?></td> 
            <td><?php echo $row["ACCOUNT_NUMBER"];?></td>
            <td><?php echo $row["TYPE_OF_TRANSACTION"];?></td> 
            <td><?php echo $row["TRAN_BRANCH_ID"];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==6){
    $sql="select * from LOAN_ACCOUNT";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> ACCOUNT_NUMBER</th> 
    <th>LOAN_NUMBER</th>
    <th>TYPE_OF_LOAN</th>
    <th>LOAN_AMOUNT</th>
    <th>LOAN_MONTHLY_REPAYMENT_AMOUNT</th>
    <th>FIXED_INTEREST_RATE</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["ACCOUNT_NUMBER"];?></td> 
            <td><?php echo $row["LOAN_NUMBER"];?></td>
            <td><?php echo $row["TYPE_OF_LOAN"];?></td> 
            <td><?php echo $row["LOAN_AMOUNT"];?></td>
            <td><?php echo $row["LOAN_MONTHLY_REPAYMENT_AMOUNT"];?></td> 
            <td><?php echo $row["FIXED_INTEREST_RATE"];?></td>
            
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==10){
    $sql="SELECT emp_branch_id,count(*) from employee GROUP by emp_branch_id;";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> EMP_BRANCH_ID</th> 
    <th>COUNT(*)</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["emp_branch_id"];?></td> 
            <td><?php echo $row["count(*)"];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
if ($val==11){
    $sql="SELECT branch_id,count(*) from accounts GROUP by branch_id;";
    $res=$conn-> query($sql);
    ?>
    <table>
    <tr>
    <th> BRANCH_ID</th> 
    <th>COUNT(*)</th>
    </tr>
    <?php
    if ($res-> num_rows>0){
        while($row=$res->fetch_assoc())
        {
        ?>
        <tr>
            <td><?php echo $row["branch_id"];?></td> 
            <td><?php echo $row["count(*)"];?></td>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php
    }
}
?>


</body>

</html>