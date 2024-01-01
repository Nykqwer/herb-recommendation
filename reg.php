
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="bootstrap-5.3.2-dist (1)/bootstrap-5.3.2-dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">
        <style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    background-color: rgb(58, 55, 55);
    
}
        </style>
    <title>Register</title>
</head>
<body>

    <form action="includes/regist_form.php" method="post" enctype="multipart/form-data">
   <div class="container">
        <div class="bmi-flex">  
            <div class="title">
                Registration
            </div>
                <div class="input-container">
                    <div>
                        <div class="label-name">
                          Name
                        </div>
                        <input type="text" name="name" placeholder="Enter Full Name" class="input-el">
                    </div>
                    <div>
                        <div class="label-name">
                           Age
                        </div>
                        <input type="text" name="age" placeholder="Enter Age" class="input-el">
                    </div>
      
                    <div>
                        <div class="label-name">
                            Username
                        </div>
                        <input type="text" name="username" placeholder="Enter Username" class="input-el">
                    </div>
                    <div>
                        <div class="label-name">
                            Password
                        </div>
                        <input type="password" name="password" placeholder="Enter Passowrd" class="input-el">
                    </div>
                    <div>
                        <div class="label-name">
                            Confirm Password
                        </div>
                        <input type="password" name="conpassword" placeholder="Re-enter Password" class="input-el">
                    </div>
                    <div class="img-c">
                        <label class="up-img name">Insert Profile </label>
                        <input class="up-img1 name" type="file" name="ufile">
                        <input type="hidden" name="MAX_FILE SIZE" value="300000" accept=".jpg, .jpeg, .png">  
                    </div>
            
                </div>
              
                    <div class="btn-layer">
                    <button type="submit" name="next" class="sub-btn js-sub-btn">submit</button>
                </div>
              
        </div>      
    </div>
  

</body>

</html>

