<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>jQuery One Page Scroll by Pete R. | The Pete Design</title>
	<!-- <meta name="title" content="jQuery One Page Scroll by Pete R. | The Pete Design" />
	<meta name="description" content="Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin" />
	<link rel="image_src" href="/images/notify_better_image.png" />
 -->
<!-- 	<meta content="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" property="og:url" />
	<meta content="http://www.thepetedesign.com/images/onepage_scroll_image.png" property="og:image" />
	<link rel="shortcut icon" id="favicon" href="favicon.png"> 
	<meta name="author" content="Pete R.">
	<link rel="canonical" href="http://www.thepetedesign.com/demos/onepage_scroll_demo.html" />
 -->	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico:400' rel='stylesheet' type='text/css'> -->
	<!-- // <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script> -->
  <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>
  
  <link rel='stylesheet' type='text/css' href='css/onepage-scroll.css'>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  
	<script>
	  $(document).ready(function(){
      $(".main").onepage_scroll({
        sectionContainer: "section",
        responsiveFallback: 600,
        loop: true
      });
		});
		
	</script>
  
</head>
<body>
  <?php include 'header.php'; ?>
  
  <div class="wrapper">
	  <div class="main">
	    
      <section class="page1">
        <div id="firstPageImage" class="bg" display="relative">
          <div class="slogan center">
            <h2>一起来拼车</h2>
            <p>试试吧</p>
            <div class="heightBlank"></div>
            <a href="search.php" class="slogan-link center">开始使用</a>
          </div>
        </div> <!-- <div class="page_container">
          <h1>One Page Scroll</h1>
          <h2>Create an Apple-like one page scroller website (iPhone 5S website) with One Page Scroll plugin</h2>
          <p class="credit">Created by <a href="http://www.thepetedesign.com">Pete R.</a>, Founder of <a href="http://www.bucketlistly.com" target="_blank">BucketListly</a></p>
          <div class="btns">
  	        <a class="reload btn" href="https://github.com/peachananr/onepage-scroll">Download on Github</a>
  	      </div>
  	    </div>
  	    <img src="phones.png" alt="phones"> -->
      </section>
	    
	    <section class="page2">
	      <div class="container">
          <div class="content">
            <div class="wrap">
              <div class="top-grids">
                <div class="top-grid">
                  <div class="product-pic">
                    <img src="images/pub-search.jpg" title="pubsearch" alt="publish or search"/>
                  </div>
                  <span><label>1</label></span>
                  <div class="border"> </div>
                  <a href="search.php">发布/搜索拼车信息</a>
                </div>
                <div class="top-grid">
                  <div class="product-pic">
                    <img src="images/phone.jpg" title="phone" alt="contact the pcer"/>
                  </div>
                  <span><label>2</label></span>
                  <div class="border"> </div>
                  <a href="search.php">与拼友取得联系</a>
                </div>
                <div class="top-grid">
                  <div class="product-pic">
                    <img src="images/sharecar.jpg" title="sharecar" alt="share the car"/>
                  </div>
                  <span><label>3</label></span>
                  <a href="search.php">按计划出发</a>
                </div>
                <div class="clear"> </div>
              </div>
            </div>
            <div class="clear"> </div>
          </div>    
        </div><!-- <div class="page_container">
          <h1>Ready-to-use plugin</h1>
          <h2>All you need is an HTML markup, call the script and BAM!</h2>
          <code class="html">
  	        &lt;div class="main"&gt;<br>
  	          &lt;section&gt;...&lt;/section&gt;<br>
  	          &lt;section&gt;...&lt;/section&gt;<br>
  	          ...<br>
  	        &lt;/div&gt;
  	      </code>
  	      
  	      <code class="js">
	          $(".main").onepage_scroll();
	        </code>
	      </div> -->
      </section>
	    
	    <section class="page3">
	      <?php //include "footer.php"; ?>
        
      </section>
    </div>
<!--     <a class="back" href="http://www.thepetedesign.com/#design">Back to The Pete Design</a>
    <a href="https://github.com/peachananr/onepage-scroll"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png" alt="Fork me on GitHub"></a>
 -->  </div>

      
  
</body>
</html>