<div class="blogRow">
    <h3>Blog</h3>
    
    <div class="blogs">
        <div class="arrowLeft">&lt;</div>
        <?php
        for($i = 0; $i <= 3; $i++){
        
            ?>
        <div class="blogPreview <?php echo $i + 1;?>">
        <h4>Online Donations Special...</h4>
        <p class="blurb">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p><time datetime="2014-11-14">14 Nov 2014</time></p>
        </div>    
       <?php }
        ?> 
        <div class="arrowRight">&gt;</div> 
    </div>
</div>