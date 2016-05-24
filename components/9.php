<div class="wrapper">
	<div class="item">
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question">Hi <span id="answer"></span>, may I know your contact number?</div>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<div class="attachment" ><br/>
					<img src="images/Tablet_smiley.png" data-original="" />
				</div>
				<div class="control">
					<div class="input"><br/>
						<input class="" id="name"  type="number"/>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm"><br/>	
					<div class="button nav enabled" onclick="submit(10);" id="submit1"><span>Ok</span><span class="confirm"></span> 	</div>
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
	$("input").keypress(function(event) {
	    if (event.which == 13) {
	        event.preventDefault();
	        submit(10);
	    }
	});
	function submit(x){
		$("#submit1").attr('disabled','disabled');
		var name  = $('#name').val();
		var result = name.replace(/ /g, "");
		if(validatePhone(result) != true){
			alert("Please Enter Valid Phone Number");
			$("#submit1").removeAttr('disabled');
		}
		else {
			answer(x, name);
			var username = $('#username').val();
			$.ajax({
			    type: "POST",
			    url: "ajax/sms.php",
			    async: false ,
			    data: "user="+username+"&number="+name,
			    cache: false,
			    success: function(result){}
			});
			
		}
	}
</script>