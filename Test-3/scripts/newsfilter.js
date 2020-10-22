$(".badge0").text($('.catfilter_0').length);
$(".badge1").text($('.catfilter_1').length);
$(".badge2").text($('.catfilter_2').length);
$(".badge3").text($('.catfilter_3').length);

var active_cat;

$("#cat_0").click(function(){
  cat_0();
});

$("#cat_1").click(function(){
  cat_1();
});

$("#cat_2").click(function(){
  cat_2();
});

$("#cat_3").click(function(){
  cat_3();
});
$("#cat_reset").click(function(){
  cat_reset();
});
$("#cat_prev").click(function(){
  cat_prev();
});
$("#cat_next").click(function(){
  cat_next();
});


function cat_0(){
  active_cat = 0;
  $(".catfilter_0").show();
  $(".catfilter_1").hide();
  $(".catfilter_2").hide();
  $(".catfilter_3").hide();
}
function cat_1(){
  active_cat = 1;
  $(".catfilter_1").show();
  $(".catfilter_0").hide();
  $(".catfilter_2").hide();
  $(".catfilter_3").hide();
}
function cat_2(){
  active_cat = 2;
  $(".catfilter_2").show();
  $(".catfilter_0").hide();
  $(".catfilter_1").hide();
  $(".catfilter_3").hide();
}
function cat_3(){
  active_cat = 3;
  $(".catfilter_3").show();
  $(".catfilter_0").hide();
  $(".catfilter_1").hide();
  $(".catfilter_2").hide();
}
function cat_reset(){
  active_cat = undefined;
  $(".catfilter_3").show();
  $(".catfilter_0").show();
  $(".catfilter_1").show();
  $(".catfilter_2").show();
}
function cat_prev(){
  if (active_cat == 0) {
    cat_3();
  }
  else if (active_cat == 1) {
    cat_0();
  }
  else if (active_cat == 2) {
    cat_1();
  }
  else if (active_cat == 3) {
    cat_2();
  } else {
    cat_3();
  }
}
function cat_next(){
  if (active_cat == 0) {
    cat_1();
  }
  else if (active_cat == 1) {
    cat_2();
  }
  else if (active_cat == 2) {
    cat_3();
  }
  else if (active_cat == 3) {
    cat_0();
  } else{
    cat_0();
  }
}
