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
  var filledInCorrect = 0;
  for (var i = 0; i < 6; i++) {
    if ($(".toValidate" + i + "").val() != "") {
      filledIn++;
      console.log(filledIn);
    }
  }
  if(filledIn >= 6){
    var namePattern = /^[a-zA-Z '.-]*$/;
    var emailPattern = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    var postalCodePattern = /^[1-9]{1}[0-9]{3}\s*[a-zA-Z]{2}$/;
    var adressPattern = /^[a-zA-Z0-9 '.-]*$/;

    if (namePattern.test($(".toValidate0").val())) {
      filledInCorrect++;
    }
    if (namePattern.test($(".toValidate1").val())) {
      filledInCorrect++;
    }
    if (emailPattern.test($(".toValidate2").val())) {
      filledInCorrect++;
    }
    if (adressPattern.test($(".toValidate3").val())) {
      filledInCorrect++;
    }
    if (postalCodePattern.test($(".toValidate4").val())) {
      filledInCorrect++;
    }
    if (namePattern.test($(".toValidate5").val())) {
      filledInCorrect++;
    }
    if (adressPattern.test($(".toValidate6").val())) {
      filledInCorrect++;
    }
    if (filledInCorrect == 7) {
      return true;
    }


  } else {
     return false;
  }
}
