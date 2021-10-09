<?php 
    $GITHUB_TITLE = "View this Github project in a new tab."; 
    $DEMO_TITLE = "View this project in a new tab."; 
    $IMAGE_TITLE = "View this image better in a new tab."; 
?>

<section class="portfolio-item-component">
    <h2><?=$job->getName()?></h2>
    <a href="public/img/<?= $job->getImageLink() ?>" title="<?= $IMAGE_TITLE ?>" target="_blank" >
        <img src="public/img/<?= $job->getSmallImageLink() ?>">
    </a>
    <p>
        <?php
            echo $job->getDescription();
        
            if($job->getGithubLink()){
                echo sprintf('<a href="%s" title="%s" target="_blank" 
                >Github</a>&nbsp', $job->getGithubLink(), $GITHUB_TITLE);
            }

            if($job->getDemoLink()){
                echo sprintf('<a href="%s" title="%s" target="_blank" 
                >Demo</a>&nbsp', $job->getDemoLink(), $DEMO_TITLE);
            }

            if($job->getImageLink()){
                echo sprintf('<a href="public/img/%s" title="%s" target="_blank" 
                >Image</a>', $job->getImageLink(), $IMAGE_TITLE);
            }
        ?>
    </p>
</section>

<script>
    
</script>

<style>
    .portfolio-item-component{
        display: grid;
        grid-template-columns: 33% auto;
    }

    .portfolio-item-component>h2{
        grid-column-start: 1;
        grid-column-end: 3;
        margin-bottom: 1rem;
    }

    .portfolio-item-component>a>img{
        max-width: 100%;
        max-height: 10rem;
        display: block;
        margin: 0 auto;
    }

    .portfolio-item-component>p{
        padding-left: 1rem;
    }
</style>