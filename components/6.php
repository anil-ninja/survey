<div class="wrapper">
	<div class="item">
		<span></span>
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div id="question"></div><br/><br/>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<input type="radio" name="rating" value="1">
				<input type="radio" name="rating" value="2">
				<input type="radio" name="rating" value="3">
				<input type="radio" name="rating" value="4">
				<input type="radio" name="rating" value="5">
			</div>
			<div class="clear"></div>
			<div class="message "><span></span><div></div></div><br/><br/>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm">
					<div class="button nav enabled" onclick="submit(7);"><span>Ok</span><span class="confirm"></span> 	</div>
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
<script type="text/javascript">
	$(':radio').on('change',function(){
		var th = $(this), name = th.prop('name'); 
		if(th.is(':checked')){
		    $(':radio[name="'  + name + '"]').not($(this)).prop('checked',false);   
		}
	});
	function submit(x){
		var selected = $('input[name="rating"]:checked').length ;
		if(selected == 0){
			alert("Please Rate ");
		}
		else {
			var services = [] ;
			$('input[name="rating"]:checked').each(function(i, checked){ 
			    services[i] = $(checked).val(); 
			});
			answer(x, services);
		}
	}
</script>