<?php
include('includes/session.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/recom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Herbal-Recommendation</title>
    <style>
  .gpt-icon{
    width: 100px;
    height: 100px;
  
  }
  .bn632-hover {
  width: 220px;
 
  font-size: 18px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  -moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  -moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn25 {
  background-image: linear-gradient(
    to right,
    #25aae1,
    #40e495,
    #30dd8a,
    #2bb673
  );
  box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
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
  



    <div class="reco-container">
        <div class="mid-container">
            <div class="left-content">
                    <div class="title">
                        Conditions
                    </div>
                    <form action="" method="get">
                    <div class="checkbox-cont">
                <div class="check-7">
                    <label for="stress">
                        <input type="checkbox" id="stress" name="symptom[]" value="stress">
                        Stress
                    </label><br>
                    <label for="anxiety">
                        <input type="checkbox" id="anxiety" name="symptom[]" value="anxiety">
                        Anxiety
                    </label><br>
                    <label for="headaches">
                        <input type="checkbox" id="headaches" name="symptom[]" value="headaches">
                        Headaches
                    </label><br>
                    <label for="nausea">
                        <input type="checkbox" id="nausea" name="symptom[]" value="nausea">
                        Nausea
                    </label><br>
                    <label for="inflammation">
                        <input type="checkbox" id="inflammation" name="symptom[]" value="inflammation">
                        Inflammation
                    </label><br>
                </div>
                <div class="check-6">
                    <label for="digestiveIssues">
                        <input type="checkbox" id="digestiveIssues" name="symptom[]" value="digestive issues">
                        Digestive Issues
                    </label><br>
                    <label for="memory">
                        <input type="checkbox" id="memory" name="symptom[]" value="memory">
                        Memory Loss
                    </label><br>
                    <label for="immune">
                        <input type="checkbox" id="immune" name="symptom[]" value="immune system">
                        Immune System
                    </label><br>
                    <label for="exhaustion">
                        <input type="checkbox" id="exhaustion" name="symptom[]" value="exhaustion">
                        Exhaustion
                    </label><br>
                    <label for="insomnia">
                        <input type="checkbox" id="insomnia" name="symptom[]" value="insomnia">
                        Insomnia
                    </label><br>
                </div>
                <div class="check-6">
                    <label for="fever">
                        <input type="checkbox" id="fever" name="symptom[]" value="fever">
                        Fever
                    </label><br>
                    <label for="depression">
                        <input type="checkbox" id="depression" name="symptom[]" value="depression">
                        Depression
                    </label><br>
                    <label for="cholesterol">
                        <input type="checkbox" id="cholesterol" name="symptom[]" value="cholesterol">
                        Cholesterol
                    </label><br>
                    <label for="itching">
                        <input type="checkbox" id="itching" name="symptom[]" value="itching">
                        Itching
                    </label><br>
                    <label for="highBloodPressure">
                        <input type="checkbox" id="highBloodPressure" name="symptom[]" value="high blood pressure">
                        High Blood Pressure
                    </label><br>
                </div>
            
                <div class="check-7">
                    <label for="allergies">
                        <input type="checkbox" id="allergies" name="symptom[]" value="allergies">
                        Allergies
                    </label><br>
                    <label for="infections">
                        <input type="checkbox" id="infections" name="symptom[]" value="infections">
                        Infections
                    </label><br>
                    <label for="cancer">
                        <input type="checkbox" id="cancer" name="symptom[]" value="cancer">
                        Cancer
                    </label><br>
                    <label for="migraine">
                        <input type="checkbox" id="migraine" name="symptom[]" value="migraine">
                        Migraine
                    </label><br>
                    <label for="badMood">
                        <input type="checkbox" id="badMood" name="symptom[]" value="bad mood">
                        Bad Mood
                    </label><br>
                </div>
                <div class="check-6">
                    <label for="diarrhea">
                        <input type="checkbox" id="diarrhea" name="symptom[]" value="diarrhea">
                        Diarrhea
                    </label><br>
                    <label for="dyspepsia">
                        <input type="checkbox" id="dyspepsia" name="symptom[]" value="dyspepsia">
                        Dyspepsia
                    </label><br>
                    <label for="diabetes">
                        <input type="checkbox" id="diabetes" name="symptom[]" value="diabetes">
                        Diabetes
                    </label><br>
                    <label for="atopic dermatitis">
                        <input type="checkbox" id="atopic dermatitis" name="symptom[]" value="atopic dermatitis">
                        Atopic Dermatitis
                    </label><br>
                    <label for="asthma">
                        <input type="checkbox" id="asthma" name="symptom[]" value="asthma">
                       Asthma
                    </label><br>
                </div>
            </div>
       
    
                    <div class="btn">
                     <button class="bn632-hover bn25">Click to recommend</button>
                    </div>
                    </form>
                
                    
            </div>
            <div class="right-content">
                        <div class="right-wrapper">
                            <div class="title">
                                Recommended Herbal
                            </div>
                            <div class="herb-container">
                   
                            <?php 
            include("includes/dbcon.php");
            
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                // Ensure $conn (database connection) is properly established
                if (isset($conn)) {
                    $selectedSymptoms = isset($_GET['symptom']) ? $_GET['symptom'] : array();
            
                    if (!empty($selectedSymptoms)) {
                        // Sanitize the selected symptoms to prevent SQL injection
                        $sanitizedSymptoms = array_map(function ($symptom) use ($conn) {
                            return mysqli_real_escape_string($conn, $symptom);
                        }, $selectedSymptoms);
            
                        // Fetch herbs that have related symptoms matching any of the selected ones
                        $conditions = [];
                        foreach ($sanitizedSymptoms as $symptom) {
                            $conditions[] = "related_symptoms LIKE '%$symptom%'";
                        }
                        $conditionsString = implode(" OR ", $conditions);
            
                        // Construct the SQL query based on selected symptoms
                        $sql = "SELECT herb_id, herb_name, benefits, side_effects, interactions, dosage_recommendations, contraindications, img_path, related_symptoms
                                FROM herb_information
                                WHERE ($conditionsString)";
            
                        $result = $conn->query($sql);
            
                         if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Display herb information here
                                  echo '<div class="herb-container">
                                                      <div class="name-herb">' . $row['herb_name'] . '</div>
                                                      <div class="img-con">
                                                      <img src="img/herbs/' . $row['img_path'] . '" alt="' . $row['herb_name'] . '" class="herb-img">
                                                      </div>
                                                      <div class="description">
                                                          <div class="benefits">
                                                              <div style="font-weight: 500; text-decoration: underline;" >
                                                                  Benefits:
                                                              </div>
                                                              <div class="benefits-des">' . $row['benefits'] . '</div>
                              
                                                              <div class="side-effect-con">
                                                                  <div style="font-weight: 500; text-decoration: underline;">
                                                                      Side-Effects:
                                                                  </div>
                                                                  <div class="benefits-des">' . $row['side_effects'] . '</div>
                                                              </div>
                                                              
                                                              <div class="side-effect-con">
                                                                  <div style="font-weight: 500; text-decoration: underline;">
                                                                      Interactions:
                                                                  </div>
                                                                  <div class="benefits-des">' . $row['interactions'] . '</div>
                                                              </div>
                                                          </div>
                                                          
                                                          <div class="benefits">
                                                              <div class="side-effect-con">
                                                                  <div style="font-weight: 500; text-decoration: underline;">
                                                                      Dosage Recommendation:
                                                                  </div>
                                                                  <div class="benefits-des">' . $row['dosage_recommendations'] . '</div>
                                                              </div>
                                                            
                                                              <div class="side-effect-con">
                                                                  <div style="font-weight: 500; text-decoration: underline;">
                                                                      Contradiction:
                                                                  </div>
                                                                  <div class="benefits-des">' . $row['contraindications'] . '</div>
                                                              </div>
                                                          </div>
                                                      </div>
                                                            </div>';
                            }
                        } else {
                            echo "<div style='text-align: center;'>No recommendation for selected symptoms</div>";
                        }
                    } else {
                        echo "<div style='text-align: center;'>No symptoms selected</div>";
                    }
                } else {
                    echo "<div style='text-align: center;'>Database connection error</div>";
                }
            }
            ?>
            
            
            
            
                            </div>
                       
                        </div>
                   
                    </div>
          
     
    
        </div>
    
            </div>
    
         
    
  

      
    </div>




</body>
</html>