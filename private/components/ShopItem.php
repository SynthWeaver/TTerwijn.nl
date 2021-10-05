<div class="shop-item-component" onclick="test(this)">
    <h2><?=$product->name?></h2>
    <img src="<?=$product->image?>" alt="<?=$product->name?>">
</div>

<script>
    function test(element){
        const oldFocusElement = document.getElementsByClassName("shop-item-component-focus")[0];
        console.log(oldFocusElement);
        if(oldFocusElement){
            oldFocusElement.classList.remove("shop-item-component-focus");
        }
        
        //if you press the same image twice it does not focus again
        if(element != oldFocusElement){
            element.classList.toggle("shop-item-component-focus");
        }
    }

</script>

<style>
    .shop-item-component{
        height: 100px;
        position: relative;
    }

    .shop-item-component-focus{
        /* width: unset; */
        height: 70vh;
        width: 100%;
        order: -1;
        flex-grow: 4;
        margin-bottom: 1rem;
    }

    .shop-item-component>h2{
        position: absolute;
        top: 0;
        left: 0;
    }

    .shop-item-component>img{
        height: 100%;
    }

    
</style>