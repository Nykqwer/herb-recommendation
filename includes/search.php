<?php
include("dbcon.php");

if (isset($_GET['q'])) {
    $search = mysqli_real_escape_string($conn, $_GET['q']);
    $sql = "SELECT herb_name, benefits, img_path, `description` FROM herb_information WHERE herb_name LIKE '%$search%'";
} else {
    $sql = "SELECT herb_name, benefits, img_path, `description` FROM herb_information";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="grid-content">
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

$conn->close();
?>
