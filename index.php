<?php include('include/header.php'); ?>

<?php 
// Sample food items (you can replace this with data from a database)
$foodItems = [
    ['name' => 'Pizza', 'description' => 'Delicious cheese pizza with pepperoni', 'image' => 'pizza.jpg', 'price' => '$12.99'],
    ['name' => 'Burger', 'description' => 'Juicy beef burger with lettuce and tomato', 'image' => 'burger.jpg', 'price' => '$8.99'],
    ['name' => 'Sushi', 'description' => 'Fresh sushi rolls with tuna and avocado', 'image' => 'sushi.jpg', 'price' => '$15.99'],
    ['name' => 'Pasta', 'description' => 'Pasta with marinara sauce and meatballs', 'image' => 'pasta.jpg', 'price' => '$10.99'],
    ['name' => 'Salad', 'description' => 'Healthy salad with mixed greens and vinaigrette', 'image' => 'salad.jpg', 'price' => '$7.99'],
    ['name' => 'Tacos', 'description' => 'Soft tacos filled with chicken and salsa', 'image' => 'tacos.jpg', 'price' => '$6.99'],
    ['name' => 'Ice Cream', 'description' => 'Creamy ice cream with chocolate chips', 'image' => 'ice-cream.jpg', 'price' => '$4.99'],
    ['name' => 'Steak', 'description' => 'Grilled steak with mashed potatoes and gravy', 'image' => 'steak.jpg', 'price' => '$19.99'],
    ['name' => 'Soup', 'description' => 'Hot tomato soup served with garlic bread', 'image' => 'soup.jpg', 'price' => '$5.99'],
    ['name' => 'Fries', 'description' => 'Crispy French fries with ketchup', 'image' => 'fries.jpg', 'price' => '$3.99'],
    // Add more items if needed
];

// Define number of items per page
$itemsPerPage = 3;

// Get the current page number (default to 1)
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calculate the starting index for the slice (pagination offset)
$startIndex = ($page - 1) * $itemsPerPage;

// Get the sliced array for the current page
$foodItemsToShow = array_slice($foodItems, $startIndex, $itemsPerPage);

// Total number of pages (based on the total items and items per page)
$totalPages = ceil(count($foodItems) / $itemsPerPage);
?>

<html>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .card-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.2s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card img {
            width: 100%;
            height: auto;
        }
        .card-content {
            padding: 15px;
        }
        .card-content h3 {
            margin: 0;
            font-size: 1.5rem;
            color: #333;
        }
        .card-content p {
            color: #777;
        }
        .card-content .price {
            margin-top: 10px;
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }
        .pagination {
            margin-top: 20px;
            text-align: center;
        }
        .pagination a {
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }
        .pagination a:hover {
            background-color: #0056b3;
        }
    </style>

<body>

    <h1>Food Menu</h1>
    <div class="card-container">
        <?php foreach ($foodItemsToShow as $item): ?>
            <div class="card">
                <img src="images/<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>">
                <div class="card-content">
                    <h3><?php echo $item['name']; ?></h3>
                    <p><?php echo $item['description']; ?></p>
                    <div class="price"><?php echo $item['price']; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <!-- Previous page link -->
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>">Previous</a>
        <?php endif; ?>

        <!-- Page number links -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a href="?page=<?php echo $i; ?>" <?php echo ($i == $page) ? 'style="background-color: #0056b3;"' : ''; ?>>
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <!-- Next page link -->
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>">Next</a>
        <?php endif; ?>
    </div>

</body>
</html>
