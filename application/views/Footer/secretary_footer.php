	<!-- jQuery 2.2.3 -->
	<script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

	<script src="<?= base_url('assets/bootstrap/js/index.js')?>"></script>

	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

	<script src="<?= base_url('assets/jquery/jquery.dataTables.min.js')?>" rel="stylesheet"></script>

	<script src="<?= base_url('assets/datatables/dataTables.min.js')?>" rel="stylesheet"></script>

	<script src="<?= base_url('assets/jquery/dataTables.buttons.min.js')?>" rel="stylesheet"></script>

	<script  src="<?= base_url('assets/jquery/buttons.print.min.js')?>" rel="stylesheet"></script>

	<script>
	    
	    $('table:not(.not-datatable)').dataTable({
	        	dom: 'Blfrtip',
	       		buttons: [
	            	'print'
	        	],
    		});

	</script>

	<script src="<?= base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>

	<!-- FastClick -->
	<script src="<?= base_url('assets/plugins/fastclick/fastclick.js')?>"></script>

	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/dist/js/app.min.js')?>"></script>

	<script src="<?= base_url('assets/sweetalert/sweetalert.min.js')?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.print-docu').click(function(){
				$.get($(this).data('url'))
					.done(function(d){
						var w = window.open();
						w.document.write(d);
						setTimeout(function(){
							w.focus();
							w.print();
							w.close();
						}, 1000)
						
					})
				
			});

			$('.send-sms').click(function(){
				var requestFormId = $(this).data('pk');
				$.post('<?= base_url('secretary_listing/send_sms')?>', {
					request_form_id: requestFormId
				}).done(function(res){
					if(res.result){
						alert(res.message)
						window.location.reload();
						return;
					}
					alert(res.message);
				})
				.fail(function (argument) {
					alert('Failed to send message due to an unknown error');
				})
			})

			$('form.ajax').submit(function(e){
				e.preventDefault();

				var $this = $(this);

				var warning = $(this).find('.warning');

				warning.addClass('hidden');

				$('[type=submit]').addClass('disabled')
					

				$.post($(this).attr('action'), $(this).serialize())
					.done(function(res){
						if(res.result === true){

							swal('Feedback Sent',' Click Ok to Continue','success');
							setTimeout(function(){
								window.location.reload();	
							},2000);
							
						}else{
							warning.removeClass('hidden')
								.html(function(){
									return '<ul class="list-unstyled"><li>'+res.errors.join('</li><li>')+'</li><ul>'
								});
						}
					})
					.fail(function(err){
						warning.removeClass('hidden')
							.html('<p class="text-center">An internal server error has occured</p>');
					})
					.always(function(){
						$('[type=submit]').removeClass('disabled')
					})
			})
		})
	</script>

	</body>
</html>
