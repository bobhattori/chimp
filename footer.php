</div>
<div class="footer">
	<div class="footer-inner">
		<div class="address">&copy; 2014 中国輸入プレナー塾</div>
    	<p><?php if(is_page()): ?>
    		<a href="<?php bloginfo('url'); ?>">トップページ</a>
    		<?php else: ?>
    		<a href="#">特定商取引法に基づく表記</a>
    	<?php endif; ?>
    	</p>
	</div>
</div>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/vendor/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/foundation.min.js"></script>
<script>
$(document).foundation();
</script>
<?php wp_footer(); ?>
</body>
</html>