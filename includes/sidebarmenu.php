<?php
$email = $_SESSION['alogin'];
$sql = "SELECT `Updated_status` FROM `register` WHERE `email`='$email'";
$query= $dbh -> prepare($sql);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
// $stat=$results["status"];

?>
<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="companyDashboard.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> Tour Packages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
											<?php 
											if($query->rowCount() > 0)
											{
											foreach($results as $result)
											{				
											$stat= htmlentities($result->Updated_status);
											if($stat==1)
											{
												echo("<li id='menu-academico-avaliacoes' ><a href='createpackage.php'>Create</a></li>");
											}
											else
											{
											}
											}
											}
											?>
											<li id="menu-academico-avaliacoes" ><a href="manage-packages.php">Manage</a></li>
										  </ul>
										</li>
									 <li><a href="#"><i class="fa fa-table"></i>  <span>Manage Issues</span><div class="clearfix"></div></a></li>
									<li><a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Manage Enquiries</span><div class="clearfix"></div></a></li>
									<!-- <li><a href="manage-pages.php"><i class="fa fa-file-text-o" aria-hidden="true"></i>  <span>Manage Pages</span><div class="clearfix"></div></a></li> -->
							     
									
								  </ul>
								</div>
							  </div>
							  