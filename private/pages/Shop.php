<?php 
    include 'private/classes/DB.php'; 
    include 'private/classes/Product.php'; 
?>

<main class="shop-page">
    <h1>Shop</h1> 
    <section>
        <h2>Css things</h2>
        <article>
            <?php
                $sql = "SELECT * FROM products";
                $result = $conn->query($sql);
                
                while($row = $result->fetch_assoc()) {
                    $product = new Product($row["id"], $row["name"], $row["price"], $row["image"]);
                    include 'private/components/ShopItem.php';
                }

                $conn->close();
            ?>
        </article>
    </section>
</main>

<script>

</script>

<style>
    .shop-page>section>article{
        display: flex;
        flex-wrap: wrap;
    }
</style>