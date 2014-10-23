jQuery("#textFormTab").click(function(){
    jQuery("#profileForm").hide();
    jQuery("#textForm").show();
    
    jQuery("#profileFormTab").css("background-color", "#555555");
    jQuery("#textFormTab").css("background-color", "#888888");
    jQuery(".right").css("background-color", "#aaaaaa").css("color", "#999999");
    jQuery(".left").css("background-color", "#dddddd").css("color", "#222222");
});
        
jQuery("#profileFormTab").click(function(){
   jQuery("#textForm").hide();
   jQuery("#profileForm").show();
   
   jQuery("#textFormTab").css("background-color", "#555555");
   jQuery("#profileFormTab").css("background-color", "#888888");
   jQuery(".left").css("background-color", "#aaaaaa").css("color", "#999999");
   jQuery(".right").css("background-color", "#dddddd").css("color", "#222222");
});