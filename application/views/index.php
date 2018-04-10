<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>王建的个人网站</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
    <base href="<?php echo site_url();?>">
   <link rel="stylesheet" href="assets/css/default.css">
	<link rel="stylesheet" href="assets/css/layout.css">
   <link rel="stylesheet" href="assets/css/media-queries.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="assets/js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="assets/favicon.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <!-- <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a> -->

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">我的资料</a></li>
	         <li><a class="smoothscroll" href="#resume">掌握技能</a></li>
            <li><a class="smoothscroll" href="#portfolio">我的作品</a></li>
            <li><a class="smoothscroll" href="#testimonials">我的简历</a></li>
            <li><a class="smoothscroll" href="#contact">联系我吧</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <div class="image">
              <img src="assets/images/1.jpg.png" alt="">
            </div>
           <ul class="slides">

                     <li>
                        王建
                     </li> 

                      <li>
                        web开发工程师
                     </li> 

                  </ul>
            <ul class="social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="assets/images/1.jpg.png" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>关于我</h2>

            <p>本人是黑龙江工程学院的一名应届毕业生，在校期间，多次参加学校活动，学习积极认真。因为没有人反对，不喜欢，或避免快感本身，因为它是乐趣。大学期间专业主修计算机科学与技术，接触到前端知识之后更是乐在其中，我个人觉得写代码就是一种乐趣，沉迷其中认真研讨。通过将自己写的代码以页面的方式呈现给用户我觉得就是一种享受，我相信我也努力可以成为一名优秀的前端工程师。
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>基本资料</h2>
                  <p class="address">
						   <span>姓名：王建</span><br>
               <span>生日：1996.2.18</span><br>
						   <span>地址：黑龙江省哈尔滨市道外区999号
                     </span><br>
						   <span>电话：18846799149</span><br>
                     <span>邮箱：805106522@qq.com</span><br>
                     <span>github:github.com/jian1208</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-download"></i>下载简历</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

    
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>技能</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>因为没有人反对，不喜欢，或避免快感本身，因为它是乐趣，而是因为他们不知道如何追求快乐合理遇到的那些谁的悲哀后果。
            </p>

				<div class="bars">

				   <ul class="skills">
					   <li><span class="bar-expand html">95%</span><em>HTML5</em></li>
                  <li><span class="bar-expand css">92%</span><em>CSS</em></li>
						<li><span class="bar-expand javascript">90%</span><em>Javascript</em></li>
						<li><span class="bar-expand vue">80%</span><em>Vue.js</em></li>
						<li><span class="bar-expand php">60%</span><em>PHP</em></li>
                  <li><span class="bar-expand jquery">82%</span><em>jQuery</em></li>
                  <li><span class="bar-expand require">88%</span><em>Require.js</em></li>
					</ul>

				</div><!-- end skill-bars -->


			</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->

	

   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>展示一下我的作品</h1>

            <!-- portfolio-wrapper -->
            <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">

          	   <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-01" title="">
                        <img alt="" src="assets/images/portfolio/coffee.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>照片墙展示</h5>
                              <p>旋转的照片墙</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-02" title="">
                        <img alt="" src="assets/images/portfolio/console.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>旋转木马</h5>
                              <p>旋转木马展示</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-03" title="">
                        <img alt="" src="assets/images/portfolio/judah.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>css3动画</h5>
                              <p>旋转的立方体</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               <div class="columns portfolio-item">
                  <div class="item-wrap">

                     <a href="#modal-04" title="">
                        <img alt="" src="assets/images/portfolio/into-the-light.jpg">
                        <div class="overlay">
                           <div class="portfolio-item-meta">
          					      <h5>网上商城</h5>
                              <p>基于购物的线上商城</p>
          					   </div>
                        </div>
                        <div class="link-icon"><i class="icon-plus"></i></div>
                     </a>

                  </div>
          		</div> <!-- item end -->

               

            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


        

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="assets/images/portfolio/modals/m-coffee.jpg" alt="" />

		      <div class="description-box">
			      <h4>Coffee Cup</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Webdesign</span>
		      </div>

            <div class="link-box">
               <a href="<?php echo site_url('user/picture');?>">打开</a>
		         <a class="popup-modal-dismiss">关闭</a>
            </div>

	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="assets/images/portfolio/modals/m-console.jpg" alt="" />

		      <div class="description-box">
			      <h4>Console</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding, Web Development</span>
		      </div>

            <div class="link-box">
               <a href="<?php echo site_url('user/xuan');?>">打开</a>
		         <a class="popup-modal-dismiss">关闭</a>
            </div>

	      </div><!-- modal-02 End -->

         <div id="modal-03" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="assets/images/portfolio/modals/m-judah.jpg" alt="" />

		      <div class="description-box">
			      <h4>Judah</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Branding</span>
		      </div>

            <div class="link-box">
               <a href="<?php echo site_url('user/lifang');?>">打开</a>
		         <a class="popup-modal-dismiss">关闭</a>
            </div>

	      </div><!-- modal-03 End -->

         <div id="modal-04" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="assets/images/portfolio/modals/m-intothelight.jpg" alt="" />

		      <div class="description-box">
			      <h4>Into the Light</h4>
			      <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
               <span class="categories"><i class="fa fa-tag"></i>Photography</span>
		      </div>

            <div class="link-box">
               <a href="<?php echo site_url('user/shop');?>">打开</a>
		         <a class="popup-modal-dismiss">关闭</a>
            </div>

	      </div><!-- modal-04 End -->

         


      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->


  
   <section id="testimonials">
    <div class="resume">
      <h1>我的简历</h1>
      <div class="rum">
        <iframe class="rr" src="assets/img/王建.pdf" frameborder="0" width="800px" height="800px" scroll="no"></iframe>
      </div>
    
    
  </div>

      <!-- <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>Client Testimonials</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>你的工作将会占据生活中很大一部分，并获得真正满足的唯一方法就是做你相信是伟大的工作。而从事一份伟大工作的唯一途径就是热爱自己的事业。如果你还没找到这些事，继续找。不要停下。作为与心脏的所有问题，当你找到的时候你就会知道的。
                           </p>
                           <cite>Steve Jobs</cite>
                        </blockquote>
                     </li> 

                      <li>
                        <blockquote>
                           <p>在学校和生活中，工作的最重要的动力是工作中的乐趣，是工作获得结果时的乐趣以及对这个结果的社会价值的认识。
                           </p>
                           <cite>爱因斯坦</cite>
                        </blockquote>
                     </li> slide ends

                  </ul>

               </div> 

            </div> 

         </div> 

       </div>   -->

   </section>  -->
   
   <!-- <iframe src="img/王建.pdf" frameborder="0" width="100%" height="800px" scroll="no"></iframe> -->

   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">

               <h1><span>Get In Touch.</span></h1>

            </div>

            <div class="ten columns">

                  <p class="lead">过放荡不羁的生活，容易得像顺水推舟，但是要结实良朋益友却难如登天。
                  </p>

            </div>

         </div>

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <form action="" method="post" id="contactForm" name="contactForm">
					<fieldset>

                  <div>
						   <label for="contactName">姓名 <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div>

                  <div>
						   <label for="contactEmail">电子邮件 <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div>

                  <div>
						   <label for="contactSubject">学科</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div>

                  <div>
                     <label for="contactMessage">邮件 <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div>

                  <div>
                     <button class="submit">提交</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div>

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div>


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>地址和电话</h4>
					   <p class="address">
						   王建<br>
						   黑龙江省 <br>
						   哈尔滨市道外区999号<br>
						   <span>18846799149</span><br>
               <span>邮箱：805106522@qq.com</span><br>
               <span>github:github.com/jian1208</span><br>
               <span>个人网站：yy316.cn</span>

					   </p>

				   </div>
               <div class="map">
                  <h3>我的位置</h3>
                  <iframe src="<?php echo site_url('user/map');?>" width="600" height="300" frameborder="0" scrolling="no"></iframe>
               </div>

               

            </aside>

      </div>

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

            

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="assets/js/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="assets/js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>

   <script src="assets/js/jquery.flexslider.js"></script>
   <script src="assets/js/waypoints.js"></script>
   <script src="assets/js/jquery.fittext.js"></script>
   <script src="assets/js/magnific-popup.js"></script>
   <script src="assets/js/init.js"></script>

</body>

</html>