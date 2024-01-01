<?php
include('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/feedback.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <header class="head-container">
        <div>
               
        </div>
    </header>

    <div id="nav-bar">
      <input id="nav-toggle" type="checkbox" checked="false"/>
      <div id="nav-header"><a id="nav-title" href="https://codepen.io" target="_blank"><img src="img/icons/herbal.gif" alt="" class="gpt-icon"><i class="fab fa-codepen">NHR</i></a>
        <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
        <hr/>
      </div>
      <br>
      <br>
      <div id="nav-content">
      <div class="nav-button"><i class="fas fa-thumbtack"></i><span><a href="education.php">Home</a></span></div>
     <div class="nav-button"><i class="fas fa-palette"></i><span><a href="reco.php">Recommendation</a></span></div>
       <div class="nav-button"><i class="fas fa-images"></i> <span><a href="herbal.php">Herbal</a></span></div>
        <div class="nav-button"><i class="fas fa-thumbtack"></i><span><a href="feedback.php">Feedback</a></span></div>
        <br>
      <br>
        <hr/>
        <div id="nav-content-highlight"></div>
      </div>
      <input id="nav-footer-toggle" type="checkbox" />
      <div id="nav-footer">
        <div id="nav-footer-heading">
     
          <div id="nav-footer-avatar"><?php echo '<img src="' . $img . '" alt="User Image" class="">';?></div>
          <div id="nav-footer-titlebox"><a id="nav-footer-title" href="https://codepen.io/uahnbu/pens/public" target="_blank"><?php echo $row_session['name']?></a><span id="nav-footer-subtitle">User</span></div>
          <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
        </div>
      </div>
    </div>

    <div class="feed-container">
      <div class="content">
        <div class="title-con">
          <div class="title">
            Write your Feedback about the Recommended Herbal
          </div>
  
        </div>
        <div class="input-con">
          <div class="input-content">
              <div class="input-label">
                  <label class="input-label">Name:</label>
              </div>
              <div>
                  <input type="text" class="input-el" id="nameInput" placeholder="">
              </div>
          </div>
          <div class="input-content">
              <div class="input-label">
                  <label class="input-label">Email:</label>
              </div>
              <div>
                  <input type="text" class="input-el" id="emailInput" placeholder="">
              </div>
          </div>
          <div class="input-content">
              <div class="input-label">
                  <label class="input-label">Message:</label>
              </div>
              <div>
                  <p contenteditable="true" class="letter-input" id="messageInput"></p>
              </div>
          </div>
          <div>
           
              <button class="bn632-hover bn23">Submit</button>
          </div>
      </div>
      
      <script>
       
          let clearButton = document.querySelector('button.bn23');
          
          // Add an event listener to the button
          clearButton.addEventListener('click', function() {
            
              document.getElementById('nameInput').value = '';
              document.getElementById('emailInput').value = '';
              document.getElementById('messageInput').innerText = '';
          });
      </script>
      
</body>
</html>