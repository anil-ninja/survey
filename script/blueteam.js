function validateEmail(fld) {
  var tfld = trim(fld);                        // value of field with whitespace trimmed off
  var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
  if (!emailFilter.test(tfld)) {              //test email for illegal characters
    return false;
  } 
  else {
    return true;
  }
}
function toTitleCase(str){
  return str.replace(/\w\S*/g, function(txt){return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();});
}

function validatePhone(fld) {    
  var res = fld.split(",");
  var filter = /^([7-9][0-9]{9})+$/;
  var result = "" ;
  for(var i = 0; i < res.length; i++) {
    var stripped = res[i];
    if (stripped.value == "") {
      result = false;
    } 
    else if (!(filter.test(stripped))) {
      result = false ;
    } 
    else if (!(stripped.length == 10)) {
      result = false;
    }
    else result = true ;
  }
  return result;
}

function trim(s){
  return s.replace(/^\s+|\s+$/, '');
}

function answer(x, response){
  var user_id = $("#user_id").val();
  dataString = "user=" + user_id + "&qst=" + x + "&response=" + response ;
  loadform(x);
  $.ajax({
    type: "POST",
    url: "ajax/answer.php",
    async: false ,
    data: dataString,
    cache: false,
    success: function(result){
      
    }
  });
  
}
function loadform(x){
  /*$.get('./components/'+x+'.php', function(data) {
    var name = $('#username').val();
    $('#form').html('');
    $('#form').append(data);
    //$("#question").show().html(result);
    $("#answer").show().html(name); 
  });*/
  $.ajax({
    type: "POST",
    url: "ajax/getQuestions.php",
    async: false ,
    data: "question="+x,
    cache: false,
    success: function(result){
      $.get('./components/'+x+'.php', function(data) {
        var name = $('#username').val();
        $('#form').html('');
        $('#form').append(data);
        $("#question").show().html(result);
        $("#answer").show().html(name); 
      });
    }
  });
}