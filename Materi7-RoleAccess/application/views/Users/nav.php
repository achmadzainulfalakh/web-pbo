 <nav class="navbar navbar-inverse navbar-fixed-top">
 	<div class="container-fluid">
 		<div class="navbar-header">
 			<a class="navbar-brand" href="#">Role Access </a>
 		</div>
 		<ul class="nav navbar-nav">
 			<li class="active"><a href="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users">Home</a></li>
 			<?php 
 			if ($this->Musers->getLevel() == "administrator" or $this->Musers->getLevel() == "admin" ){
 				print '<li><a href="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/users">Users</a></li>';
 				print '<li><a href="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/adduser">New User</a></li>';

 			}
 			if ($this->Musers->getLevel() !== null){
 				print '<li><a href="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/profile">Profile</a></li>';
 				print '<li><a href="http://localhost/web-pbo/Materi7-RoleAccess/index.php/users/logout">Logout</a></li>';
 			} 
 			?>
 			
 			
 		</ul>
 	</div>
 </nav> 