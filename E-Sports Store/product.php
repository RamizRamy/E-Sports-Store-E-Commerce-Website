<?php

include("./includes/header.php");
include("./includes/db.php");

$id = $_GET['id'] ?? null;

if (!$id) {
    die("Product not found");
}

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$product) {
    die("Product not found");
}
?>
    

<div class="container product-details-section py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6">
            <div class="product-image-wrapper p-4 text-center">
                <img src="imgs/products/<?php echo $product['image']; ?>" 
                     class="img-fluid rounded-4 main-product-img" 
                     alt="<?php echo $product['name']; ?>">
                <div class="img-glow"></div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="product-info-card p-5">
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="text-secondary text-decoration-none">Store</a></li>
                        <li class="breadcrumb-item active acsent" aria-current="page">Details</li>
                    </ol>
                </nav>

                <h1 class="display-4 fw-bold mb-3"><?php echo $product['name']; ?></h1>
                
                <div class="price-tag mb-4">
                    <span class="fs-2 fw-bold acsent">$<?php echo $product['price']; ?></span>
                    <span class="text-secondary ms-2"><small>Free Shipping Included</small></span>
                </div>

                <div class="description-box mb-5">
                    <h5 class="text-uppercase small fw-bold text-secondary mb-2">Description</h5>
                    <p class="lead text-light-50">
                        <?php echo $product['description']; ?>
                    </p>
                </div>

                <div class="action-buttons d-grid gap-3 d-sm-flex">
                    <button class="btn btn-cyan-fill btn-lg px-5 py-3"
                    onclick='addToCart(<?php echo json_encode($product); ?>)'>
                        Add to Cart
                    </button>

                </div>
            </div>
        </div>
    </div>
</div>

<?php

    include("./includes/footer.php");

?>