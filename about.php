<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>About Clean Blog</title>
<meta name="keywords" content="clean blog template, about page, html css layout" />
<meta name="description" content="Clean Blog Template is a W3C standards-compliant HTML-CSS layout by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?
@mysql_connect("localhost", "root","");
mysql_select_db("cleanblog");
?>
<div id="templatemo_wrapper">

	<div id="templatemo_menu">
                
        <ul>
            <li><a href="index.html">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="about.html" class="current">About Us</a></li>
            <li><a href="contact.html">Contact</a></li>
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
  
        <h2>About Us</h2>
            <p align="justify">Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent aliquam velit a magna sodales quis elementum ipsum auctor. Ut at metus leo, et dictum sem</p>
            
            <div class="cleaner_h30"></div>
        
            <div class="service_box">
                <h4>Lorem ipsum dolor sit amet</h4>
                
                <div class="left">
                    <a href="#"><img src="images/chart1.png" alt="chart 1" /></a>                </div>
          <div class="right">
                    <p align="justify">Curabitur ullamcorper neque et justo aliquet at pretium orci  scelerisque. Mauris sodales tristique dignissim. Phasellus ut augue  nibh. <a href="#">Aliquam vel libero</a> sit amet mauris posuere ullamcorper  sollicitudin ac eros. Vestibulum auctor euismod mi et tincidunt. </p>
                
              </div>
                <div class="cleaner"></div>
                	<ol>
                        <li>Fusce fringilla, dui sed blandit luctus, arcu augue pellentesque</li>
                  		<li>Sed fermentum arcu in enim euismod quis lobortis </li>
                        <li>Class aptent taciti sociosqu ad litora torquent </li>
                        <li>Praesent libero nisi, pellentesque in sagittis ac</li>
                        <li>Nunc eget erat urna. <a href="#">Sed ac ante lacus</a>, eu scelerisque urna</li>
           	  </ol>
                <div class="cleaner"></div>
            </div>
            
            <div class="service_box">
            
            <h4>Morbi sed nulla ac est cursus suscipit</h4>
            
                <div class="left">
                  <a href="#"><img src="images/chart2.png" alt="chart 2" /></a>                </div>
          		<div class="right">
                    <p align="justify">Phasellus diam orci, rhoncus sed condimentum et, sodales vel leo. Nunc  dignissim quam a nisi placerat gravida. Suspendisse potenti. <a href="#">Curabitur  suscipit lacus</a> vestibulum mi accumsan bibendum. Vivamus gravida, dui  eget tincidunt rutrum, ante justo malesuada lacus.</p>
                        
                    
              </div>
                <div class="cleaner"></div>
                	<ol>
                        <li>Praesent libero nisi, pellentesque in sagittis ac</li>
                        <li>Nunc eget erat urna. Sed ac ante lacus, eu scelerisque urna</li>                
						<li>Fusce fringilla, dui sed blandit luctus, <a href="#">arcu augue pellentesque</a></li>
               		  <li>Sed fermentum arcu in enim euismod quis lobortis </li>
                        <li>Class aptent taciti sociosqu ad litora torquent </li>
                 	</ol>
            </div>	
    	</div> <!-- end of main -->
 	<div class="cleaner"></div>
  </div> 
    <!-- end of right column -->
  <div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
    
		Copyright © 2048 <a href="#">Your Company Name</a> | 
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->

</body>
</html>