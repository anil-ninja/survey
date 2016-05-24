<div class="wrapper">
	<div class="item">
		<span></span>
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question">Hi <span id="answer"></span>,  which domestic service/s you use?</div><br/><br/>
	<div class="content">
		<div class="content-wrapper">
			<div class="multiple"></div>
			<input type="checkbox" id="maid" value="maid" name="service[]" />
			<label for="maid"></label>

			<input type="checkbox" id="cook" value="cook" name="service[]" />
			<label for="cook"></label>       

			<input type="checkbox" id="driver" value="driver" name="service[]" />
			<label for="driver"></label>

			<input type="checkbox" id="babysitter" value="babysitter" name="service[]" />
			<label for="babysitter"></label>

			<input type="checkbox" id="none" value="none" name="service[]" />
			<label for="none"></label>
		
			<div class="clear"></div>
			<div class="clear"></div><br/><br/>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm">
					<div class="button nav enabled" onclick="submit(3);" id="submit1"><span>Ok</span><span class="confirm"></span> 	</div>
				</div>
				<div class="aux no-hover">
					<div class="inset"></div>
					<div class="bg"></div>
					<div class="bd"></div>
					<div class="overlay"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$(':checkbox').on('change',function(){
		var th = $('#none'), name = th.prop('name'); 
		if(th.is(':checked')){
		    $(':checkbox[name="'  + name + '"]').not($(this)).prop('checked',false);   
		}
	});
	function submit(x){
		$("#submit1").attr('disabled','disabled');
		var selected = $('input[name="service[]"]:checked').length ;
		if(selected == 0){
			alert("Please Choose a Service");
			$("#submit1").removeAttr('disabled');
		}
		else {
			var services = [] ;
			$('input[name="service[]"]:checked').each(function(i, checked){ 
			    services[i] = $(checked).val(); 
			});
			answer(x, services);
		}
	}
</script>
