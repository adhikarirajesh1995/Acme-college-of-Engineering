<?php 
include('admin/functions/noticefn.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Educational An Education Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Educational Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free web designs for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
<!-- //online-fonts -->\
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-w3layouts" id="home">
	<!--top-bar-->
	<div class="top-search-bar">
		<div class="header-top-nav">
			<ul>

				<li><a href="#" data-toggle="modal" data-target="#myModal1"><i class="fa fa-envelope" aria-hidden="true"></i>VACANCY</a></li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-key" aria-hidden="true"></i>LOGIN</a></li>
				<li><a href="..//acme//slc/" data-toggle="modal" data-target="#myModal4"><i class="fa fa-lock" aria-hidden="true"></i>RESULT</a></li>
			</ul>
		</div>
	</div>
	<!-- Modal1 -->
		<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" >
					<div class="modal-dialog" role="document">
						<div class="modal-content modal-info">
							<div class="modal-header">
								<button type="button" class="close w3l" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							<h4>Vacancy Announcement:</h4>
							<!--newsletter-->
							<form action="resume.php" method="POST">
							<div class="vacancy">
                    <?php displayvacancy(); ?>
	<hr><input type="submit" value="Apply Now" class="btn btn-primary"><hr>
	 
	  
	
</form>
							</div>
						<!--//newsletter-->			
						</div>
					</div>
				</div>
		</div>
			<div class="clearfix"></div>

	<!-- //Modal1 -->

	<!-- Modal3 -->
		<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
			<div class="modal-dialog" role="document">
			<!-- Modal content-->
				<div class="modal-content news-w3l">
						<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>Login Your Account</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							<hr> <a href="admin/index.php" class="btn btn-info">Go To Admin Pannel</a><hr><br>
							<hr> <a href="demo.php" class="btn btn-success">Go To Users Pannel</a><hr>
							</div>
						<!--//newsletter-->			
						</div>
					</div>
				</div>
			 </div>
			<div class="clearfix"></div>
	<!-- //Modal3 -->

	<!-- Modal4 -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
			<div class="modal-dialog" role="document">
			<!-- Modal content-->
				<div class="modal-content news-w3l">
						<div class="modal-header">
							<button type="button" class="close w3l" data-dismiss="modal">&times;</button>
							<h4>User DashBoard</h4>
							<!--newsletter-->
							<div class="login-main wthree">
							<form action="#" method="post">
								<input type="text" placeholder="Name" name="Name">
								<input type="email" placeholder="Email" required="" name="Email">
								<input type="password" placeholder="Password" name="Password">
								<input type="password" placeholder="Confirm Password" name="Password">
								<input type="text" placeholder="Phone Number" name="Number">
								<input type="submit" value="Register Now">
							</form>
							</div>
						<!--//newsletter-->			
						</div>
					</div>
				</div>
			 </div>
			<div class="clearfix"></div>
	<!-- //Modal4-->
	<div class="search">
						<form action="#" method="post">
							<input type="search" placeholder="Search Here..." required="" />
							<input type="submit" value=" ">
						</form>
				</div>
					<div class="clearfix"></div>
	<!--//top-bar-->
	<!-- navigation -->
			<div class ="top-nav">
				<nav class="navbar navbar-default">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>
						<!-- navbar-header -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.php" class="hvr-underline-from-center active">Home</a></li>
								<li><a href="#about" class="hvr-underline-from-center scroll">About Us</a></li>
								<li><a href="#department" class="hvr-underline-from-center scroll">department</a></li>
								<li><a href="#gallery" class="hvr-underline-from-center scroll">Gallery</a></li>
								<li><a href="#team" class="hvr-underline-from-center scroll">Our Team</a></li>
								<li><a href="#notice" class="hvr-underline-from-center scroll">Notice</a></li>
								<li><a href="#contact" class="hvr-underline-from-center scroll">Contact Us</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>	
				</nav>
			</div>
	<!-- //navigation -->

	<div class="header">
		<!-- Slider -->
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
						
							<div class="slider-info">
								<p>THE BEST CTEVT AFFILIATED  ACADEMY.</p>
								<h3><a href="index.html"><span>ACME </span> COLLEGE OF ENGINEERING </a></h3>
								<h6>Diploma In Civil (3YRS).</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Providing Hostel facilitY with  clean & Green.</p>
								<h3><a href="index.html"><span>ACME</span> COLLEGE OF ENGINEERING </a></h3>
								<h6>Diploma In Computer (3YRS).</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Helping our students Fulfill the right potential</p>
								<h3><a href="index.html"><span>ACME</span> COLLEGE OF ENGINEERING </a></h3>
								<h6>Diploma In Electronics(3YRS)</h6>
							</div>
						</li>
						<li>
						
							<div class="slider-info">
								<p>Providing safe and Educational environment</p>
								<h3><a href="index.html"><span> ACME</span> COLLEGE OF ENGINEERING</a></h3>
								<h6>Scholarships and more</h6>
							</div>
						</li>
							
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		<!-- //Slider -->
	</div>
</div>
<!--main-content-->

<!--about-->
<div id="about" class="about">
	<div class="container">
			<h1>About <span>us</span></h1>
			<h2 style="text-align:justify;">Acme Engineering College (Diploma Programme) is an institution dedicated to maintain high standards of academic excellence. The college is located at Banasthali Chowk, just at the side of Ring Road. At present, the college offers Diploma in Engineering (civil, computer & electronics). 
 The College has many distinguished scholars on its faculty honored by their peers for important contribution and excellent performance to the field they study. Contact with these hard-working educators offers students the best possible entry point to the world of today where ideas and technology mesh. 
.</h2>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.9s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-education a1" aria-hidden="true"></span>
					</figure>
					<h5>A Legacy:History in Brief </h5>
					<p>The present college was a part of Acme Engineering College, located at Sitapaila, since its establishment in 2000 A.D. From the academic session (2070), the Diploma Programme has been conducted under the new management at Banasthali Chowk, Ring Road, Kathmandu. The college, from the past to the present, has aimed to provide quality education with the optimum utilization of the resources available at the college.  </p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<span class="glyphicon glyphicon-home a2" aria-hidden="true"></span>
					</figure>
					<h5>Mission Statement </h5>
					<p>Acme Engineering College provides innovative and responsive academic programmes in engineering education to serve the society by preparing middle – level technicians contributing to the national development and competent to work in international fronts as well. Furthermore, our mission is also to develop young men with active and creative minds, a sense of understanding and compassion for others, the courage to act on their beliefs, and the responsibility to the society and the nation. We stress the total development of each student: spiritual, moral, intellectual, social, and emotional. </p>
				</div>
				<div class="col-md-4 service-box wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						 <span class="glyphicon glyphicon-leaf a3" aria-hidden="true"></span>						
					</figure>
					<h5>Resources:</h5>
					<p>Acme Engineering College (Diploma Programme) has students, staff and faculties drwan from various parts of the country forming a multicultural community in which open dialougue is stimulated. The college has highly trained and well experienced staff and faculties. The well stocked library has books on related subjects, provides access to database and other library catalogues. The well-equipped laboratories provide students the opportunities to have the practical knowledge of the things they have learnt. There are extensive computer and data processing facilities with internet access available to all students.  .</p>
				</div>
				
				<div class="clearfix"> </div>
			</div>
			<div class="buttons">
				<div class="button">
					<h5><a href="#contact" class="scroll" id="Contact">Contact with us</a></h5>
				</div>
				<div class="button2">
					<h5><a href="#" data-toggle="modal" data-target="#myModal2">Admission Now</a></h5>
				</div>
			</div>
			<!-- Modal1 -->
			<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
				<!-- Modal content-->
					<div class="modal-content abt-w3l">
							<div class="modal-header">
								<button type="button" class="close clo1" data-dismiss="modal">&times;</button>
									<h4>Enter the Following Details</h4>
									<form action="admissioninsert.php" method="POST" class="mod2">
										<ul>
											<li class="text">Name of Applicant :  </li>
											<li class="agileits-main"><input  type="text" name="sname" required></li>
										</ul>
										<ul>
											<li class="text">Date of Birth :  </li>
											
											<li class="agileits-main"><input type="text" name="organization"  required></li>
										</ul>
										<ul>
											<li class="text">Father Name  :  </li>
											<li class="agileits-main"><input  type="text"name="fname" required></li>
										</ul>
										<ul>
											<li class="text">Gender  :  </li>
											<li class="agileits-main"><input type="text"name="contact"  required></li>
										</ul>
										<ul>
											<li class="text">mobile no  :  </li>
											<li class="agileits-main"><input type="text" name="mobile"  required></li>
										</ul>
										<ul>
											<li class="text">Join Diploma in  :  </li>
											<li class="agileits-main"><input type="text"  name="faculty" required></li>
										</ul>
										<ul>
											<li class="text">Address  :  </li>
											<li class="agileits-main"><input type="text"name="location"  required></li>
										</ul>
										<ul>
											<li class="text">District  :  </li>
											<li class="agileits-main"><input type="text" name="yourdistrict"  required></li>
										</ul>
										<ul>
											<li class="text">SEE Grade :  </li>
											<li class="agileits-main"><input type="text" name="grade"  required></li>
										</ul>
										
										<div class="clear"></div>
										<div class="agile-submit">
											<input type="submit" class="btn btn-primary" value="submit">
										</div>
									</form>

							</div>
						</div>
					</div>
				 </div>
				<!-- //Modal1 -->
				<div class="clearfix"></div>
			</div>
	</div>
	<div class="about-info">
		<img src="images/notice.jpg" alt="about-image">
		<div class="right-agile" id="notice">
			<h5>Notice from College</h5>
			<?php displayNotice(); ?>
		</div>
	</div>
	<div class="clearfix"></div>
<!--//about-->

<!-- services -->
<div class="services" id="department">
		<h3>DEPARTMENT</h3>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="compdeptn.php" class="hi-icon"><img src="images/book.png" alt=" " /></a>
			</div>
			<h4>COMPUTER</h4>
			<p>Better Lab Facilities</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="civildeptn.php" class="hi-icon"><img src="images/edu.png" alt=" " /></a>
			</div>
			<h4>CIVIL</h4>
			<p>Survey & Field Visit,Specially the civil students are taken to survey and for field visit as is designated in the curriculam.</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="electronicsdeptn.php" class="hi-icon"><img src="images/uni.png" alt=" " /></a>
			</div>
			<h4>ELECTRONICS </h4>
			<p>Electronics lab fully equiped with all electronics devices.</p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="exam.php" class="hi-icon"><img src="images/hourglass.png" alt=" " /></a>
			</div>
			<h4>EXAM SECTION</h4>
			<p>Those students who are absense for valid reason are provided coaching classes and also tution classs to those students who are seeking for it. </p>
		</div>
		<div class="col-md-2 services-gd text-center" data-wow-delay=".5s">
			<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
				<a href="account.php" class="hi-icon"><img src="images/book2.png" alt=" " /></a>
			</div>
			<h4>ACCOUNT</h4>
			<p>All the account info of the students here.</p>
		</div>
		<div class="clearfix"> </div>
</div>
<!-- //services -->
<!-- //services -->

<!-- gallery -->
<div class="portfolio" id="gallery">
	<h3>Gallery</h3>
		
		<div class="portfolio-top wow fadeInDown animated" data-wow-delay=".5s">
		 
			<div class="col-md-4 grid slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal1"  data-toggle="modal">

					<img src="images/8.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4>Acme College OF Engineering</h4>
							<p> Education is not a problem, it is an opportunity.</p>
						</figcaption>
					</a>						
				</figure>
			</div>
			
			<div class="col-md-4 grid slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal2"  data-toggle="modal">

					<img src="images/2.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4>Acme College</h4>
							<p> Education is not a problem,Education is an opportunity.</p>							
						</figcaption>	
						</a>						
				</figure>
			</div>
			<div class="col-md-4 grid slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal3"  data-toggle="modal">

					<img src="images/3.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4>ACME COLLEGE OF ENGINEERING</h4>
							<p> Education is not a problem. Education is an opportunity.</p>							
						</figcaption>
					</a>						
				</figure>
			</div>
			
			<div class="clearfix"></div>
		 </div>
		<div class="portfolio-top wow fadeInUp animated" data-wow-delay=".5s">
			<div class="col-md-3 grid grid-wi slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal4"  data-toggle="modal">

					<img src="images/4.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4 class="effcet-text"> ACME COLLEGE OF ENGINEERING</h4>
							<p> Learning is never done without errors and defeat.</p>							
						</figcaption>	
					</a>						
				</figure>
			</div>
			<div class="col-md-3 grid grid-wi slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal5"  data-toggle="modal">

					<img src="images/10.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4 class="effcet-text">ACME COLLEGE OF ENGINEERING</h4>
							<p>Learning is never done without errors and defeat.</p>							
						</figcaption>
						</a>						
				</figure>
			</div>
			<div class="col-md-3 grid grid-wi slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal6"  data-toggle="modal">

					<img src="images/6.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4 class="effcet-text">ACME COLLEGE OF ENGINEERING</h4>
							<p>Learning is never done without errors and defeat.</p>							
						</figcaption>
					</a>						
				</figure>
			</div>
			<div class="col-md-3 grid grid-wi slideanim">
				<figure class="effect-jazz">
				<a href="#portfolioModal7"  data-toggle="modal">

					<img src="images/7.jpg" alt="img25" class="img-responsive"/>
						<figcaption>
							<h4 class="effcet-text"> Acme College Of Engineering</h4>
							<p> Learning is never done without errors and defeat.</p>							
						</figcaption>
					</a>						
				</figure>
			</div>
			<div class="clearfix"></div>
		 </div>
	</div>
<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
		
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>ACME College OF ENGINEERING</h3>
						
                        <img src="images/8.jpg" class="img-responsive" alt="">
                        <p> ACME COLLEGE OF ENGINEERING.</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
         
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Acme college</h3>
                      
                        <img src="images/2.jpg" class="img-responsive" alt="">
                        <p>.</p>
                    </div>
                </div>
           
        </div>
    </div>
    </div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>ACME COLLEGE OF ENGINEERING</h3>
                     
						<p>ACME College OF Engineering .</p>
                        <img src="images/3.jpg" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
       
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>ACME</h3>
                       
                        <img src="images/4.jpg" class="img-responsive" alt="">
                        <p> LIVING HEALTHY.</p>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>ACME College</h3>
                       
                        <img src="images/10.jpg" class="img-responsive" alt="">
                        <p> ACME College OF Engineering ACME College OF Engineering ACME College OF Engineering .</p>
                    </div>
                </div>
           
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
           
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>Educational</h3>
                       
                        <img src="images/6.jpg" class="img-responsive" alt="">
                        <p>ACME College OF Engineering ACME College OF Engineering ACME College OF Engineering .</p>
                    </div>
                </div>
            </div>
        
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
            
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h3>ACME</h3>
                     
                        <img src="images/7.jpg" class="img-responsive" alt="">
                        <p>Acme College Of Engineering.</p>
                    </div>
                </div>
         
        </div>
    </div>
</div>
<!-- /Portfolio Modals -->
<!-- //gallery -->

<!-- team -->
<div class="team" id="team">
	<div class="container">
		<h3 class="title">Our  <span>Team</span></h3>
		<div class="team_gds">
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/sailendra.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Sailendra Jha</h4>
				<p>Chair-Person</p>
			</div>

			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/principal.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Omkar Nath Gupta</h4>
				<p>Principal</p>
			</div>

			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/amritsir.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Amrit Joshi</h4>
				<p>Faculty(English)</p>
			</div>

			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/mahesh.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Mahesh Mishra</h4>
				<p>Administrator</p>
			</div>

			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/kushal.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Kushal Kafle</h4>
				<p>HOD,Civil</p>
			</div>
		
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/final.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4> Anil Devkota</h4>
			    <p>Lecturer</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/ram.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>RC Dhungana</h4>
				<p> Math Deptn.</p>
			</div>
			<div class="col-md-3 team_gd1 wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.1s">
				<div class="team_pos">
					<div class="team_back"></div>
					<img class="img-responsive" src="images/rabin.jpg"  alt=" ">
					<div class="team_info">
						<a href="#"  class="face_one"><i class=" so1 fa fa-facebook fc1" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so2 fa fa-twitter fc2" aria-hidden="true"></i></a>
						<a href="#"  class="face_one"><i class=" so3 fa fa-google fc3" aria-hidden="true"></i></a>
					</div>
				</div>
				<h4>Rabindra Sah</h4>
				<p>Lecturer</p>
			</div>
			<div class="clearfix"></div>		
		</div>
	</div>
</div>
<!-- //team -->

<!-- Events -->
<div class="event" id="events">
	<div class="container">
		<h3>Events</h3>
		<div class="col-md-4 eve-agile e1">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#myModal5"><img src="images/pic.jpg" alt="image"></a>
			<h4><a href="#" data-toggle="modal" data-target="#myModal5">Acme College</a></h4>
				<h6>By an <a href="#">admin</a>, JULY 27-2017</h6>
				<p>Oraganizing 5 days Picnic Programs  For all staffs ,teachers,co-workers and all the College Students</p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>17</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>78</h6>
				</div>	
				<div class="eve-w3lright e1">
					<a href="#" data-toggle="modal" data-target="#myModal5"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<div class="col-md-4 eve-agile e2">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#myModal6"><img src="images/e1.jpg" alt="image"></a>
				<h4><a href="#" data-toggle="modal" data-target="#myModal6">ACME COLLEGE</a></h4>
				<h6>By an <a href="#">COMP.III/II</a>, 16TH OF JULY-2017</h6>
				<p>All the Students of Comp.III/II part is going to Demonstrate Project in the Super-Vision Of Project Supervisor Respected Sir,Er.SULABH BARTAULA.All the Teachers are invited to judge and Examine the performance of students.</p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>64</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>86</h6>
				</div>	
				<div class="eve-w3lright">
					<a href="#" data-toggle="modal" data-target="#myModal6"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
		<div class="col-md-4 eve-agile e3">
			<div class="eve-sub1">
				<a href="#" data-toggle="modal" data-target="#myModal7"><img src="images/farewell.jpg" alt="image"></a>
				<h4><a href="#" data-toggle="modal" data-target="#myModal7">ACME COLLEGE</a></h4>
				<h6>By an <a href="#">admin & Students</a>, August 11-2017</h6>
				<p>Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.</p>
			</div>
			<div class="eve-sub2">
				<div class="eve-w3lleft">
					<h6><i class="fa fa-comment-o" aria-hidden="true"></i>47</h6>
					<h6><i class="fa fa-heart-o" aria-hidden="true"></i>58</h6>
				</div>	
				<div class="eve-w3lright">
					<a href="#" data-toggle="modal" data-target="#myModal7"><h5>More</h5></a>
				</div>
				<div class="clearfix"></div>	
			</div>
		</div>
	</div>
</div>

						<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>ACME COLLEGE</h4>
											<img src="images/pic.jpg" alt="blog-image" />
											<span>ACME COLLEGE OF ENGINEERING ACME COLLEGE OF ENGINEERINGACME COLLEGE OF ENGINEERING ACME COLLEGE OF ENGINEERING
											ACME COLLEGE OF ENGINEERINGACME COLLEGE OF ENGINEERINGACME COLLEGE OF ENGINEERINGACME COLLEGE OF ENGINEERINGACME COLLEGE OF ENGINEERING</span>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->
						<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>ACME COLLEGE OF ENGINEERING</h4>
											<img src="images/e1.jpg" alt="blog-image" />
											<span>Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years..
											Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.</span>
									</div>
								</div>
						
							</div>
				       </div>

					   <!-- //Modal1 -->
						<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" >
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4>ACME COLLEGE OF ENGINEERING</h4>
											<img src="images/farewell.jpg" alt="blog-image" />
											<span>Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.
											Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years.Organizing Welcome & FairWWELL Programmes For 1st years 7 3rd Years..</span>
									</div>
								</div>
						
							</div>
				       </div>
					   <!-- //Modal1 -->

<!-- //Events -->

<!--test-->
	<div id="testimonials" class="review">
		<div class="container">
		<h3 class="title-w3">Testimonials</h3>
				<div class="test-monials">
				<!--//screen-gallery-->
						<div class="sreen-gallery-cursual">
							
						       <div id="owl-demo" class="owl-carousel">
					                 <div class="item-owl">
					                	<div class="test-review">
										<p><img src="images/left-quote.png" alt="">Life is all about the Struggle you must interact with it to make some more noise in life..<img src="images/right-quote.png" alt=""></p>
											<div class="img-agile">
												<img src="images/t1.jpg" class="img-responsive" alt=""/>
											</div>
											  <h5> Motivational-Rajesh </h5>
					                	    </div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										 <p> <img src="images/left-quote.png" alt=""> Study Is everything in Student's life so every students go for study books all time..<img src="images/right-quote.png" alt=""></p>
						                	<div class="img-agile">
											<img src="images/t2.jpg" class="img-responsive" alt=""/>
											</div>
											<h5> Er.Neesha-Karki</h5>
					                	</div>
					                </div>
					                 <div class="item-owl">
					                	<div class="test-review">
										     <p><img src="images/left-quote.png" alt="">Once you get a life so left nothing grab Everything doesnot matter what it makes and where it takes..!!<img src="images/right-quote.png" alt=""></p>
						                	<div class="img-agile">
											<img src="images/t3.jpg" class="img-responsive" alt=""/>
											</div>
											<h5>Er.SULABH BARTAULA</h5>
					                	</div>
					                </div>
				              </div>
						<!--//screen-gallery-->
					</div>
				</div>
			</div>
		</div>
<!--//test-->

<!--contact-->
	<div class="map">
		<h4>Find us On google Map</h4>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5662244.714693903!2d-2.279153484594319!3d46.13545249359953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a02933785731%3A0x6bfd3f96c747d9f7!2sFrance!5e0!3m2!1sen!2sin!4v1471606088687" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="contact-agile" id="contact">
		<h3>Contact <span>Us</span></h3>
			<div class="container">
						
				<form action="insertcontact.php" method="POST" class="wow fadeInLeft animated" <data-wow-delay=".5s">
					<div class="contact-grids1 agileinfo">
						<div class="contact-me ">
							<h5> Your Message</h5>
							<textarea name="Message" placeholder="" required=""> </textarea>
						</div>
						<div class="col-md-5 contact-form1">
							<h4> Your Name:</h4>
							<input type="text" name="Name" placeholder="" required="">
						</div>
						<div class="col-md-5 contact-form1">
							<h4>Email/Phone:</h4>
							<input type="email" name="Email" placeholder="" required="">
						</div>
						<div class="col-md-2 contact-form">
							<input type="submit" value="Submit">
						</div>
						<div class="clearfix"> </div>
					
					</div>
				</form>
						
			</div>
	</div>
<!--//contact-->

<!-- footer -->
	<div class="footer" id="footer">
		<div class="container">
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>About Us</h4>
				<p>we will are always looking forward to hear positive from our students ,parents and other Visitors 
				we will are always looking forward to hear positive from our students ,parents and other Visitors 
				we will are always looking forward to hear positive from our students ,parents and other Visitors we will are always looking forward to hear positive from our students ,parents and other Visitors .</span></p>
			</div>
			<div class="col-md-4 agileinfo_footer_grid mid-w3l nav2">
				<h4>Options</h4>
				<ul>
					<li><a href="#home" class="scroll">Home</a></li>
					<li><a href="#about" class="scroll">About Us</a></li>
					<li><a href="#Department" class="scroll">Department</a></li>
					<li><a href="#gallery" class="scroll">Gallery</a></li>
					<li><a href="#team" class="scroll">Team</a></li>
					<li><a href="#events" class="scroll">Events</a></li>
					<li><a href="#testimonials" class="scroll">Testimonials</a></li>
				</ul>
			</div>
			<div class="col-md-4 agileinfo_footer_grid">
				<h4>Address</h4>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> VANASTHALI KATHMANDU,RING-ROAD NEPAL</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@acmecollege.edu.np">info@acmecollege.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (14)</li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="w3agile_footer_copy">
				<p>© 2017 ACME COLLEGE. All rights reserved | Design by <a href="http://w3layouts.com/">RAJESH-ADHIKARI.</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


<script src="js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
		<!--light-box-files -->
		<script>
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
 <!-- required-js-files-->
		
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							        items : 1,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation : false,
							        navigationText :  false,
							        pagination : true,
							      });
							    });
							    </script>
								 <!--//required-js-files-->

<script src="js/responsiveslides.min.js"></script>
		<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						pager:false,
						nav: true,
						speed: 1000,
						namespace: "callbacks",
						before: function () {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			

<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

	<!-- bottom-top -->
	<!-- smooth scrolling -->
		<script type="text/javascript">
			$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/								
			$().UItoTop({ easingType: 'easeOutQuart' });
			});
		</script>
		<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->
	<!--// bottom-top -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

</body>
</html>