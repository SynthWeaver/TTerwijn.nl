<?php define("IMAGE_TITLE", "View this image better in a new tab."); ?>

<main class="portfolio-page">
    <h1>Portfolio</h1> 
    <section>
        <h2>Souvenirbeurs</h2>
        <a href="public/img/souvenirbeurs.png" title="<?= IMAGE_TITLE ?>" target="_blank" >
            <img src="public/img/souvenirbeurs.png">
        </a>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <a href="public/img/souvenirbeurs.png" title="<?= IMAGE_TITLE ?>" target="_blank" >
                Image
            </a>
        </p>
    </section>
    <section>
        <h2>Souvenirbeurs</h2>
        <a href="#" title="<?= IMAGE_TITLE ?>" target="_blank" >
            <img src="#">
        </a>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <a href="#" title="<?= IMAGE_TITLE ?>" target="_blank" >
                Image
            </a>
        </p>
    </section>
    <section>
        <h2>CMD Meesterproef</h2>
        <a href="public/img/meesterproef.png" title="<?= IMAGE_TITLE ?>" target="_blank" >
            <img src="public/img/meesterproef.png">
        </a>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <a href="https://github.com/TimTerwijn/meesterproef-1920" title="View this Github project in a new tab." target="_blank" 
                >Github</a>&nbsp
            <a href="https://timterwijn.github.io/meesterproef-1920/" title="View this project in a new tab." target="_blank" 
                >Demo</a>&nbsp
            <a href="public/img/meesterproef.png" title="<?= IMAGE_TITLE ?>" target="_blank" 
                >Image</a>
        </p>
    </section>
    <section>
        <h2>CMD Web design</h2>
        <a href="public/img/webdesign.png" title="<?= IMAGE_TITLE ?>" target="_blank" >
            <img src="public/img/webdesign.png">
        </a>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            <a href="https://github.com/TimTerwijn/web-design-1920" title="View this Github project in a new tab." target="_blank" 
                >Github</a>&nbsp
            <a href="https://timterwijn.github.io/web-design-1920/" title="View this project in a new tab." target="_blank" 
                >Demo</a>&nbsp
            <a href="public/img/webdesign.png" title="<?= IMAGE_TITLE ?>" target="_blank" 
                >Image</a>
        </p>
    </section>

</main>

<script>

</script>

<style>
    .portfolio-page>section{
        display: grid;
        grid-template-columns: 33% auto;
    }

    .portfolio-page>section>h2{
        grid-column-start: 1;
        grid-column-end: 3;
        margin-bottom: 1rem;
    }

    .portfolio-page>section>a>img{
        max-width: 100%;
        max-height: 10rem;
        display: block;
        margin: 0 auto;
    }

    .portfolio-page>section>p{
        padding-left: 1rem;
    }
</style>