    <!-- Start your project here-->
    <!-- <div style="height: 100vh">
        <div class="flex-center flex-column">
            <h1 class="animated fadeIn mb-4">Material Design for Bootstrap</h1>

            <h5 class="animated fadeIn mb-3">Thank you for using our product. We're glad you're with us.</h5>

            <p class="animated fadeIn text-muted">MDB Team</p>
        </div>
    </div> -->
    <div class="container py-5">
    	<div class="row pt-5">
    		<!--Grid column-->
    		<div class="col-lg-6 col-md-6">
    			<div class="card">
    				<!--Card content-->
    				<div class="card-body">
    					<img src="http://via.placeholder.com/500x400" class="img img-responsive">
                        <?php //print_r($arr);

    foreach ($arr->result() as $row)
    {
        print $row->name."<br />";
        print $row->pass."<br />";
        //print md5($row->pass)."<br />";
    }
    ?>
    				</div>
    			</div>

    		</div>
    		<div class="col-lg-6 col-md-6">
    			<div class="card">
    				<!--Card content-->
    				<div class="card-body">
    					<!--Title-->
    					<h4 class="card-title">Login</h4>
    					<!-- Form contact -->
    					<form method="POST" class="p-5">
    						<div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
    							<input type="text" id="form3" name="username" class="form-control form-control-sm">
    							<label for="form3">Username</label>
    						</div>
    						<div class="md-form form-sm"> <i class="fa fa-pencil prefix grey-text"></i>
    							<input type="password" id="form2" name="password" class="form-control form-control-sm">
    							<label for="form2">Password</label>
    						</div>

    						<div class="text-center mt-4">
    							<button class="btn btn-primary">Login <i class="fa fa-paper-plane-o ml-1"></i></button>
    						</div>
    					</form>
    					<!-- Form contact -->
    					<p><?php 
	    					//menampilkan username dari controller Login
                          print $this->session->userdata('name') . "<br/>";
                          print $this->session->userdata('pass') ?></p>
                          <p><?php 
    						//menampilkan password dari controller Login
                              //print $password ?></p>
                              <p><?php 
    						//enkripsi safe url
                                  //print str_replace(array("=","+","/"), array("-","_","~"), $password) ?></p>
                                  <p><?php 
    						//dekrip password
                                      //print $this->encrypt->decode($password,'hallodunia') ?></p>

                                  </div>

                              </div>

                          </div>
                          <!--Grid column-->		
                      </div>
                  </div>

    <!-- /Start your project here-->