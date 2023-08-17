<?php

include 'conn.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    
    $employee_id = $_POST['employee_id'];

    
    $sql = "SELECT * FROM employee_details WHERE employee_id = '$employee_id'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $email = $row['email']; 
        $employee_id = $row['employee_id'];  
        $department_id = isset($row['department_id']) ? $row['department_id'] : ''; 
        $fulname = isset($row['fulname']) ? $row['fulname'] : '';
        $age = isset($row['age']) ? $row['age'] : '';  
        $phone = isset($row['phone']) ? $row['phone'] : '';  
        $gender = isset($row['gender']) ? $row['gender'] : '';  
        $job = isset($row['job']) ? $row['job'] : ''; 
        $hire = isset($row['hire']) ? $row['hire'] : '';   
        $account = isset($row['account']) ? $row['account'] : '';
        $kra = isset($row['kra']) ? $row['kra'] : ''; 

        $bankid =  isset($row['bankid']) ? $row['bankid'] : '';
        $bankname =  isset($row['bankname']) ? $row['bankname'] : '';
        $bankbranch=  isset($row['bankbranch']) ? $row['bankbranch'] : '';
        $branchid =  isset($row['branchid']) ? $row['branchid'] : '';
        $bankloanmonthlyinstalment=  isset($row['bankloanmonthlyinstalment']) ? $row['bankloanmonthlyinstalment'] : '';
        $banksavings=  isset($row['banksavings']) ? $row['banksavings'] : '';

        $namekin=isset($row['namekin']) ? $row['namekin'] : '';
        $agekin= isset($row['agekin']) ? $row['agekin'] : '';
        $relationkin =isset($row['relationkin']) ? $row['relationkin'] : '';
        $phone_no =isset($row['phone_no ']) ? $row['phone_no '] : '';

        $namedep=isset($row['namedep']) ? $row['namedep'] : '';
        $agedep= isset($row['agedep']) ? $row['agedep'] : '';
        $relationdep =isset($row['relationdep']) ? $row['relationdep'] : '';
        $phone_nodep = isset($row['phone_nodep ']) ? $row['phone_nodep '] : '';  
    }
    else {
        echo "Error: Employee not found";
        exit();
    }
}

elseif ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  
    $employee_id = $_POST['employee_id'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $department_id = isset($_POST['department_id']) ? $_POST['department_id'] : ''; 
    $fulname = isset($_POST['fulname']) ? $_POST['fulname'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';  
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';  
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';  
    $job = isset($_POST['job']) ? $_POST['job'] : ''; 
    $hire = isset($_POST['hire']) ? $_POST['hire'] : '';   
    $account = isset($_POST['account']) ? $_POST['account'] : '';
    $kra = isset($_POST['kra']) ? $_POST['kra'] : '';

    
    $bankid =  isset($_POST['bankid']) ? $_POST['bankid'] : '';
    $bankname =  isset($_POST['bankname']) ? $_POST['bankname'] : '';
    $bankbranch=  isset($_POST['bankbranch']) ? $_POST['bankbranch'] : '';
    $branchid =  isset($_POST['branchid']) ? $_POST['branchid'] : '';
    $bankloanmonthlyinstalment=  isset($_POST['bankloanmonthlyinstalment']) ? $_POST['bankloanmonthlyinstalment'] : '';
    $banksavings=  isset($_POST['banksavings']) ? $_POST['banksavings'] : '';

    $namekin=isset($_POST['namekin']) ? $_POST['namekin'] : '';
    $agekin= isset($_POST['agekin']) ? $_POST['agekin'] : '';
    $relationkin =isset($_POST['relationkin']) ?$_POST['relationkin'] : '';
    $phone_no =isset($_POST['phone_no ']) ? $_POST['phone_no '] : '';

    $namedep=isset($_POST['namedep']) ? $_POST['namedep'] : '';
    $agedep= isset($_POST['agedep']) ? $_POST['agedep'] : '';
    $relationdep =isset($_POST['relationdep']) ? $_POST['relationdep'] : '';
    $phone_nodep = isset($_POST['phone_nodep ']) ? $_POST['phone_nodep '] : '';  
}

    // Update employee details in database
    $sql1 = "UPDATE employee_details SET email = '$email', department_id = '$department_id', fulname = '$fulname', age = '$age', phone = '$phone', gender = '$gender', job = '$job', hire = '$hire', account = '$account', kra = '$kra' WHERE employee_id = '$employee_id'";
    //$result = mysqli_query($con, $sql);
    if ($con->query($sql1) === TRUE) {
         echo '<script> alert("Employee details updated successfully!!!");</script>';
        include("employeereportemp.php"); 
    } else {
        echo '<script>alert("Error updating customer record:'.$con->error.' ");</script>' ;
    }

    $sql2 = "UPDATE bank SET bankid='$bankid', bankname='$bankname', bankbranch='$bankbranch', branchid='$branchid', bankloanmonthlyinstalment='$bankloanmonthlyinstalment', banksavings='$banksavings' WHERE employee_id = '$employee_id'";
    if ($con->query($sql2) === TRUE) {
        echo '<script> alert("Bank details updated successfully!!!");</script>';
       include("employeereportemp.php"); 
   } else {
       echo '<script>alert("Error updating customer record:'.$con->error.' ");</script>' ;
   }


$sql3 = "UPDATE next_of_kin SET namekin='$namekin',agekin='$agekin',relationkin='$relationkin',phone_no='$phone_no' WHERE employee_id = '$employee_id'";
if ($con->query($sql3) === TRUE) {
    echo '<script> alert("Next of kin details updated successfully!!!");</script>';
   include("employeereportemp.php"); 
} else {
   echo '<script>alert("Error updating  record!!! '.$con->error.'");</script>' ;
}

$sql4 = "UPDATE dependants SET namedep='$namedep',agedep='$agedep',relationdep='$relationdep',phone_nodep='$phone_nodep' WHERE employee_id = '$employee_id'";
if ($con->query($sql4) === TRUE) {
    echo '<script> alert("Dependants details updated successfully!!!");</script>';
   include("employeereportemp.php"); 
} else {
   echo '<script>alert("Error updating  record:'.$con->error.' ");</script>' ;
}

    /*if ($result) {
        echo '<script> alert("Employee details updated successfully!!!");</script>';
        include("employeereportemp.php");
        //mysqli_close($con);
        exit();
    }
    else {
        echo "Error updating employee details: " . mysqli_error($con);
        include("employeereportemp.php");
        mysqli_close($con);
        exit();}*/
    
    ?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee Details</title>
</head>
<body style="background-image:url(contactus.jpg);
   background-size: cover;">

<h2>Update Employee Details</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">NEXT OF KIN</legend>
    <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>" />
    Email: <input type="email" name="email" value="<?php echo $email; ?>" required /><br>
    Department ID: <input type="text" name="department_id" value="<?php echo $department_id; ?>" required /><br><br>
    Full Name: <input type="text" name="fulname" value="<?php echo $fulname; ?>" required /><br><br>
    Age: <input type="text" name="age" value="<?php echo $age; ?>" required /><br><br>
    Phone: <input type="text" name="phone" value="<?php echo $phone; ?>" required /><br><br>
    Gender: <input type="text" name="gender" value="<?php echo $gender; ?>" required /><br><br>
    Job: <input type="text" name="job" value="<?php echo $job; ?>" required /><br><br>
    Hire: <input type="text" name="hire" value="<?php echo $hire; ?>" required /><br><br>
    Account: <input type="text" name="account" value="<?php echo $account; ?>" required /><br><br>
    KRA PIN: <input type="text" name="kra" value="<?php echo $kra; ?>" required /><br><br>
    </fieldset>
    <fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">BANK DETAILS</legend>
    <label  for="bankid" style="color:white;" >Bank Id</label>  
<input type="text" id="bankid" name="bankid" value="<?php echo $bankid; ?>" required ><br>
<label  for="bankname"  style="color:white;" >Bank name</label>
<input type="text" id="bankname" name="bankname" value="<?php echo $bankname; ?>" required  ><br>
<label  for="bankbranch"  style="color:white;" >Bank branch</label> 
<input type="text" id="bankbranch" name="bankbranch" value="<?php echo $bankbranch; ?>" required > <br>
<label  for="branchid" style="color:white;"  >Branch id</label>
<input type="text" id="branchid" name="branchid"  value="<?php echo $branchid; ?>" required   ><br>
<label  for="bankloanmonthlyinstalment"  style="color:white;" >Bank loan Monthly Installments</label>
<input type="text" id="bankloanmonthlyinstalment" name="bankloanmonthlyinstalment"  value="<?php echo $bankloanmonthlyinstalment; ?>" required >  <br>
<label  for="banksavings" style="color:white;"  >Bank savings</label> 
<input type="text" id="banksavings" name="banksavings"  value="<?php echo $banksavings; ?>" required  ><br>

</fieldset>


<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
<legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">NEXT OF KIN</legend>
<label for="namekin" style="color:white;">Name</label>
<input type="text" id="namekin" name="namekin"  value="<?php echo $namekin; ?>" required ><br>
<label for="agekin" style="color:white;">Age</label>
<input type="text" id="agekin" name="agekin"  value="<?php echo $agekin; ?>" required ><br>
<label for="relationkin" style="color:white;">Relation</label>
<input type="text" id="relationkin" name="relationkin"  value="<?php echo $relationkin; ?>" required ><br>
<label for="phone_no" style="color:white;">Phone Number</label>
<input type="text" id="phone_no" name="phone_no"  value="<?php echo $phone_no; ?>" required ><br>
</fieldset>

<fieldset style="border-color: rgb(0, 149, 255);border-radius:3px;border-width: 5px;">
    <legend style="background-color: rgb(139, 220, 247);
                    border-radius: 35px;font-size: 20px;padding:10px;">Dependants</legend>
    <label for="namedep" style="color:white;">Name</label>
<input type="text" id="namedep" name="namedep"  value="<?php echo $namedep; ?>" required ><br>
<label for="agedep" style="color:white;">Age</label>
<input type="text" id="agedep" name="agedep"  value="<?php echo $agedep; ?>" required ><br>
<label for="relationdep" style="color:white;">Relation</label>
<input type="text" id="relationdep" name="relationdep"  value="<?php echo $relationdep; ?>" required ><br>
<label for="phone_nodep" style="color:white;">Phone Number</label>
<input type="text" id="phone_nodep" name="phone_nodep"  value="<?php echo $phone_nodep; ?>" required ><br>
    <input type="submit" name="submit" value="Update" />
</form>

</body>
</html>

<?php
// Close database connection
mysqli_close($con);
?>

 
