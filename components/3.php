<div class="wrapper">
	<div class="item">
		<span></span>
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question"></div><br/><br/>
	<div class="content">
		<div class="content-wrapper">
			<div class="multiple"></div>
			<input type="checkbox" id="Yes" value="Yes" name="service" />
			<label for="Yes"></label>

			<input type="checkbox" id="No" value="No" name="service" />
			<label for="No"></label>       

			<div class="clear"></div>
			<div class="clear"></div><br/><br/>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm">
					<div class="button nav enabled" onclick="submit(4);"><span>Ok</span><span class="confirm"></span> 	</div>
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
		var th = $(this), name = th.prop('name'); 
		if(th.is(':checked')){
		    $(':checkbox[name="'  + name + '"]').not($(this)).prop('checked',false);   
		}
	});
	function submit(x){
		var selected = $('input[name="service"]:checked').length ;
		if(selected == 0){
			alert("Please Give Your Opinion");
		}
		else {
			var services = [] ;
			$('input[name="service"]:checked').each(function(i, checked){ 
			    services[i] = $(checked).val(); 
			});
			answer(x, services);
		}
	}
</script>
