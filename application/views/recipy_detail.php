<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" id="tableHeading">
        <h1>{name}</h1>
        <?php
        $role = $this->session->userdata('userrole');
        
            if($role == "admin"){
                echo '<a class="btn btn-default" role="button" href="/recipe/detail/addItem/{id}">add</a>';
            }
        ?>        
    </div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Item</th> 
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            {detail}
                <tr>
                    <?php
                        $role = $this->session->userdata('userrole');

                        if($role == "admin"){
                              echo '<td><a class="btn btn-default" role="button" href="/recipe/edit/{id}-{item}">{itemname}</a></td>'; 
                        }else{ 
                            echo '<td>{itemname}</td>';
                        }
                    ?>  
                  <td>{Quantity}</td>
                </tr>
            {/detail}
        </tbody>
    </table>
</div>