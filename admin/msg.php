<script>
 
	<?php if((isset($_GET['msg'])) && ($_GET['type'] == 'success')){  ?>
	
	$(window).load(function() {
		$.pnotify({
			type: 'success',
		    title: 'Regular Success',
    		text: '<?php echo $_GET['msg'] ?>',
		    icon: 'picon icon16 iconic-icon-check-alt white',
		    opacity: 0.95,
		    history: false,
		    sticker: false
		});
	});
	
<?php }else{ ?>	
		$(window).load(function() {
		$.pnotify({
			type: 'error',
		    title: 'Regular Error',
    		text: '<?php echo $_GET['msg'] ?>',
		    icon: 'picon icon24 typ-icon-cancel white',
		    opacity: 0.95,
		    history: false,
		    sticker: false
		});
	});
<?php } ?>	

</script>