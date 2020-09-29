$("#validateForm").click(function(){
    $("#alertSucces").hide('fade');
    $("#alertError").hide('fade');
  if (validateForm()) {
    $("#alertSucces").show('fade');
  } else {
    $("#alertError").show('fade');
  }
});

function validateForm(){
  var filledIn = 0;
  for (var i = 0; i < 7; i++) {
    if ($(".toValidate" + i + "").val() != "") {
      filledIn++;
      console.log(filledIn);
    }
  }
  if(filledIn == 7){
    return true;
  } else {
     return false;
  }
}
