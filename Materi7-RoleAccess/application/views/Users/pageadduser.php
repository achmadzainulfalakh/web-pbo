    	<div class="container">
    		<h1 style="padding-top:50px; ">Users</h1>
    		<div class="row">
    			<div class="col-md-6">
    				<div class="panel panel-default">
    					<div class="panel-body">
    						<h2>New User</h2>
    						<form class="form-horizontal" action="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/adduser" method="POST">
    							<div class="form-group">
    								<label class="control-label col-sm-2" for="name">Name:</label>
    								<div class="col-sm-10">
    									<input type="text" name="name" class="form-control" id="name" placeholder="Username" >
    								</div>
    							</div>
    							<div class="form-group">
    								<label class="control-label col-sm-2" for="pass">Password:</label>
    								<div class="col-sm-10">          
    									<input type="password" name="pass" class="form-control" id="pass" placeholder="Password" >
    								</div>
    							</div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="level">Level:</label>
                                    <div class="col-sm-10">          
                                        <select class="form-control" id="level" name="level">
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">        
                                    <div class="col-sm-offset-2 col-sm-10">
                                       <button type="submit" class="btn btn-default">Submit</button>
                                   </div>
                               </div>
                           </form>

                       </div>
                   </div>

               </div>
           </div>
       </div>