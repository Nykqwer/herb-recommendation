<?php
include('includes/session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/rate.css">
    <link rel="stylesheet" href="css/herbs.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,500&display=swap" rel="stylesheet">
    <title>Herbal-Recommendation</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .icon-sh{
    width: 30px;
    height: 28px;
    position: absolute;
    margin-left: -50px;
    margin-top: 14px;
    cursor: pointer;
    top: 14px;
   
}
    </style>
</head>
<body>

    <header class="head-container">
        <div>
               
        </div>
    </header>
<div class="wrapper">
<!--SIDEBAR-->
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
     <a href="reco.php"></a> <div class="nav-button"><i class="fas fa-palette"></i><span><a href="reco.php">Recommendation</a></span></div>
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
      <div id="nav-footer-content">
        <Lorem>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</Lorem>
      </div>
    </div>
  </div>
  



  <div class="herb-container">
  <div class="search-container">
        <div>
        <input class="search-herb" type="text" id="searchInput" placeholder="Search by herb name">
            <button type="submit">
                <img src="img/icons/search.png" alt="" class="icon-sh">
            </button>
        </div>
</div>
    <div class="mid-container" id="herbContainer">

        <?php
    include("includes/dbcon.php");
    $sql = "SELECT herb_name,benefits,img_path,`description` FROM herb_information";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
          <div class="grid-content herb-item">
            <div class="herb-content">
                <div>
                    <img src="img/herbs/<?php echo strtolower($row['img_path']); ?>" alt="<?php echo $row['herb_name']; ?>" class="herb-img">
                </div>
               
                <div class="rate-center">
                        <div class="rate">
                            <?php
                            // Use unique IDs for each set of radio buttons
                            for ($i = 5; $i >= 1; $i--) {
                                $id = 'star' . $i . '_' . $row['herb_name'];
                                ?>
                                <input type="radio" id="<?php echo $id; ?>" name="<?php echo $row['herb_name']; ?>_rate" value="<?php echo $i; ?>" />
                                <label for="<?php echo $id; ?>" title="text"><?php echo $i; ?> stars</label>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
        
            </div>
            <div class="symptoms">
                <div>
                    <div class="herb-desc">
                        <span style="font-weight: bold;"><?php echo $row['herb_name']; ?>,</span> <?php echo $row['description']; ?>
                    </div>
                </div>
                <div>
                    <div style="font-weight: bold;">
                        Benefits:
                    </div>
                    <div>
                        <?php echo $row['benefits']; ?>
                    </div>
                </div>
            </div>
            </div>
            <?php
        }
    } else {
        echo "No herbs found in the database.";
    }

    ?>
  </div>
</div>

<script src="script/search1.js"></script>
</body> 
</html>