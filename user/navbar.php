<nav class="navbar navbar-default" style="background-color: #2c8fb2;">
    <div class="container-fluid">
		<div class="navbar-header">
			<a href="index.php" class="navbar-brand" style="padding: 8px 8px;background-color:#68B7D4">
				<img src="../img/1200px-Cryptocat_logo_new.png" width="35" height="35"  class="d-inline-block align-top" alt="" />
			</a>
		</div>
		
		<ul class="nav navbar-nav" >
			<li><a href="index.php" style="color: white;"><span class="glyphicon glyphicon-home"></span> Lobby</a></li>
		</ul>
		
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#account" data-toggle="modal" style="color: white;"><span class="glyphicon glyphicon-lock"></span> <?php echo $user; ?></a></li>
			<li class="dropdown" style="background-color: #FF975D;">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li><a href="#photo" data-toggle="modal"><span class="glyphicon glyphicon-picture"></span> Update Photo</a></li>
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
			</li>
		</ul> 
    </div>
</nav>