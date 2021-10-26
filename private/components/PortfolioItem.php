<?php 
    $GITHUB_TITLE = "Opent deze Github repository in een nieuw tabblad."; 
    $DEMO_TITLE = "Opent de demo van dit project in een nieuw tabblad."; 
    $IMAGE_TITLE = "Opent de foto van dit project in new tabblad voor betere weergave."; 
?>

<section class="portfolio-item-component">
    <h2><?= $job->getName() ?></h2>
    
    <?php 
        if($job->getImageLink()){
            echo "
                <a href='public/img/{$job->getImageLink()}' title='$IMAGE_TITLE' target='_blank' >
                    <img src='public/img/{$job->getSmallImageLink()}' alt='Een foto van het project {$job->getName()}'>
                </a>
            ";
        }else{
            echo "<img src='public/img/empty.png' alt='Geen foto beschikbaar'>";
        }
    ?>
    
    
    <div>
        <?php
            echo "<p>" . $job->getDescription() . "</p>";

            echo "<div>";
                if($job->getDemoLink()){
                    echo sprintf('<a href="%s" title="%s" target="_blank" rel="noopener" 
                    ><img src="public/img/link-solid.png" alt="Demo"></a>&nbsp;', $job->getDemoLink(), $DEMO_TITLE);
                }else{
                    echo sprintf('<a class="image-button-disabled" title="De demo is helaas niet beschikbaar..." 
                    ><img src="public/img/link-solid.png" alt="Demo"></a>&nbsp;');
                }

                if($job->getGithubLink()){
                    echo sprintf('<a href="%s" title="%s" target="_blank" rel="noopener" 
                    ><img src="public/img/github-brands.png" alt="Github"></a>&nbsp;', $job->getGithubLink(), $GITHUB_TITLE);
                }else{
                    echo sprintf('<a class="image-button-disabled" title="De repository is helaas privé..." 
                    ><img src="public/img/github-brands.png" alt="Github"></a>&nbsp;');
                }

                // Show image button if both links above are missing
                if($job->getImageLink()){
                    echo sprintf('<a href="public/img/%s" class="image-button" title="%s" target="_blank" 
                    ><img src="public/img/camera-solid.png" alt="Foto"></a>&nbsp;', $job->getImageLink(), $IMAGE_TITLE);
                }else{
                    echo sprintf('<a class="image-button-disabled" title="De foto is helaas niet beschikbaar..." 
                    ><img src="public/img/camera-solid.png" alt="Foto"></a>&nbsp;');
                }
            echo "</div>";
        ?>
    </div>
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

    .portfolio-item-component img{
        max-width: 100%;
        max-height: 10rem;
        display: block;
        margin: 0 auto;
    }

    .portfolio-item-component>div{
        padding-left: 1rem;
    }

    .portfolio-item-component>div>p{
        padding-bottom: 1rem;
    }

    .portfolio-item-component>div>div{
        display: flex;
    }

    .portfolio-item-component>div>div>a{
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #026491;
        height: 37px;
        width: 56px;
        border-radius: 4px;
    }

    .portfolio-item-component .image-button-disabled{
        background-color: #6e6e6e;
        cursor: default;
    }

    .portfolio-item-component>div>div>a>img{
        height: 25px;
        width: 25px;
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