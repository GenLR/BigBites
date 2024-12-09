<?php 
    include("include/header.php");
    require_once "include/database.php";
?>

<link rel="stylesheet" href="css/landing.css">
<section class="home" id="home">
    <div class="tagline">
        <h1>Find Your Favorite <span class="highlight">Meals</span><br> and Get Them Delivered Fast!</h1>
        <p>Delicious meals just a click away.</p>
        <div class="box">
            <div class="search-box">
                <input type="text" placeholder="Enter your location...">
                <label for="" class="icon">
                    <i class='bx bx-search'></i>
                </label>
            </div>
        </div>            
    </div>
    <div class="picture">
        <img src="images/pic1.png" alt="Food Delivery">
    </div>
</section>

<?php
// Fetch locations from database

try {
    $database = new Database();
    $db = $database->getConnection();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

try {
    $stmt = $db->prepare("SELECT * FROM tbl_location");
    $stmt->execute();

    $locations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>

<section class="location-container" id="locations">
    <h2>Explore Cities/Municipalities in Cebu</h2>
    <div class="locations">
        <?php foreach ($locations as $location): ?>
            <a href="location-details.php?id=<?php echo $location['id']; ?>" class="btn">
                <div class="location" id=<?php echo $location['id']; ?>>
                        <h3><?php echo htmlspecialchars($location["area"]); ?></h3>
                        <img src="<?php echo htmlspecialchars($location["img"]); ?>" alt="<?php echo htmlspecialchars($location["area"]); ?>">
                        <p><?php echo htmlspecialchars($location["description"]); ?></p>
                </div>        
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php include("include/footer.php"); ?>
