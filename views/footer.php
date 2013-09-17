<div id="footer_wrapper">
  <div id="container">
    <div id="footer">
      <a href="/"><img src="http://sight-management.com/assets/32/direbottom.png"  alt='Footer image' /></a>
    </div>
  </div>
</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
  <script type="text/javascript" src="http://sight-management.com/js/modelbox.js?1361175150"></script>
    <link rel="stylesheet" type="text/css" href="http://sight-management.com/css/jquery-fancybox.css?1322046062" />
  <script type="text/javascript" src="http://sight-management.com/js/jquery-fancybox-pack.js?1322045016"></script>
  <script type="text/javascript">
  var fancy_box_image_url = "<div><strong>'title' attribute required</strong></div>";
  if(fancy_box_image_url.match(/\/assets\/[0-9]+/)) {
    $(document).ready(function() {
      $.fancybox.open(fancy_box_image_url);
      setTimeout(function() { $.fancybox.close() }, 10000);
    });
  }
</script>
  <script type="text/javascript" src="http://sight-management.com/js/jquery-cycle-all-latest.js"></script>
  <script type="text/javascript">
     $(document).ready(function() {
        $("#frameBox").contents().find("a").css("background-color","#BADA55");
        $('#promo').cycle({
    		fx: 'fade',
                speed: 1000,
                width: 993
    	});
    $("#promo").append('<img src="http://sight-management.com/assets/129/black.jpg" class="promo_black">');
   $("#sidebar").append('<img src="http://sight-management.com/assets/130/capaVideo.png" class="capaVideo">');
    });
  </script>
  <script type="text/javascript">swfobject.registerObject("catwalk", "9");</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="<?php echo URL;?>public/js/custom.js"></script>
    <script src="<?php echo URL;?>public/js/mobile.js"></script>
<?php
    if (isset($this->js)) 
        foreach ($this->js as $js)
            echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
?>
</body>
</html>