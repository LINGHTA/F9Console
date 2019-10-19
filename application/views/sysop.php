    <body<?php if ($onloadFunction) : ?> onload="<?php echo $onloadFunction ?>;"<?php endif; ?> data-count="<?php echo $seconds ?>" data-timer="<?php echo $timer ?>" data-count-message="<?php echo $messageEnd ?>">
	    <header class="header noheader" data-this-section="<?php echo $sectionPage ?>"></header>
        <!-- Automatic element centering using js -->
        <div class="center">            
            <div class="headline text-center" id="time">
                <!-- Time auto generated by js -->
				<?php echo (!$timer) ? $title : ""; ?>
            </div><!-- /.headline -->
            
            <!-- User name -->
            <div class="lockscreen-name"><?php echo $message ?></div>
            
        </div><!-- /.center -->