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
<div class="back">
    <a href="landingpage.php" class="back-text">Back to Homepage</a>
</div>

<?php
// Fetch locations from database

try {
    $database = new Database();
    $db = $database->getConnection();
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}


try {
    $stmt = $db->prepare("SELECT tbl_store.id, tbl_store.name, tbl_location.area, tbl_store.img
                            FROM tbl_store INNER JOIN tbl_location ON tbl_store.location = tbl_location.id
                            WHERE tbl_store.id = ? ");
    $stmt->execute([$id]);

    $meals = $stmt->fetchAll(PDO::FETCH_ASSOC);  

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
;
<section class="location-container" id="locations">
    <h2>Enjoy The Flavours of Cebu</h2>
    <div class="locations">
        <?php foreach ($meals as $meal): ?>
            <a <?php 
                if(empty($_SESSION)){
                    echo "onclick=\"openModal('login')\"";
                } else {
                    echo "href=store.php?id=" . $meal['id'];
                }
            ?> class="btn">         
                <div class="location" id=<?php echo $meal['id']; ?>>
                        <h3><?php echo htmlspecialchars($meal["name"]); ?></h3>
                        <img src="<?php echo htmlspecialchars($meal["img"]); ?>" alt="<?php echo htmlspecialchars($meal["name"]); ?>">
                        <p class=""><?php echo htmlspecialchars($meal["area"]); ?></p>
                </div>        
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php include("include/footer.php"); ?>
