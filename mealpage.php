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
    $stmt = $db->prepare("SELECT tbl_meal.id, tbl_meal.name AS meal_name, tbl_meal.description, tbl_meal.price, tbl_store.name AS store_name, tbl_meal.img 
                            FROM tbl_meal INNER JOIN tbl_store ON tbl_meal.store = tbl_store.id");
    $stmt->execute();

    $meals = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($meals);

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
?>
;
<section class="location-container" id="locations">
    <h2>Enjoy The Flavours of Cebu</h2>
    <div class="locations">
        <?php foreach ($meals as $meal): ?>
            <a href="store.php?id=<?php echo $meal['id']; ?>" class="btn">
                <div class="location" id=<?php echo $meal['id']; ?>>
                        <h3><?php echo htmlspecialchars($meal["meal_name"]); ?></h3>
                        <img src="<?php echo htmlspecialchars($meal["img"]); ?>" alt="<?php echo htmlspecialchars($meal["meal_name"]); ?>">
                        <p><?php echo htmlspecialchars($meal["description"]); ?></p>
                        <p class="price">₱ <?php echo htmlspecialchars($meal["price"]); ?></p>
                        <p class=""><?php echo htmlspecialchars($meal["store_name"]); ?></p>
                </div>        
            </a>
        <?php endforeach; ?>
    </div>
</section>
<?php include("include/footer.php"); ?>
