<div class="wrapper">
	<div class="item">
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest" id="question">Hi, may I know your name?</div>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<div class="attachment" ><br/>
					<img src="images/happy.png" data-original="" />
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
					<div class="button nav enabled" onclick="submit(2);" id="submit1" ><span>Ok</span><span class="confirm"></span> 	</div>
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
	        submit(2);
	    }
	});
	function submit(x){
		$("#submit1").attr('disabled','disabled');
		var name  = toTitleCase($('#name').val());
		$('#username').val(name);
		var result = name.replace(/ /g, "");
		if(result == "" || result.length < 3 || result == null){
			alert("Please Enter Valid Name");
			return false;
			$("#submit1").removeAttr('disabled');
		}
		else {
			loadform(x);
			$.ajax({
				type: "POST",
				url: "ajax/userReg.php",
				async: false ,
				data: "name="+name,
				cache: false,
				success: function(result){
					$("#user_id").val(result);
				}
			});
		}
	}
</script>