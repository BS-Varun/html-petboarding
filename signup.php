<html>

<head>
    <meta charset="utf-8">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="styles1.css"
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles1.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        

</head>
<body>
    <?php>

<html>

<head>
	<meta charset="UTF-8">
	<title>Signup and give your pet the best</title>
        <style>
            form {
      background-color:#4abdac;
      padding: 15px;
      color: white;
      border:transparent;
     }      
     input {
      padding:10px;
      margin:5px;
     }
     input:focus {
      background: gold;
      color: brown;
      font-size:24px;
     }
     input[type=color]:focus {
       border:2px solid black;
     }	 	 
     input:hover {
       width:250px;
     }
     input:active {
       background: white;
     }
     body{
         font-family: 'Montserrat', sans-serif;
         text-align: center;
         background-image: url("dogandcat2.jpg");
        </style>
</head>

<body>
	<?php
	// put you<?php
	 $Name = $id = $Contact = $Password = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $name = $_POST['name'];
            $pet_type= $_POST['pet_type'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $Password = $_POST['password'];
            
            
            $con = mysqli_connect("localhost","root","","petno");                     
       
			$query = "INSERT INTO `login`( name,pet_type,email, mobile, password) VALUES ('$name', '$pet_type', '$email', '$mobile','$Password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Registration Succesful");
			            }
                                    else
                                    {
                                        echo ("Fail"); 
                                    }
                         } 
        
        
        
	?>
    <form  action="" method="post" >
            <div class="center">
            <h1>Sign up </h1>
            <label>name</label></br><input type="text"   name="name"><br/> 
            <label>pet_type</label></br><input type="text"   name="pet_type"><br/> 
            <label>email</label></br><input type="text"   name="email"><br/> 
            <label>mobile</label></br><input type="number"   name="mobile"><br/>
            <label>password</label></br><input type="password"   name="password"><br/></br>
            <button type="submit"  name="submit" value="Register" >Update</button>
            </div>
        </form>

	
</body>
<html>

