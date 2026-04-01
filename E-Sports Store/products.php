<?php 
    include './includes/db.php'; 
    include 'includes/header.php';
?>

<?php
    $stmt = $pdo->query("SELECT * FROM products");

?>

<div class="row g-4 mt-5"> <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
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
        threshold: 0.1 // Trigger when 10% of the card is visible
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                // Add a small delay based on index for a "staggered" look
                setTimeout(() => {
                    entry.target.classList.add('reveal');
                }, index * 100); 
            }
        });
    }, observerOptions);

    // Tell the observer to watch all product cards
    document.querySelectorAll('.product-card').forEach((card) => {
        observer.observe(card);
    });
</script>

<?php

    include("./includes/footer.php");

?>