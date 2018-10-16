    	<div class="container">
    		<h1 style="padding-top:50px; ">Users | <?php print $name ?></h1>
    		<div class="row">
              <div class="col-md-6">
               <div class="panel panel-default">

                  <div class="panel-body">
                    <h2>User</h2>
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <!-- <th>ID</th> -->
                            <th>Name</th>
                            <th>Password</th>
                            <th>Level</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php 
                    //$userdarimodel=mysql_fetch_assoc();
                      foreach ($userdarimodel as $key) {
                        print "<tr>";
                        //print "<td>".$key->id."</td>";
                        print "<td>".$key->name."</td>";
                        print "<td>".$key->pass."</td>";
                        print "<td>".$key->level."</td>";
                        print "</tr>";
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
</div>
</div>