<?php
// Connect to database 
$db = new mysqli('localhost', 'username', 'password', 'database');

// Query for regions 
$regions_query = "SELECT * FROM regions";
$regions_result = $db->query($regions_query);

// Query for townships
$townships_query = "SELECT * FROM townships WHERE region_id = {region_id}";

?>

<select name="region">
    <option value="">Select Region</option>
    <?php while ($row = $regions_result->fetch_assoc()) : ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
    <?php endwhile; ?>
</select>

<select name="township">
    <option value="">Select township</option>
</select>

<script>
    // Javascript to populate township dropdown on change of region
    var regionDropdown = document.getElementsByName("region")[0];
    var townshipDropdown = document.getElementsByName("township")[0];

    regionDropdown.addEventListener("change", function() {

        // AJAX call to get townships of selected region
        var regionId = this.value;

        // Populate township dropdown
    });
</script>