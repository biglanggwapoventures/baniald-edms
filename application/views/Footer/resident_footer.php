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

	<script type="text/javascript">
		$(document).ready(function(){
			
			$('form.ajax').submit(function(e){
				e.preventDefault();

				var $this=  $(this);
				
				var warning = $(this).find('.warning');

				warning.addClass('hidden');

				$('[type=submit]').addClass('disabled')

				$.post($(this).attr('action'), $(this).serialize())
					.done(function(res){
						if(res.result){
							if($this.data('next')){
								// console.log(res);
								// return;
								window.location.href = $this.data('next')+ '/'+ res.data;
							}else{
								window.location.reload();
							}
							
						}else{
							warning.removeClass('hidden')
								.html(function(){
									return '<ul class="list-unstyled"><li>'+res.errors.join('</li><li>')+'</li><ul>'
								});
							$("html, body").animate({ scrollTop: 0 }, "slow");
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

	<!-- ADD TEXT BOX FILEDS -->
	<script type="text/javascript">

		$(document).ready(function(){

			$('[data-click=new-line]').click(function(){

				if($(this).closest('table').find('tbody tr').length + 1 > 5){
					swal('ERROR', 'MAXIMUM OF 5 LINES', "error");
					return;
				}
				var tr = $(this).closest('table').find('tbody tr:first').clone();
				tr.find('input,select').val('');
				tr.find('td:first').text($(this).closest('table').find('tbody tr').length + 1)
				tr.appendTo($(this).closest('table').find('tbody'));

				
			})

			$('body').on('click', '[data-click=remove-line]', function(){
				var table = $(this).closest('table'),
					trs = table.find('tbody tr');
				if(trs.length > 1){
					$(this).closest('tr').remove();
				}
				else{
					swal('WARNING!', 'REQUIRED AT LEAST 1 DESCRIPTION', "error");
				}
				table.find('tbody tr').each(function(i, v){
					// console.log(v);
					$(v).find('td:first').text(i+1);
				})
			})
		})
		 
</script>

		
	</body>
</html>
