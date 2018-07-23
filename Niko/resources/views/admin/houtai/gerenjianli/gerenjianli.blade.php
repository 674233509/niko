<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<!-- Basic Page Needs
================================================== -->
<title>个人信息</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="">
<meta name="author" content="">

<!-- Mobile Specific Metas 
================================================== -->
<meta content="width=device-width,initial-scale=1" name="viewport">

<!-- Favicons
================================================== -->
<link rel="icon"  href="/yangshi/gerenjianli/images/logo.ico">
<link rel="shortcut icon" href="/yangshi/gerenjianli/images/favicon.png">
<link rel="apple-touch-icon" href="/yangshi/gerenjianli/images/apple-touch-icon.png">
<link href="/yangshi/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="apple-touch-icon" sizes="72x72" href="/yangshi/gerenjianli/images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="/yangshi/gerenjianli/images/apple-touch-icon-114x114.png">

<!--fonts
====================================================-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700%7cOswald:400,700" rel="stylesheet">
<!--stylesheets
====================================================-->
<link rel="stylesheet" type="text/css" href="/yangshi/gerenjianli/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/yangshi/gerenjianli/css/font-awesome.min.css">  
<link rel="stylesheet" type="text/css" href="/yangshi/gerenjianli/css/style.css">
<link rel="stylesheet" type="text/css" href="/yangshi/gerenjianli/css/simpletextrotator.css">
 <!-- layui -->

<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
<script src="/yangshi/gerenjianli/js/jquery.min.js"></script> <!-- JQUERY -->
</head>
<body>

<!--FRONT PAGE/ SPLASH SCREEN SECTION-->

<div class="loading-screen"></div>

<div id="frontpage"> 
	<div class="shadow-img"></div> 
	<img src="/yangshi/gerenjianli/images/front-image.jpg" class="front-img img-responsive" alt ="Front-image"><!--IMAGE FOR FRONT SCREEN-->
	<h1>{{session('user')}} </h1><!--PROFILE NAME-->
	<h3 class="invert" style="margin-top: -10px; margin-bottom: 10px;">Web <span class="rotate">开发, 设计师, 艺术家</span></h3> <!--SUBTITLE IN PROFILE-->
	<div class="frontclick"><img src="/yangshi/gerenjianli/images/click.png" alt="" class="img-responsive"><span class="pulse"></span></div>
</div>
<!--FRONT PAGE/ SPLASH SCREEN SECTION ENDS-->
<!--container-->
<div class="container">
	<div id="content" class="row hidden">
		<div class="col-sm-4">
			<!--namecard-->
			<div id="namecard" class="namecard">
				<div class="shadow-img"></div>
				<!-- <h1 class="maintitle">John <span class="invert">Doe</span></h1><!--PROFILE NAME--> 
				@if(session('user'))
				<h1 class="maintitle">{{session('user')}}</h1><!--PROFILE NAME-->
				@else
				<h1 class="maintitle">John <span class="invert">Doe</span></h1><!--PROFILE NAME-->
				@endif
				
				<h3 class="invert sub-maintitle">Web 
					<span class="rotate">开发, 设计师, 艺术家</span><!--SUBTITLE AFTET NAME-->
				</h3>
				@if(session('pic'))
					<img id="profile-img" class="profile-img transparent" src="/{{session('pic')}}" alt="profile-image"><!--PROFILE IMAGE-->
				@else
					<img id="profile-img" class="profile-img transparent" src="/yangshi/gerenjianli/images/profile-thum.png" alt="profile-image"><!--PROFILE IMAGE-->
				@endif
				
			</div><!--/#namecard-->
			<!--menu-->
			<div id="menu-container">
				<!--PAGE MENU-->
				<ul class="nav-menu no-padding">
					<li class="nav-btn selected" title="Home" data-page="home">
						<div class="hover-background"></div>
						<span>个人信息</span><i class="fa fa-user fa-fw"></i>
					</li>
					<li class="nav-btn" id="resume-btn" title="Resume"  data-page="resume">
						<div class="hover-background"></div>
						<span>简历</span><i class="fa fa-file-text fa-fw"></i>
					</li>
				   <li class="nav-btn folio-btn" data-filter="*" title="Portfolio" data-page="portfolio">
						<div class="hover-background"></div>
						<span>作品</span><i class="fa fa-suitcase fa-fw"></i>
					</li>
					<li class="nav-btn" title="Contact" id="contact-link" data-page="contact">
						<div class="hover-background"></div>
						<span>联系我</span><i class="fa fa-paper-plane fa-fw"></i>
					</li>
				</ul><!--/.nav-menu __PAGE MENU ENDS-->

				<!--SOCIAL NAV MENU-->
				<div class="social-menu-container">
					<ul class="social-menu no-padding">                     
						<li><a href="/admin/houtai/shouye/index"><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						<li><a href=""><i class="fa fa-youtube"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href=""><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div><!--/.social-menu-container-->
			</div><!--#menu-container-->
		</div>
		<div class="col-sm-8 page-segment">
			<ul class="page-container no-padding">
				<!--HOME/PROFILE PAGE-->
				<li id="home" class="selected">
					<div class="title-container hidden">
						<div class="shadow-img"></div> 
						<h2 class="rotate-out">Welcome To <span class="invert">My Profile</span></h2><!--HOME TITLE-->                          
					</div>
					<div class="description hidden">
						<div class="watermark-home"></div> 

						<div class="fade-text transparent">
							<!--DESCRIPTION ON HOME-->
							<div class="strong-text">Hello, I am <span>{{session('user')}}</span></div>
							<div class="focus-text"><span>Web 开发 & </span><span>Web 设计</span></div>
							<p class="large-paragraph">我有十年的网页/界面设计师经验，我热爱干净，优雅的造型。我在网站制作 CSS 和 HTML 方面有很多经验。</p>         
							<!--DESCRIPTION ON HOME ENDS-->
						</div>

						<!--ALL PERSONAL DETAILS-->
						<h3 class="personal-info-title title">个人信息</h3>
						<ul class="personal-info">
							<li class="rotate-out rotated"><label>姓名</label><span>{{session('user')}}</span></li>                     
							<li class="rotate-out rotated"><label>地址</label><span>{{session('dizhi')}}</span></li>
							<li class="rotate-out rotated"><label>邮箱</label><span>{{session('mail')}}</span></li>  
							<li class="rotate-out rotated"><label>手机号</label><span>{{session('tel')}}</span></li>
							<li class="rotate-out rotated"><label>QQ</label><span>{{session('qq')}}</span></li>
						</ul><!--/ul.personal-info-->
					</div>
				</li><!--/#home-->

				<!--RESUME PAGE-->
				<li id="resume" class="hidden">
					<div class="title-container">
						<div class="shadow-img"></div>
						<h2 class="rotate-out rotated">我的履历</h2> <!--RESUME TITLE-->
					</div>
					<div class="description">

						<div class='tabs tabs_animate'>
							<!--RESUME TAB LISTS-->
							<ul class='horizontal no-padding'>
								<li><a href="#tab-1" class="icon-bg icon-skills"><div>专业技能</div></a></li>
								<li><a href="#tab-2" class="icon-bg icon-education"><div>教育经历</div></a></li>
								<li><a href="#tab-3" class="icon-bg icon-employment"><div>工作经历</div></a></li>
							</ul><!--RESUME TAB LISTS ENDS-->

							<!--RESUME FIRST TAB/SKILL TAB DETAILS-->
							<div id='tab-1'>
								<h3 class="title">技能指数</h3><!--SKILLS WITH BAR DISPLAY-->
								<ul class="skills-list no-padding">
									<li class="row">
										<div class="col-xs-2"><div class="fw-mid">HTML</div></div>
										<div class="col-xs-9">
											<div class="bar">
												<div class="percentage" id="bar1" style="width: 58%;"></div>
											</div>
										</div>
									</li>
									<li class="row">
										<div class="col-xs-2"><div class="fw-mid">CSS</div></div>
										<div class="col-xs-9">
											<div class="bar">
												<div class="percentage" id="bar2" style="width: 75%;"></div>
											</div>
										</div>
									</li>
									<li class="row">
										<div class="col-xs-2"><div class="fw-mid">Javascript</div></div>
										<div class="col-xs-9">
											<div class="bar">
												<div class="percentage" id="bar3" style="width: 85%;"></div>
											</div>
										</div>
									</li>
								</ul><!--SKILLS WITH BAR DISPLAY ENDS-->

								<!--SKILLS WITH CIRCLE DISPLAY-->
								<div class="circle-skill-container">
									<h3 class="title">其他技能</h3>
									<div class="row">
										<div class="col-xs-4 center-align">
											<div class="circle-bar" id="line-container1">
												<div class="progressbar-text" id="progress-text1">0</div>
											</div>
											<h5>Photoshop</h5>
										</div>
										<div class="col-xs-4 center-align">
											<div class="circle-bar" id="line-container2">
												<div class="progressbar-text" id="progress-text2">0</div>
											</div>
											<h5>Illustrator</h5>
										</div>
										<div class="col-xs-4 center-align">
											<div class="circle-bar" id="line-container3">
												<div class="progressbar-text" id="progress-text3">0</div>
											</div>
											<h5>After effect</h5>
										</div>
									</div>
								</div><!--SKILLS WITH CIRCLE DISPLAY ENDS-->
							</div><!--RESUME FIRST TAB/SKILL TAB DETAILS ENDS-->
							
							<!--RESUME SECOND TAB/EDUCATION TAB DETAILS-->
							<div id='tab-2'>
								<h3 class="title">教育经历</h3>

								<ul class="education-class folio-container" >
								
									<li>
									
										<!--EDUCATION LIST ITEM-->
										<h4 class="title">{{$data['edut1']}}<i class="fa fa-sort-desc pull-right"></i></h4>
										
										<div class="list-content">
											<h5 class="title">Consectetur adipiscing <span class="list-year">({{$data['edutime1']}})</span></h5>
											<p>{{$data['edu1']}}</p><!--EDUCATION LIST DETAILS-->
										</div>
									</li>

									<li>
									
										<!--EDUCATION LIST ITEM-->
										<h4 class="title">{{$data['edut2']}}<i class="fa fa-sort-desc pull-right"></i></h4>
										
										<div class="list-content">
											<h5 class="title">Consectetur adipiscing <span class="list-year">({{$data['edutime2']}})</span></h5>
											<p>{{$data['edu2']}}</p><!--EDUCATION LIST DETAILS-->
										</div>
									</li>
									
									<li>
									
										<!--EDUCATION LIST ITEM-->
										<h4 class="title">{{$data['edut3']}}<i class="fa fa-sort-desc pull-right"></i></h4>
										
										<div class="list-content">
											<h5 class="title">Consectetur adipiscing <span class="list-year">({{$data['edutime3']}})</span></h5>
											<p>{{$data['edu3']}}</p><!--EDUCATION LIST DETAILS-->
										</div>
									</li>
									
									
								</ul>
							</div><!--RESUME SECOND TAB/EDUCATION TAB DETAILS ENDS-->
							<!--RESUME THIRD TAB/EMPLYMENT TAB DETAILS ENDS-->
							<div id='tab-3'>
								<h3 class="title">工作经历</h3>
								<ul class="employment-class tab-cont">
									<li>
										<!--EMPLOYMENT INDIVIDUAL LIST-->
										<h4>{{$w['workzhiwei1']}}<span class="year">{{$w['worktime1']}}</span></h4>
										<h5>Consectetur adipiscing</h5>
										<p>{{$w['workcontent1']}}</p><!--EMPLOYMENT LIST DETAILS-->
									</li>
									<li>
										<!--EMPLOYMENT INDIVIDUAL LIST-->
										<h4>{{$w['workzhiwei2']}}<span class="year">{{$w['worktime2']}}</span></h4>
										<h5>Consectetur adipiscing</h5>
										<p>{{$w['workcontent2']}}</p><!--EMPLOYMENT LIST DETAILS-->
									</li>
									<li>
										<!--EMPLOYMENT INDIVIDUAL LIST-->
										<h4>{{$w['workzhiwei3']}}<span class="year">{{$w['worktime3']}}</span></h4>
										<h5>Consectetur adipiscing</h5>
										<p>{{$w['workcontent3']}}</p><!--EMPLOYMENT LIST DETAILS-->
									</li>
								</ul>
							</div><!--RESUME THIRD TAB/EMPLYMENT TAB DETAILS ENDS-->
						</div>
					</div>
				</li>
				<!--/#resume-->
				<!--PORTFOLIO PAGE-->
				<li id="portfolio" class="hidden">
					<div class="title-container">
						<div class="shadow-img"></div>
						<h2 class="rotate-out rotated">作品</h2> <!--PORTFOLIO TITLE-->                         
					</div>

					<!--PORTFOLIO CATEGORY LIST-->    
					<div class="abs-child">
						<ul class="button-group filters-button-group">
							<li class="button is-checked" data-filter="*">显示所有</li>
							<li class="button" data-filter=".photography">摄影</li>
							<li class="button" data-filter=".commercial">广告</li>
							<li class="button" data-filter=".potrait">肖像</li>
						</ul><!--/.button-group filters-button-group-->
					</div>
					
					<div class ="sec-porfolio description"> 
						<div class="row">
							<!--PORTFOLIO ITEM CONTAINER-->
							<div class="folio-container">
								<ul class="folio-item"><!--PORTFOLIO INDIVIDAUAL ITEM-->
									<li class="view view-first photography">  
										<img src="/yangshi/gerenjianli/images/folio/logs.jpg" alt="logs" /><!--PORTFOLIO INDIVIDAUAL ITEM IMAGE--> 
										<div class="mask">  
											 <h2>守护者</h2> <!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                               
											<!-- Button trigger modal -->
											<a role="button" class="info" data-toggle="modal" data-target="#myModal">了解更多</a><!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'-->
										 </div>  
									</li>  
									<li class="view view-second commercial"><!--PORTFOLIO INDIVIDAUAL ITEM-->
									  <img src="/yangshi/gerenjianli/images/folio/book.jpg" alt="book" /><!--PORTFOLIO INDIVIDAUAL ITEM IMAGE--> 
										<div class="mask"></div>
										<div class="content">
											<h2>飞舞</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                                  
											<a role="button" class="info" data-toggle="modal" data-target="#myModal2">了解更多</a><!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'-->
										</div>
									</li>
									<li class="view view-tenth photography"> <!--PORTFOLIO INDIVIDAUAL ITEM--> 
										 <img src="/yangshi/gerenjianli/images/folio/beach.jpg" alt="beach" /> <!--PORTFOLIO INDIVIDAUAL ITEM IMAGE-->  
										 <div class="mask">  
											 <h2>纽约</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                                    
											 <a role="button" class="info" data-toggle="modal" data-target="#myModal5">了解更多</a>  <!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'-->
										 </div>  
									</li>                         
									<li class="view view-second commercial"><!--PORTFOLIO INDIVIDAUAL ITEM-->
									  <img src="/yangshi/gerenjianli/images/folio/guy.jpg" alt="guy" /><!--PORTFOLIO INDIVIDAUAL ITEM IMAGE--> 
										<div class="mask"></div>
										<div class="content">
											<h2>图片名称</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                                 
											<a role="button" class="info" data-toggle="modal" data-target="#myModal3">了解更多</a><!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'-->
										</div>
									</li> 
												
									<li class="view view-first potrait"><!--PORTFOLIO INDIVIDAUAL ITEM-->  
										 <img src="/yangshi/gerenjianli/images/folio/illustration.jpg" alt="illustration" /><!--PORTFOLIO INDIVIDAUAL ITEM IMAGE-->   
										 <div class="mask">  
											 <h2>纽约</h2>                                   
											 <a role="button" class="info" data-toggle="modal" data-target="#myModal4">了解更多</a> <!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'--> 
										 </div>  
									</li>                         
									<li class="view view-second photography"><!--PORTFOLIO INDIVIDAUAL ITEM-->
									  <img src="/yangshi/gerenjianli/images/folio/guy.jpg" alt="guy" /><!--PORTFOLIO INDIVIDAUAL ITEM IMAGE--> 
										<div class="mask"></div>
										<div class="content">
											<h2>图片名称</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                                 
											<a role="button" class="info" data-toggle="modal" data-target="#myModal3">了解更多</a><!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'-->
										</div>
									</li> 
									<li class="view view-tenth potrait"> <!--PORTFOLIO INDIVIDAUAL ITEM--> 
										<img src="/yangshi/gerenjianli/images/folio/logs.jpg" alt="logs" /> <!--PORTFOLIO INDIVIDAUAL ITEM IMAGE-->  
										<div class="mask">  
											 <h2>守护者</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                            
											 <a role="button" class="info" data-toggle="modal" data-target="#myModal">了解更多</a> <!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'--> 
										 </div>  
									</li>   
									
									<li class="view view-tenth commercial"><!--PORTFOLIO INDIVIDAUAL ITEM-->  
										 <img src="/yangshi/gerenjianli/images/folio/beach.jpg" alt="beach" /> <!--PORTFOLIO INDIVIDAUAL ITEM IMAGE-->  
										 <div class="mask">  
											 <h2>纽约</h2><!--PORTFOLIO INDIVIDAUAL ITEM TITLE-->                                    
											 <a role="button" class="info" data-toggle="modal" data-target="#myModal5">了解更多</a> <!--PORTFOLIO INDIVIDAUAL ITEM MODAL LINK BY 'data-target'--> 
										 </div>  
									</li>             
																							
											  
								</ul>
							</div>
							<!--PORTFOLIO ITEM CONTAINER ENDS-->
						</div>                          
					</div>
				</li><!--/#portfolio-->

				<!--CONTACT PAGE-->
				<li id="contact" class="hidden">
					<div class="title-container" >
						<div class="shadow-img"></div>               
					   <h2 class="rotate-out rotated">联系我</h2><!--CONTACT PAGE TITLE-->
					</div>
					<div class="description">                           
						<div class="row">
							<div class="col-sm-12">
								<div class="map-container">
									<div id="map" style="width:100%;height:325px;"></div><!--GOOGLE MAP-->
								</div>
							</div>

							<div class="col-sm-5">
								<!--CONTACT DESCRIPTION-->
								<h3 class="title">联系信息</h3>
								<h6 class="sm-title"><span class="address-icon"><i class="fa fa-map-marker"></i></span>{{session('dizhi')}}</h6>
								<h6 class="sm-title"><span class="address-icon"><i class="fa fa-phone"></i></span>{{session('tel')}}</h6>
								<h6 class="sm-title"><span class="address-icon"><i class="fa fa-qq"></i></span>{{session('qq')}}</h6>
								<h6 class="sm-title"><span class="address-icon"><i class="fa fa-envelope"></i></span>{{session('mail')}}</h6>
								<!--/CONTACT DESCRIPTION ENDS-->
							</div>
							<div class="col-sm-7">

								<div class="mail-container">
									<div class="cnmail result">
										<div class="msg success-msg"><i class="icon svg-check"><!--?xml version="1.0" encoding="utf-8"?-->  
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							        	<span aria-hidden="true" style="display:none">×</span></button></i>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							        	<span aria-hidden="true">×</span></button>
										<span> 你的电子邮件已经被存储了！</span></div>

										<div class="msg error-msg"><i class="icon svg-close-circle"><!--?xml version="1.0" encoding="utf-8"?-->
										
										  
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							        <span aria-hidden="true" style="display:none">×</span></button></i>
							        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							        <span aria-hidden="true">×</span></button>
							        <span>
										 信息输入有误呦！！</span></div>
									</div>
									<h3 class="title invert">Don't Forget To Mail Me</h3>
									<!--CONTACT FORM-->
									<form action="sendmail.php" class="form-horizontal" id="contact-form">
										<div class="form-group">
											<input name="name" class="form-control required" placeholder="Name" data-placement="top" type="text">
										</div>                                    
										<div class="form-group">
											<input name="email" class="form-control email" placeholder="Email" type="text">
										</div>                   
										<div class="form-group">
											<textarea name="message" class="form-control" placeholder="Message" rows="3"></textarea>
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-success">发送</button>
										</div>

									</form><!--/#contact-form-->
								</div>                      
								
							</div>                          
							
						</div>
					</div>
				</li><!--/#contact-->
			</ul> 

			<div class="row mobile-nav-container">
				<!--SOCIAL NAV FOR MOBILE-->
				<ul class="mobile-social no-padding">
					<li>与我联系</li>
					<li><a href=""><i class="fa fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus"></i></a></li>
					<li><a href=""><i class="fa fa-youtube"></i></a></li>
					<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
					<li><a href=""><i class="fa fa-linkedin"></i></a></li>
				</ul><!--/.mobile-social-->
			</div>               
		</div><!--/.page-segment -->
		<!--  <h6 class="copyright-text">Copyright © 2015 John Doe</h6> --> <!--if anyone wants copyright Texts--> 
	</div>
</div><!--/.container -->

<!--PORTFOLIO IMAGE MODAL LIST-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">详情</h4><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<img src="/yangshi/gerenjianli/images/folio/logs.jpg" class="img-responsive" alt="modal-image"><!--PORTFOLIO MODAL IMAGE-->
			</div>
			<div class="modal-footer">
				<div class="mf-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis temporibus fuga sit explicabo blanditiis voluptate iste vero quia impedit? Iusto illo voluptas est praesentium veritatis magni, pariatur laboriosam voluptatem inventore.</p>
				</div>                      
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel2">详情</h4><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<img src="/yangshi/gerenjianli/images/folio/book.jpg" class="img-responsive" alt="modal-image"><!--PORTFOLIO MODAL IMAGE-->
			</div>
			<div class="modal-footer">
				<div class="mf-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel sapiente, odit, illo saepe voluptate eos enim eius autem cumque ab, soluta dolor tempore inventore eligendi maxime voluptas pariatur explicabo blanditiis?</p>
				</div>                      
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel3" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel3">详情</h4><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<img src="/yangshi/gerenjianli/images/folio/guy.jpg" class="img-responsive" alt="modal-image"><!--PORTFOLIO MODAL IMAGE-->
			</div>
			<div class="modal-footer">
				<div class="mf-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ratione quae, alias at. Reprehenderit, ut quis corporis laudantium, laborum sed omnis qui perspiciatis explicabo. Ipsum culpa aspernatur dolorem. Amet, quis.</p>
				</div>                      
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel4" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel4">详情</h4><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<img src="/yangshi/gerenjianli/images/folio/illustration.jpg" class="img-responsive" alt="modal-image"><!--PORTFOLIO MODAL IMAGE-->
			</div>
			<div class="modal-footer">
				<div class="mf-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus ab id unde veniam error et iste ut aspernatur accusantium porro molestiae voluptatibus rem, tempore inventore ad minus soluta praesentium magni?</p>
				</div>                      
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel5" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel5">详情</h4><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<img src="/yangshi/gerenjianli/images/folio/beach.jpg" class="img-responsive" alt="modal-image"><!--PORTFOLIO MODAL IMAGE-->
			</div>
			<div class="modal-footer">
				<div class="mf-content">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam amet placeat porro, maxime corrupti laboriosam, quod nulla perferendis esse ipsa atque deleniti. Magni molestias, nemo illum eos, exercitationem neque incidunt.</p>
				</div>                      
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="subscribe_modal_1" tabindex="-1" role="dialog" aria-labelledby="subscribe_modal_1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h2 class="modal-title">Thank You</h2><!--PORTFOLIO IMAGE TITLE-->
			</div>
			<div class="modal-body">
				<div class="text-center mail-sucsess"><h3> <span>your mail has been sent</span></h3></div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--javascript files
=============================================================-->
<script type="text/javascript" src="/yangshi/gerenjianli/js/jQueryTween-aio-min.js"></script> <!-- JQUERY Tween Plugin -->
<script type="text/javascript" src="/yangshi/gerenjianli/js/jquery.tabslet.min.js"></script> <!-- JQUERY Tab plugin-->     
<script type="text/javascript" src="/yangshi/gerenjianli/js/progressbar.min.js"></script> <!-- JQUERY Progressbar Plugin-->
<script type="text/javascript" src="/yangshi/gerenjianli/js/jquery.simple-text-rotator.min.js"></script> <!-- JQUERY Text Rotator-->
<script type="text/javascript" src="/yangshi/gerenjianli/js/bootstrap.min.js"></script> <!-- Bootstrap file-->
<script src="http://ditu.google.cn/maps/api/js?key=AIzaSyBPNkCVoBW_Jzl6x-hgGU6e7QW1QMwKles"></script>
<script type="text/javascript" src='/yangshi/gerenjianli/js/isotope.pkgd.min.js'></script>
<script type="text/javascript" src="/yangshi/gerenjianli/js/custom.js"></script>
<script src="/yangshi/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script src="/yangshi/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
