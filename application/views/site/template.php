
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $config[0]->site_title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/coin-slider.css'); ?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/cufon-yui.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/cufon-aller-bi.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.4.2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/script.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/coin-slider.min.js'); ?>"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="rss">
        <p><a href="#">Subscribe to</a> <a href="#"><img src="<?php echo base_url('assets/images/rss.gif'); ?>" width="16" height="16" alt="" /></a></p>
      </div>
      <div class="logo">
        <h1><a href="#"><?php echo $config[0]->site_title; ?></a></h1>
      <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> 
          <a href="#"><img src="<?php echo base_url('assets/images/slide1.jpg'); ?>" width="960" height="360" alt="" /><span><?php echo $config[0]->site_title; ?></span></a> 
          <a href="#"><img src="<?php echo base_url('assets/images/slide2.jpg'); ?>" width="960" height="360" alt="" /><span><?php echo $config[0]->site_tagline; ?></span></a> 
          <!-- <a href="#"><img src="<?php echo base_url('assets/images/slide3.jpg'); ?>" width="960" height="360" alt="" /><span>Lorem ipsum dolor sit amet, consectetng ipsum, in euismod velit fringilla vitae. Aliquam fermentum arcu et velit fringillaonec ut felis ipsum. Maecenas lacinia orci cursuslacus sodales in posuere risus gravida.</span></a>  -->
        </div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
      <div class="searchform">
        <form id="formsearch" name="formsearch" method="post" action="#">
          <span>
          <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" placeholder="search here" type="text" />
          </span>
          <input name="button_search" src="<?php echo base_url('assets/images/search.gif'); ?>" class="button_search" type="image" />
        </form>
      </div>
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="index.html"><span>Home</span></a></li>
          <li><a href="<?php echo site_url('copyright.html');?>"><span>Copyright</span></a></li>
          <li><a href="<?php echo site_url('privacy-policy.html');?>"><span>Privacy Policy</span></a></li>
          <li><a href="<?php echo site_url('terms-and-conditions');?>"><span>Terms and Conditions</span></a></li>
          <li><a href="<?php echo site_url('contact-us.html');?>"><span>Contact Us</span></a></li>
          <li><a href="<?php echo site_url('sitemap.xml');?>"><span>Sitemap</span></a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <?php foreach($latest_post as $posts) {?>
        <div class="article">
          <!-- <h2><?php echo $posts->post_title; ?></h2> -->
          <!-- <p class="infopost">Posted <span class="date">on <?php echo $posts->post_datetime; ?></span> by <a href="#"><?php echo $posts->post_writer; ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; </p> -->
          <!-- <div class="clr"></div> -->
          <div class="img"><img src="<?php echo $posts->post_thumb_image; ?>" width="179" height="200" alt="" class="fl" /></div>
          <div class="post_content">
            <p>
            <h2><?php echo $posts->post_title; ?></h2>
            <p class="infopost">Posted <span class="date">on <?php echo $posts->post_datetime; ?></span> by <a href="#"><?php echo $posts->post_writer; ?></a> &nbsp;&nbsp;|&nbsp;&nbsp; </p> 
            <div class="clr"></div>
            <?php
            $echo = str_split($posts->post_content,150); 
            echo $echo[0]; 
            ?>
            </p>
            <p class="spec"><a href="<?php echo "/result/".$posts->post_slug; ?>" class="rm">Read more...</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <?php } ?>
        <!-- <p class="pages"><small>Page 1 of 2 &nbsp;&nbsp;&nbsp;</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p> -->
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.html"><span>Home</span></a></li>
            <li><a href="<?php echo site_url('copyright.html');?>"><span>Copyright</span></a></li>
            <li><a href="<?php echo site_url('privacy-policy.html');?>"><span>Privacy Policy</span></a></li>
            <li><a href="<?php echo site_url('terms-and-conditions');?>"><span>Terms and Conditions</span></a></li>
            <li><a href="<?php echo site_url('contact-us.html');?>"><span>Contact Us</span></a></li>
            <li><a href="<?php echo site_url('sitemap.xml');?>"><span>Sitemap</span></a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Latest Post</span></h2>
          <div class="clr"></div>
          <ul class="ex_menu">
          <?php foreach($latest_post as $posts) {?>
            <li>
              <a href="<?php echo "/result/".$posts->post_slug; ?>"><?php echo $posts->post_title ?></a>
              <br /><?php echo $posts->post_datetime ?>
            </li>
          <?php } ?>
            <li><a href="#">Lorem ipsum dolor</a><br />
              Donec libero. Suspendisse bibendum</li>
            <li><a href="#">Dui pede condimentum</a><br />
              Phasellus suscipit, leo a pharetra</li>
            <li><a href="#">Condimentum lorem</a><br />
              Tellus eleifend magna eget</li>
            <li><a href="#">Fringilla velit magna</a><br />
              Curabitur vel urna in tristique</li>
            <li><a href="#">Suspendisse bibendum</a><br />
              Cras id urna orbi tincidunt orci ac</li>
            <li><a href="#">Donec mattis</a><br />
              purus nec placerat bibendum</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Image</span> Gallery</h2>
        <a href="#"><img src="<?php echo base_url('assets/images/gal1.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url('assets/images/gal2.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url('assets/images/gal3.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url('assets/images/gal4.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url('assets/images/gal5.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> <a href="#"><img src="<?php echo base_url('assets/images/gal6.jpg'); ?>" width="75" height="75" alt="" class="gal" /></a> </div>
      <div class="col c2">
        <h2><span>Services</span> Overview</h2>
        <p>Curabitur sed urna id nunc pulvinar semper. Nunc sit amet tortor sit amet lacus sagittis posuere cursus vitae nunc.Etiam venenatis, turpis at eleifend porta, nisl nulla bibendum justo.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Nullam quam lorem, tristique non vestibulum nec, consectetur in risus. Aliquam a quam vel leo gravida gravida eu porttitor dui.</p>
        <p class="contact_info"> <span>Address:</span> 1458 TemplateAccess, USA<br />
          <span>Telephone:</span> +123-1234-5678<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">Domain Name</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="http://www.dreamtemplate.com/">DreamTemplate</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>
