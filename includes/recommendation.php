<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedSymptoms = isset($_POST['symptom']) ? (array)$_POST['symptom'] : array(); // Initialize as an empty array if not set

    if (!empty($selectedSymptoms)) {
        $selectedSymptomsString = implode("','", $selectedSymptoms);

        // Fetch herbs that have related symptoms matching the selected ones
        $sql = "SELECT * FROM herb_information WHERE FIND_IN_SET(related_symptoms, '$selectedSymptomsString')";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Displaying recommended herb information
            while ($row = $result->fetch_assoc()) {
                echo '<div class="herb-container">
                        <div class="name-herb">' . $row['herb_name'] . '</div>
                        <div class="img-con">
                            <img src="img/herbs/' . $row['img_path'] . '.png" alt="' . $row['herb_name'] . '" class="herb-img">
                        </div>
                        <div class="description">
                            <div class="benefits">
                                <div style="font-weight: 500;">
                                    Benefits:
                                </div>
                                <div class="benefits-des">' . $row['benefits'] . '</div>

                                <div class="side-effect-con">
                                    <div style="font-weight: 500;">
                                        Side-Effects:
                                    </div>
                                    <div class="benefits-des">' . $row['side_effects'] . '</div>
                                </div>
                                
                                <div class="side-effect-con">
                                    <div style="font-weight: 500;">
                                        Interactions:
                                    </div>
                                    <div class="benefits-des">' . $row['interactions'] . '</div>
                                </div>
                            </div>
                            
                            <div class="benefits">
                                <div class="side-effect-con">
                                    <div style="font-weight: 500;">
                                        Dosage Recommendation:
                                    </div>
                                    <div class="benefits-des">' . $row['dosage_recommendations'] . '</div>
                                </div>
                              
                                <div class="side-effect-con">
                                    <div style="font-weight: 500;">
                                        Contradiction:
                                    </div>
                                    <div class="benefits-des">' . $row['contradictions'] . '</div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    header("location ../reco.php");
            }
        } else {
            echo "No recommendation for selected symptoms";
            header("location ../reco.php");
        }
    } else {
        echo "No symptoms selected";
        header("location ../reco.php");
    }
}

$conn->close();
?>
