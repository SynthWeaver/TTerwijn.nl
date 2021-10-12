<?php include_once "private/classes/DB.php"; ?>

<main class="portfolio-page">
    <h1>Portfolio</h1> 

    <?php 
        //Get jobs from database 
        include "private/classes/Job.php";
        
        $sql = "SELECT * FROM jobs ORDER BY id DESC";
        $result = $conn->query($sql);
        
        while($row = $result->fetch_assoc()) {
            $job = new Job($row["id"], $row["name"], $row["image_link"], $row["small_image_link"], $row["description"], $row["github_link"], $row["demo_link"]);
            include 'private/components/PortfolioItem.php';
        }

        $conn->close();
    ?>
</main>

<script>

</script>

<style>
    
</style>