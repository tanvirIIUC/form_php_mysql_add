<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>FORM</title>


</head>
<body>
    <div class="div">
       <h1>LOG IN PAGE</h1>
     <div class="div-input">
        <form id="basic-form" action="form.php" method="POST">
       
            <p>
           <label for="username">Username</label>
           <input type="text" name="username" required/>
         </p>
        
         <p>
             <label for="stdid">Id</label>
             <input type="text" name="stdid" required>
         </p>
         <label for="phone">phone</label>
         <input type="text" name="phone" required>
         
         <p>
             <label for="email">Email</label>
             <input type="email" name="email" required/>
         </p>
         <p>
             <label for="gender">Gender</label>
             <input class="rad" type="radio" name="gender" value="male"> male
             <input class="rad" type="radio" name="gender" value="female"> female
         </p>
         <p >
             <label for="distric">District</label>
             <select class="com" name="distric"> 
              <option value="dhaka">Dhaka </option>
              <option value="chittagong">Chittagong</option>
              <option value="Barisal">Barisal </option>
              <option value="Khulna">Khulna </option>
              <option value="Mymensingh">Mymensingh </option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Rangpur">Rangpur </option>
              <option value="Sylhet">Sylhet </option>
           </select>

         </p>
         <p>
             <label for="password">password<span>(at least 5 characters)</span></label>
             <input type="password" name="pass" minlength="5" required/>
         </p>
         <p>
             
             <input class="submit" type="submit" value="SUBMIT" />
         </p>
        </form>

     </div>
    </div>


    
    <?php
        $studentname=$_POST['username'];
        $studentid=$_POST['stdid'];
        $studentphn=$_POST['phone'];
        $studentemail=$_POST['email'];
        $studentgnde=$_POST['gender'];
        $studentdstc=$_POST['distric'];
        $studentoass=$_POST['pass'];

    $connection=mysqli_connect("localhost","root","","form_info_php");
    mysqli_query($connection,"INSERT INTO form_info(Username,Student_Id,Phone,Email,Gender,District,Password) 
    VALUES('$studentname','$studentid','$studentphn','$studentemail','$studentgnde','$studentdstc','$studentoass')");

    ?>


</body>
</html>