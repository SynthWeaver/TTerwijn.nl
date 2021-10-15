<?php 
    $GITHUB_TITLE = "Opent deze github repository in een nieuw tabblad."; 
    $DEMO_TITLE = "Opent de demo van dit project in een nieuw tabblad."; 
    $IMAGE_TITLE = "Opent de foto van dit project in new tabblad voor betere weergave."; 
?>

<section class="portfolio-item-component">
    <h2><?= $job->getName() ?></h2>
    <a href="public/img/<?= $job->getImageLink() ?>" title="<?= $IMAGE_TITLE ?>" target="_blank" >
        <img src="public/img/<?= $job->getSmallImageLink() ?>" alt="Een foto van het project <?= $job->getName() ?>">
    </a>
    <p>
        <?php
            echo $job->getDescription() . "<br><br>";
        
            // Todo: Add icons instead of text
            if($job->getGithubLink()){
                echo sprintf('<a href="%s" title="%s" target="_blank" 
                >Github</a>&nbsp;', $job->getGithubLink(), $GITHUB_TITLE);
            }

            if($job->getDemoLink()){
                echo sprintf('<a href="%s" title="%s" target="_blank" 
                >Demo</a>&nbsp;', $job->getDemoLink(), $DEMO_TITLE);
            }

            if($job->getImageLink()){
                echo sprintf('<a href="public/img/%s" title="%s" target="_blank" 
                >Foto</a>&nbsp;', $job->getImageLink(), $IMAGE_TITLE);
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

    /* Mobile */
    @media only screen and (max-width: 1000px){       
        main{
            --main-padding: 0;
        }

        .portfolio-item-component{
            padding: 0 1rem;
        }
    }

    /* Mobile */
    @media only screen and (max-width: 700px){       
        .portfolio-item-component{
            grid-template-columns: auto;
        }

        .portfolio-item-component>h2{
            grid-column-start: 1;
            grid-column-end: 1;
        }

        .portfolio-item-component>p{
            padding-left: 0;
        }

        .portfolio-item-component>a>img{
            margin-bottom: 1rem;
        }
    }
</style>