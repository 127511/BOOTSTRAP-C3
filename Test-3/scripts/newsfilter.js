$(".badge0").text($('.catfilter_0').length);
$(".badge1").text($('.catfilter_1').length);
$(".badge2").text($('.catfilter_2').length);
$(".badge3").text($('.catfilter_3').length);

$("#cat_0").click(function(){
  $(".catfilter_0").show();
  $(".catfilter_1").hide();
  $(".catfilter_2").hide();
  $(".catfilter_3").hide();
});

$("#cat_1").click(function(){
  $(".catfilter_1").show();
  $(".catfilter_0").hide();
  $(".catfilter_2").hide();
  $(".catfilter_3").hide();
});

$("#cat_2").click(function(){
  $(".catfilter_2").show();
  $(".catfilter_0").hide();
  $(".catfilter_1").hide();
  $(".catfilter_3").hide();
});

$("#cat_3").click(function(){
  $(".catfilter_3").show();
  $(".catfilter_0").hide();
  $(".catfilter_1").hide();
  $(".catfilter_2").hide();
});
$("#cat_reset").click(function(){
  $(".catfilter_3").show();
  $(".catfilter_0").show();
  $(".catfilter_1").show();
  $(".catfilter_2").show();
});
