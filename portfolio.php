<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog - Portfolio</title>
<meta name="keywords" content="clean, portfolio, blog template, html css layout" />
<meta name="description" content="Clean Blog - Portfolio Page in 2-column style" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>
<body>
<?
@mysql_connect("localhost", "root","");
mysql_select_db("cleanblog");
?>
<div id="templatemo_wrapper">

    <div id="templatemo_menu">
        <?
        $header = mysql_query("SELECT * FROM header");
        ?>         
        <ul>
            <?while($row = mysql_fetch_assoc($header)){?>
                <li><a href="<?=$row['link']?>" ><?=$row['name']?></a></li>
            <?}?>          
        </ul>   
    
    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->  
        
        <div id="templatemo_sidebar">
    	
            <div id="templatemo_rss">
            
                <a href="#">SUBSCRIBE NOW <br /><span>to our rss feed</span></a>
                
            </div>
            
            <h4>Categories</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com/page/1" target="_parent">Curabitur sed</a></li>
                <li><a href="http://www.templatemo.com/page/2" target="_parent">Praesent adipiscing</a></li>
                <li><a href="http://www.templatemo.com/page/3" target="_parent">Duis sed justo</a></li>
                <li><a href="http://www.templatemo.com/page/4" target="_parent">Mauris vulputate</a></li>
                <li><a href="#">Nam auctor</a></li>
                <li><a href="#">Aliquam quam</a></li>
            </ul>
            
            <div class="cleaner_h40"></div>
            
            <h4>Friends</h4>
            <ul class="templatemo_list">
                <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                <li><a href="http://www.flashmo.com/store" target="_parent">Premium Themes</a></li>
                <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                <li><a href="http://www.koflash.com" target="_parent">Flash Web Gallery</a></li>
                <li><a href="#">Curabitur sed lacinia</a></li>
                <li><a href="#">Vestibulum laoreet tincidunt</a></li>
                <li><a href="#">Nullam nec mi enim</a></li>
                <li><a href="#">Aliquam quam nulla</a></li>
                <li><a href="#">Curabitur non felis massa</a></li>
            </ul>
            
        </div> <!-- end of templatemo_sidebar --> 
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
        
            <h2>Portfolio of Web Templates</h2>
            <div id="gallery">
                <ul>
                
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_01_b.jpg" class="pirobox" title="Project 1"><img src="images/gallery/image_01.jpg" alt="1" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 1</h5>
                            <p>Integer sed nisi sapien, ut gravida mauris. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_02_b.jpg" class="pirobox" title="Project 2"><img src="images/gallery/image_02.jpg" alt="2" /></a>
                        </div>
                        <div class="right">
                          <h5>Project 2</h5>
                          <p>Mauris risus magna, blandit ac suscipit at, tristique id erat.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_03_b.jpg" class="pirobox" title="Project 3"><img src="images/gallery/image_03.jpg" alt="3" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 3</h5>
                          <p>Etiam eu ipsum a arcu sodales consequat sit amet at orci. Nulla in luctus elit.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                      </div>
                         <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_04_b.jpg" class="pirobox" title="Project 4"><img src="images/gallery/image_04.jpg" alt="4" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 4</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_05_b.jpg" class="pirobox" title="Project 5"><img src="images/gallery/image_05.jpg" alt="5" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 5</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                    
                    <li>
                        <div class="left">
                            <a href="images/gallery/image_06_b.jpg" class="pirobox" title="Project 6"><img src="images/gallery/image_06.jpg" alt="6" /></a>
                        </div>
                        <div class="right">
                            <h5>Project 6</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <div class="button"><a href="#">Visit site</a></div>
                        </div>
                        <div class="cleaner"></div>
                    </li>
                </ul>
            
            </div>
        
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div>  <!-- end of right column -->
    
  	<div class="cleaner_h20"></div>
  
    <div id="templatemo_footer">
    
		Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->

</body>
</html>