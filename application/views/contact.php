<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>王建的个人网站</title>
   
	<link rel="stylesheet" href="assets/css/default.css">
	<link rel="stylesheet" href="assets/css/layout.css">
   <link rel="stylesheet" href="assets/css/media-queries.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <base href="<?php echo site_url();?>">
</head>
<body>
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
                  <iframe src="map.html" width="600" height="300" frameborder="0" scrolling="no"></iframe>
               </div>

               

            </aside>

      </div>

   </section>
    <script src="js/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>
</body>
</html>