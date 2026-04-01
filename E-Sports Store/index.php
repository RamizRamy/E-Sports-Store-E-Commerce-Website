<?php
include("./includes/db.php");
include("./includes/header.php");

?>

<header class="container-fluid vh-100 d-flex align-items-center justify-content-center text-center">
    <div class="row w-100">
        <div class="col-12 hero-content">
            <h1 class="display-1 fw-bold acsent text-uppercase">Gaming Paradise</h1>
            <p class="lead text-secondary mb-4">Best Products for the Best Prices</p>
            
            <div class="d-flex justify-content-center gap-3">
                <a href="./products.php" class="btn btn-outline-cyan btn-lg  w-25">Shop Now</a>
    </div>
</header>

<?php
    $stmt = $pdo->query("SELECT * FROM products LIMIT 6");

?>

<div class="row g-4"> <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
  <div class="col-md-4 col-sm-6">
    <div class="card h-100 product-card bg-dark text-white border-0">
      <div class="img-container">
        <a href="product.php?id=<?php echo $row['id']; ?>">
            <img src="imgs/products/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['name']; ?>">
        </div>
        <div class="card-body d-flex flex-column justify-content-between">
            <div>
                <h5 ><a href="product.php?id=<?php echo $row['id']; ?>">
                <?php echo $row['name']; ?>
                </a></h5>
            <p class="text-secondary small mb-3"><?php echo $row['description']; ?></p>
            </div>
            <div class="d-flex justify-content-between align-items-center mt-3">
            <span class="fs-5 fw-bold acsent">$<?php echo $row['price']; ?></span>
                <button class="btn btn-sm btn-outline-cyan px-3"
                onclick="addToCart(<?php echo htmlspecialchars(json_encode($row)); ?>)">
                Add to Cart
                </button>
            </div>
        </div>
      </a>
    </div>
  </div>
<?php endwhile; ?>
</div>

<script>
    const observerOptions = {
        threshold: 0.1 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
               
                setTimeout(() => {
                    entry.target.classList.add('reveal');
                }, index * 100); 
            }
        });
    }, observerOptions);

    document.querySelectorAll('.product-card').forEach((card) => {
        observer.observe(card);
    });
</script>



<?php

    include("./includes/footer.php");

?>