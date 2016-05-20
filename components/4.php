<div class="wrapper">
	<div class="item">
		<span></span>
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question"></div><br/><br/>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<div class="control">
					<select id="leaves">
						<option value="0" selected>Does Not Take</option>
						<option value="1" >1</option>
						<option value="2" >2</option>
						<option value="3" >3</option>
						<option value="4" >4</option>
						<option value="5" >5</option>
						<option value="6" >6</option>
						<option value="7" >7</option>
						<option value="more than 7" >More than 7 </option>
					</select>
				</div>
			</div>
			<div class="clear"></div>
			<div class="message "><span></span><div></div></div><br/><br/>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm">
					<div class="button nav enabled" onclick="submit(5);"><span>Ok</span><span class="confirm"></span> 	</div>
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
	function submit(x){
		var services = $("#leaves").val(); 
		answer(x, services);
	}
</script>