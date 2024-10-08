<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>    
    <title>30 FPS vs. 60 FPS Real game comparison</title>    
    <meta name="keywords" content="30fps,60ps,fps,frames,per,second,frames per scond,30 vs 60,xbox,playstation,pc,pc master race" />
    <link href="style.css" rel="stylesheet" type="text/css" />    
    <?php if(!$is_mobile): ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>    
        <script src="script.js"></script>
    <?php endif; ?>
</head>
<body class="stretch">
        
    <div id="preloader">
        <h1>30fps vs 60fps comparison</h1>   
        <?php if($is_mobile): ?> 
            <p style="color:red;">
                We are really sorry, but this little piece of code was not put together with a view to be tested on ANY mobile devices. 
                Their specification are limited to 30 fps browser cap.
                <br/><br/>
                Please try again from your desktop computer or laptop.
            </p>
        <?php else: ?>
            <h4>
                What you are about to see is a player<br/>
                turning around 360&deg; every second, either in 30fps or 60fps.<br/>
                Can you tell the difference?
            </h4>            
            <div id="preloader-inner">
                <p>Please stand by, loading... (3.4 MB to download)</p>
                <p id="preloader-anim">|</p>
            </div>        
        <?php endif; ?>
        <p>
            Compatible browsers: Firefox, Chrome, Safari, IE9+.<br/>
            (Stretching doesn't work on &lt; IE9 version)
            <br/><br/>
            <a href="https://github.com/piotr-szymkowski/30vs60fps" title="30vs60fps on Github"><img src="img/btn_github.png" alt="Github icon" /></a>             
            <br><br/>
            <span style="color:#999;">more games coming soon</span>
        </p>        
    </div>
    
    <?php if(!$is_mobile): ?>
        <div id="frame-rate" style="display:none"></div>

        <div id="controls" style="display:none">
            <button id="fps-toggle">Switch to 60 FPS</button><br/>
            <button id="stretching-toggle">Turn stretching off</button>    

            <div id="fps-warning" style="display:none"><strong>WARNING:</strong> 
                Your browser is not able to display at desired minimum frame rate, therefore results might not be accurate.<br/>
                For the script to perform accurately, please do not move your mouse cursor and keep screen stretching disabled.
            </div>
        </div>
    <?php endif; ?>
    
    <?php if(!$is_mobile): ?>    
        <div id="preloader-images">        
            <?php for($frame = 0; $frame < 30; $frame++): ?>
            <div class="fps30 f<?php echo $frame ?>"></div>
            <?php endfor; ?>
            <?php for($frame = 0; $frame < 60; $frame++): ?>
            <div class="fps60 f<?php echo $frame ?>"></div>
            <?php endfor; ?>          
        </div>    
    <?php endif; ?>
    
</body>
</html>