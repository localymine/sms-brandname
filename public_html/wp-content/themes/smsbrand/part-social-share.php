<!--<div class="social-network"><span>facebook-twister</span></div>-->
<div class="sns">
    <ul class="clearfix">
        <li>
            <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=<?php the_title(); ?>"onClick="window.open(encodeURI(decodeURI(this.href)), 'sharewindow', 'width=0, height=0, personalbar=0, toolbar=0, scrollbars=1, resizable=!'); return false;">
                <i class="fa fa-facebook" alt="share"></i>
            </a>
        </li>
        <li> 
            <a href="https://twitter.com/share" data-count="vertical" data-via="" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>">
                <i class="fa fa-twitter" alt="share"></i>
            </a>
            <script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
        </li>
        <li>
            <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <g:plusone size="standard(none)" href="<?php the_permalink(); ?>"><i class="fa fa-google" alt="share"></i></g:plusone>
        </li>
    </ul>
</div>