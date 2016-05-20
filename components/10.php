<div class="wrapper">
	<div class="item">
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question"></div>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<div class="attachment" ><br/>
					<img src="images/email.png" data-original="" />
				</div>
				<div class="control">
					<div class="input"><br/>
						<input class="" id="name"  type="text"/>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm"><br/>	
					<div class="button nav enabled" onclick="submit('thank');"><span>Ok</span><span class="confirm"></span> 	</div>
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
		var name  = $('#name').val();
		var result = name.replace(/ /g, "");
		if(validateEmail(result) != true){
			alert("Please Enter Valid Email");
		}
		else {
			answer(x, name);
		}
	}
</script>