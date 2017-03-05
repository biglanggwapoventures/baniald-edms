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

	<script src="<?= base_url('assets/jquery/jquery.inputmask.bundle.min.js')?>"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#sss_no').inputmask("99-9999999-9");
			$('#tin_no').inputmask("999-999-999-999"); 
			$('#pag_ibig_no').inputmask("9999-9999-9999");
			$('#philhealth_no').inputmask("99-999999999-9")


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
							}
							else{
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

				$('#viewmessage').on('show.bs.modal', function(e){
					var btn = $(e.relatedTarget);
					$(this).find('.modal-body').text(btn.data('message'));
				})
		})


	</script>

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


		$('[name=employment_status]').change(function(){
			if($(this).val() === 'Unemployed'){
				$('[data-hide=unemployed]').slideUp();
			}
			else{
				$('[data-hide=unemployed]').slideDown();
			}
		})

		$('[name=nature_of_work]').change(function(){
			if($(this).val() != 'others'){
				$('[data-hide=others]').slideUp();
			}
			else{
				$('[data-hide=others]').slideDown();
			}
		})	
		 
	</script>
	<script type="text/javascript">
		
		function getAge(dateString) {

		        var today = new Date();
		        var birthDate = new Date(dateString);
		        var age = today.getFullYear() - birthDate.getFullYear();
		        var m = today.getMonth() - birthDate.getMonth();
			        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
			            age--;
			        }
		        		return age;
	    	}

	    	document.getElementById('dateofbirth').addEventListener('input', function(){
	        	document.getElementById('age').value = getAge(this.value);
	    	})

		    $('body').on('input', '.famdateofbirth', function(){
		        $(this).closest('tr').find('.famage').val(getAge($(this).val()))
		    })

	</script>
		
	</body>
</html>
