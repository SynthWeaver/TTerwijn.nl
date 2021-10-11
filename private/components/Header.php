<?php $HOME_TITLE = "Open de homepagina van Tim Terwijn"; ?>

<header>
    <section>
        <a href="/" title="<?= $HOME_TITLE ?>">Home</a>
        <a href="/curriculum-vitae" title="Open de CV pagina van Tim Terwijn">CV</a>
        <a href="/portfolio" title="Open de portfolio pagina van Tim Terwijn">Portfolio</a>
    </section>
    <section>
        <a href="/" title="<?= $HOME_TITLE ?>">Tim Terwijn</a>
    </section>

    <!-- Todo add breadcrubs or colours to menu -->
</header>

<script>

</script>

<style>
    header{
        display: grid;
        grid-template-columns: 50% 50%;

        padding: 0 10%;
        background-color: #0079b1;
        margin: 0.5rem 0;
    }

    header a{
        color: white;
        text-decoration: none;
    }

    header>section{
        display: grid;
        height: 100%;
    }

    header>section>a{
        display: grid;
        align-items: center;
        height: 3rem;
        text-align: center;
    }

    /* Menu buttons */
    header>section:first-child{
        grid-template-columns: auto auto auto;
        justify-self: start;
    }

    header>section:first-child>a{
        border-right: 1px solid white;
        width: 93px;
    }

    header>section:first-child>a:first-child{
        border-left: 1px solid white;
    }

    /* Home button */
    header>section:last-child{
        justify-self: end;
    } 
    
    header>section:last-child>a{
        font-family: monospace;
        font-size: 2rem;
    }

    /* mobile */
    @media only screen and (max-width: 681px) {
        header{
            grid-template-columns: 100%;
        }

        header>section:first-child {
            grid-template-columns: auto auto auto auto;
            justify-self: center;
        }

        header>section:first-child>a:last-child {
            display: grid;
        }
        
        /* Home button */
        header>section:last-child{
            display: none;
        }
    }

    /* mobile small */
    @media only screen and (max-width: 368px) {        
        header>section:first-child {
            grid-template-columns: auto auto;
            justify-self: center;
        }

        header>section:first-child>a:nth-child(1),
        header>section:first-child>a:nth-child(2) {
            border-bottom: 1px solid white;
        }

        header>section:first-child>a:nth-child(3){
            border-left: 1px solid white;
        }
    }
</style>