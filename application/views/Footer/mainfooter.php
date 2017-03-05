	<!-- jQuery 2.2.3 -->
	<script src="<?= base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

	<script src="<?= base_url('assets/bootstrap/js/index.js')?>"></script>

	<script src="<?= base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

	<script src="<?= base_url('assets/jquery/jquery.dataTables.min.js')?>" rel="stylesheet"></script>

	<script src="<?= base_url('assets/datatables/dataTables.min.js')?>" rel="stylesheet"></script>

	<script>
	    
	    $('table:not(.not-datatable)').dataTable();
	
	</script>

	<script src="<?= base_url('assets/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>

	<script src="<?= base_url('assets/plugins/fastclick/fastclick.js')?>"></script>

	<script src="<?= base_url('assets/dist/js/app.min.js')?>"></script>

	<script src="<?= base_url('assets/sweetalert/sweetalert.min.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/moment.min.js')?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/bootstrap/js/bootstrap-datetimepicker.min.js')?>"></script>


	<script type="text/javascript">
		$(document).ready(function(){

			$('#addpayment').on('show.bs.modal', function(e){
				var requestsFormId = $(e.relatedTarget).data('pk');
				$(this).find('input[name=requests_forms_id]').val(requestsFormId);
			})

			$('form.ajax').submit(function(e){
				e.preventDefault();

				var $this = $(this);

				var warning = $(this).find('.warning');

				warning.addClass('hidden');

				$('[type=submit]').addClass('disabled')
					

				$.post($(this).attr('action'), $(this).serialize())
					.done(function(res){
						if(res.result){
							
							swal('Successfully Added','Update Success','success');

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
