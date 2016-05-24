<div class="wrapper">
	<div class="item">
		<span></span>
		<div class="arrow"><div class="arrow-right"></div></div>
	</div>
	<div class="quest"  id="question"><span id="answer"></span>, Rate work quality of your domestic helper according to your need or requirement?</div><br/><br/>
	<div class="content">
		<div class="content-wrapper">
			<div class="attachment-wrapper">
				<p>
				<span class="starRating">
			        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Rocks!"></label>
				    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Pretty good"></label>
				    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh"></label>
				    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad"></label>
				    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Sucks big time"></label>
			    </span></p>
			</div> <br/><br/><br/><br/>
			<div class="clear"></div>
			<div class="message "><span></span><div></div></div>
			<div class="message "><span></span><div></div></div>
			<div class="confirm container">
				<div class="button-wrapper confirm">
					<div class="button nav enabled" onclick="submit(7);" id="submit1"><span>Ok</span><span class="confirm"></span> 	</div>
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
		$("#submit1").attr('disabled','disabled');
		var selected = $('input[name="rating"]:checked').length ;
		if(selected == 0){
			alert("Please Rate ");
			$("#submit1").removeAttr('disabled');
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