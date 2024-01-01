<?php
include('includes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index1.css">
    <link rel="stylesheet" href="css/education.css">
    
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
        <div id="nav-footer-content">
          <Lorem>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</Lorem>
        </div>
      </div>
    </div>

    <div class="edu-container">
      <div class="main-content">
          <div class="title-con">
            <div>NHRS</div>
          </div>
          <div class="img-con">
            <img src="img/icons/tea.gif" alt="" class="tea-icon">
          </div>
      </div>
        <hr/>
        <div class="body-content">
          <div class="accordion">
            <!-- Section 1 - Introduction -->
            <div class="accordion-item">
                <h2 class="accordion-title">Introduction: <span style="font-weight: 500;">Understanding Herbal Remedies</span> </h2>
                <div class="accordion-content">
                  <div class="paragh">
                    Herbal remedies, drawing from natural sources like plants and minerals, are ancient healing practices embedded in diverse cultural traditions globally. These remedies harness the bioactive compounds present in herbs, offering a holistic approach to address various health concerns. Available in forms like teas, tinctures, or topical applications, they're appreciated for their perceived gentle yet effective nature.
                  </div>
                  <div class="paragh">
                    However, their potency varies widely, and caution is essential. While herbal remedies can provide therapeutic benefits, their interaction with prescribed medications poses potential risks. Understanding each herb's properties, appropriate dosages, and potential side effects is paramount for safe usage. Seeking guidance from healthcare professionals with expertise in herbal medicine ensures personalized advice, considering individual health conditions, allergies, and other medications.
                  </div>
                  <div class="paragh">
                    When used responsibly and with adequate knowledge, herbal remedies complement conventional medicine, offering a diverse array of potential health benefits. They serve as natural alternatives or supplements, enriching healthcare practices with their traditional wisdom and holistic healing properties.
                  </div>
                </div>
            </div>
          
          <div class="video-cont">
            <div>
              <h2><span style="font-weight: 500;">5 steps to Take Herbal Medicine Safely</span></h2>
            </div>
            <div class="vids">
             <a href="https://www.youtube.com/watch?v=y8O3t8S-F-g" target="_blank"> <video id="herbalVideo" width="800" height="460" autoplay  controls style="border: 2px solid white;">
                <source src="video/5 Steps to Take Herbal Medicine Safely.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
          </a>
            </div>
            <div>
              <h2>Interactions and Special Considerations</h2>
            </div>
            <div class="paragh">
              In the realm of natural healing, herbal remedies stand as ancient yet potent allies in pursuit of well-being. However, their efficacy and safety depend greatly on informed and cautious usage. Before venturing into the world of herbal remedies, it's crucial to arm oneself with knowledge and mindfulness.
            </div>
            <div>
              <h2><span style="font-weight: 500;">Prioritize Education and Understanding</span> </h2>
            </div>
            <div class="paragh">
              Begin by delving into the specifics of each herb, understanding its properties, potential interactions with medications, and varied effects on individual health. This foundational knowledge acts as a guiding light in your herbal journey.
            </div>
            <div>
           <h2><span style="font-weight: 500;">Seek Professional Guidance</span> </h2>
            </div>
            <div class="paragh">
              Herbalists, naturopaths, or healthcare professionals specializing in herbal medicine provide invaluable expertise. Consultation ensures personalized advice, considering your unique health history, existing conditions, and prescribed medications.
            </div>
            <div>
              <h2><span style="font-weight: 500;">Embrace Caution and Diligence</span> </h2>
            </div>
            <div class="paragh">
              Dosage, administration, and potential risks associated with allergic reactions or long-term usage demand meticulous attention. Cultivate a cautious approach, sourcing high-quality products from reputable sources to ensure purity and safety.
            </div>
            <div>
           <h2><span style="font-weight: 500;">Awareness of Interactions and Special Considerations</span> </h2>
            </div>
            <div class="paragh">
              Stay vigilant about potential interactions between herbal remedies and prescribed medications. Additionally, recognize the special considerations involving pregnancy, children, or specific health conditions, seeking professional advice as needed.
            </div>
            <div>
             <h2><span style="font-weight: 500;">A Balanced Approach</span> </h2>
            </div>
            <div class="paragh">
              Approach herbal remedies as complementary allies in your holistic health journey. Blend traditional wisdom with modern understanding, navigating their use with informed mindfulness and professional guidance for a safer and more effective experience.
            </div>
          </div>
        </div>
    </div>
  <script src="script/autoplay.js"></script>
</body>
</html>