<?php
include("dbcon.php");

$sql = "SELECT herb_name, benefits, img_path, `description` FROM herb_information";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="grid-content">
            <div class="herb-content">
                <div>
                    <img src="img/herbs/<?php echo strtolower($row['img_path']); ?>" alt="<?php echo $row['herb_name']; ?>" class="herb-img">
                </div>
                <!-- Add your rating HTML here -->
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

$conn->close();
?>
