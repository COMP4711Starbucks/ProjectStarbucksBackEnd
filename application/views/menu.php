<!-- Default panel contents -->
<div class="panel-heading" id="tableHeading">
    <div class="title">
        <h1>Menu</h1>
    </div>
    
    <div class="cartBox">
        <a href="../cart" class="cartBtn">Cart</a>
    </div>
</div><br>

{content}
<div class="menu-item">
    <div class="img">
        <img src="/images/{picture}" id="items"/>
    </div>

    <div class="item-name">
        {name}
    </div>

    <div class="item-description">
        {description}
    </div>

    <div class="item-price">
        ${price}
    </div>

    <div>
        <a href="/menu/additem/{id}" class="add-to-cart">Add to Cart</a>
    </div>
</div>
<hr/>
<br/>
{/content}
