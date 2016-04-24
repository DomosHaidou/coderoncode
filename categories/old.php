
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <!-- (1) Optimize for mobile versions: http://goo.gl/EOpFl -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- (1) force latest IE rendering engine: bit.ly/1c8EiC9 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>About</title>
  <meta name="description" content="Random ramblings about code, programming, and technology
" />

  <meta name="HandheldFriendly" content="True" />
  <meta name="MobileOptimized" content="320" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

  <link rel="canonical" href="http://coderoncode.com//about/">

  <link rel="shortcut icon" href="/assets/images/favicon.ico">
<!--  <link rel="stylesheet" href=""> -->
  <link rel="stylesheet" href="http://brick.a.ssl.fastly.net/Linux+Libertine:400,400i,700,700i/Open+Sans:400,400i,700,700i">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/assets/grids.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/assets/custom.css" />
  <link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />
</head>

  <body itemscope itemtype="http://schema.org/Article">
    <!-- header start -->


<div class="navigation">
  <nav class="navTabs navTabs--metabar navTabs--narrow">
    <a href="http://coderoncode.com/" class="logo-readium"><span class="logo" style="background-image: url(/assets/images/cc_logo.png)"></span></a>
    <ul class="navTabs-list layoutSingleColumn">
      <li class="navTabs-item"><a class="navTabs-anchor" href="/categories/">Categories</a></li>
      <li class="navTabs-item"><a class="navTabs-anchor" href="/books/">Books</a></li>
      <li class="navTabs-item"><a class="navTabs-anchor" href="/about">About Me</a></li>
    </ul>
  </nav>
</div>
<!-- header end -->

    <main class="content" role="main">
      <h1>Category List:</h1>

      <?php
        $dir    = '/srv/www/coderoncode.com/public_html/categories/';
        $directoryList = scandir($dir);
      ?>
    <?php foreach($directoryList as $category): ?>
    	<?php if(is_dir($category) && !in_array($category, array('.','..'))): ?>
    	   <article class="post">
            <div class="article-item">
              <header class="post-header">
                <h2 class="post-title" itemprop="name"><a href="/categories/<?php echo $category ?>" itemprop="url"><?php echo strtoupper($category) ?></a></h2>
              </header>
            </div>
          </article>
    	<?php endif; ?>
    <?php endforeach; ?>
    </main>
    <div class="bottom-closer">
      <div class="background-closer-image"  style="background-image: url(/assets/images/header-compressor.jpg)">
        Image
      </div>
      <div class="inner">
        <h1 class="blog-title">CoderOnCode</h1>
        <h2 class="blog-description">Random ramblings about code, programming, and technology
</h2>
        <a href="/" class="btn">Back to Overview</a>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="/assets/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="/assets/js/index.js"></script>
<script type="text/javascript" src="/assets/js/readingTime.min.js"></script>
<script>
(function ($) {
  "use strict";
  $(document).ready(function(){

    var $window = $(window),
    $image = $('.post-image-image, .teaserimage-image');

    $window.on('focus', function(){
      $window.on('scroll', function() {
        var top = $window.scrollTop();

        if (top < 0 || top > 1500) { return; }
        $image
          .css('transform', 'translate3d(0px, '+top/3+'px, 0px)')
          .css('opacity', 1-Math.max(top/700, 0));
      });
      $window.trigger('scroll');

      var height = $('.article-image').height();
      $('.post-content').css('padding-top', height + 'px');

      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({ scrollTop: target.offset().top }, 500);
            return false;
          }
        }
      });
    });

  });
}(jQuery));
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-28450068-1', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>
