jQuery("#textFormTab").click(function(){
    jQuery("#profileForm").hide();
    jQuery("#textForm").show();
    
    jQuery("#profileFormTab").css("background-color", "maroon");
    jQuery("#textFormTab").css("background-color", "brown");
    jQuery(".right").css("background-color", "#aaaaaa").css("color", "#999999").css("height", "550px");
    jQuery(".left").css("background-color", "#dddddd").css("color", "#222222").css("height", "550px");
});
        
jQuery("#profileFormTab").click(function(){
   jQuery("#textForm").hide();
   jQuery("#profileForm").show();
   
   jQuery("#textFormTab").css("background-color", "maroon");
   jQuery("#profileFormTab").css("background-color", "brown");
   jQuery(".left").css("background-color", "#aaaaaa").css("color", "#999999").css("height", "622px");
   jQuery(".right").css("background-color", "#dddddd").css("color", "#222222").css("height", "622px");
});