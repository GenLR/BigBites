<?php
    include("include/header.php");
    require_once "include/database.php";

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

} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

if (isset($_POST['submitBtn'])) {
    $meal_id = $_POST['meal_id'];
    
}

?>



<link rel="stylesheet" href="css/store.css">
<div class="main-panel">
    <div class="panel-container">
        <div class="store-panel left">
            <div class="top-left">
                top-left
            </div>
            <div class="bottom-left">
            <section class="location-container" id="locations">
                <h2>MENU</h2>
                <div class="locations">
                    <?php foreach ($meals as $meal): ?>
                        <div class="location" id=<?php echo $meal['id']; ?>>
                            <h3><?php echo htmlspecialchars($meal["meal_name"]); ?></h3>
                            <img src="<?php echo htmlspecialchars($meal["img"]); ?>" alt="<?php echo htmlspecialchars($meal["meal_name"]); ?>">
                            <p><?php echo htmlspecialchars($meal["description"]); ?></p>
                            <p class="price">₱ <?php echo htmlspecialchars($meal["price"]); ?></p>
                            <p class=""><?php echo htmlspecialchars($meal["store_name"]); ?></p>
                            <form method="POST" action="">
                                <input type="hidden" name="meal_id" value="<?php echo $meal['id']; ?>">
                                <button type="submit" name="submitBtn">ADD</button>
                            </form>
                        </div>        
                    <?php endforeach; ?>
                </div>
            </section>
            </div>
        </div>
        <div class="store-pane right">
              right
        </div>
    </div>
</div>
  



