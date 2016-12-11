<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" id="tableHeading">
        <h1>Menu</h1>
    </div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Menu Items</th>
                <th>Description</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            {content}
            <tr>
                <td><a href="{name}">{name}</a></td>
                <td>{description}</td>
                <td>{price}</td>
            </tr>
            {/content}
        </tbody>
    </table>
    
    <br>
</div>