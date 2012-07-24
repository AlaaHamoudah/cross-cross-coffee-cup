<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!-- Consider specifying the language of your content by adding the `lang` attribute to <html> -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <?php
        include 'elements/head.html';
    ?>
    <script src="js/jquery.infieldlabel.min.js" type="text/javascript"></script>
</head>

<body>
    <?php
        include 'elements/header.html';
    ?>

    <div class="wrapper mug">

        <div id="personnals" class="clearfix">
            <span id="enter_twt"><label for="twitter">twitter</label><input type="text" name="twitter" value=""
  id="twitter" /></span>
            <span id="enter_name"><label for="name">name</label><input type="text" name="name" value=""
  id="name" /></span>
        </div>

        <!-- LET'S GO RAPHAEL ! -->        
        <div id="raphael_container">
            <img style="display:none" id="sticky" src="img/the_sticky.png" alt="">
            <div id="raphael"></div><!-- DIS HAS TO BE EMPTY : CANVG DOESN'T LIKE CONTENT : PARSE ERROR FUCK YEAH-->
            <div id="edit">
                <a id="colors" href="#_">Invert colors</a>
                <a id="tools" href="#_">Show/Hide tools</a>
            </div>
        </div>


        <div class="cta_container">
            <div>
                <a href="#_" class="cta" id="vector">I want it<span>(I need it !!!!1!!1!)</span></a>
            </div>
        </div>
        <div class="push_gallery">
            <a href="gallery.php">Visit teh gallery</a>
            <img src="img/the_gallery.png" alt="">
        </div>           
    </div>
    <footer>
        <?php
            include 'elements/footer.html';
        ?>


        <!-- ONLY FOR CREATING A MUG : INDEX.HTML -->
        <!-- RAPHAEL -->
        <script type="text/javascript" src="js/creation/raphael-min.js" charset="utf-8" ></script>
        <script type="text/javascript" src="js/creation/raphael.free_transform.js" charset="utf-8" ></script>
        
        <!--  -->
        <script type="text/javascript" src="js/creation/raphael.serialize.js" charset="utf-8" ></script>
        
        <!--CANVG-->
        <script type="text/javascript" src="js/creation/rgbcolor.js"></script> 
        <script type="text/javascript" src="js/creation/canvg.js"></script>
        <!-- -->

        <!--canvas2image-->
        <script type="text/javascript" src="js/creation/canvas2image.js"></script> 
        <script type="text/javascript" src="js/creation/base64.js"></script>

        <script src="js/creation/init.js"></script>
    

    </footer>
        <!-- for the curious guyz -->
        <div id="process">
            <div class="canvas_wrapper">
                <canvas id="canvas_normal_raw" style="border:1px dashed #FF0064;" width="1020" height="461"></canvas>
                <div class="legende">canvas_normal_raw</div>
            </div>
            
            <div class="canvas_wrapper">
                <canvas id="canvas_normal_crop" style="border:1px dashed #FF0064;" width="1020" height="461"></canvas>
                <div class="legende">canvas_normal_crop</div>
            </div>
        </div>


</body>
</html>
