$(document).ready(function(){
  $("#showup").click(function(){
    $(".updateprofile").show();
  });
  $("#Hideup").click(function(){
    $(".updateprofile").hide();
  });
});


$(document).ready(function(){
  $("#showdel").click(function(){
    $(".adminDelete").show();
  });
  $("#HideDel").click(function(){
    $(".adminDelete").hide();
  });
});


$(document).ready(function(){
  $("#button").mouseenter(function(){
    document.getElementById("button").innerHTML="doctor availabile";
  });
});


$(document).ready(function(){
  $("#test").click(function(){
    $("#div1").fadeToggle();
    $("#div2").fadeToggle("slow");
    $("#div3").fadeToggle(3000);
  });
});
