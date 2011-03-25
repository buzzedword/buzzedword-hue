(function($){
  $(document).ready(function(){
    var root = $("html");
    var frontpageAccordion = (function(){
		root.find("#porthole").accordion();
	})();
	var roundedCorners = (function(){
      if ($.browser.msie){
        var cornerGroups = root.find(".curved");
        cornerGroups.corner("round 10px");
      }
    })();
    var modalGroup = (function(){
      root.find("#dialog-modal").dialog({
          width: 600,
          modal: true
      });
    })();
    var infoGroup = (function(){
      var infotext = root.find("#warning");
      var infobutton = root.find("#precursor");
      
      var fxq = (function slideHide() {
        infobutton.slideToggle('slow');
        infotext.slideToggle('slow');
      });
      
      infobutton.effect("highlight", {}, 3000);
      infobutton.click(function(){
        fxq();
      });
    })();
    var grabTweets = (function(){
       var tweetContainer = root.find("#twitter_container");
	   tweetContainer.hide('slow');
       $.ajax({
        url : "http://twitter.com/statuses/user_timeline/buzzedword.json?callback=?",
        dataType : "json",
        timeout:15000,

        success : function(data)
        {
          var maxcount = 0;
          tweetContainer.html("");
          for (i=0; i<data.length; i++)
          {
            if (maxcount == 3) {
              // Do nothing
            } else {
              if (data[i].text.indexOf("#public") > -1){
                tweetContainer.append("<div class='tweet'><li>" + data[i].text);
                tweetContainer.append("<ul><li><img src='buzz-content/images/twitter-bird_ico.png' alt='Twitter' height='11px' width='20px' /><small class='feed'>" + data[i].created_at +"</small></li></ul></li></div>");
                maxcount++;
              } else {
                // Do nothing
              }
            }
          }
		  tweetContainer.slideToggle('slow');
		  root.find("#facebook").slideToggle('slow');
        },

        error : function()
        {
          tweetContainer.html("Error retreiving data.");
		  
        }
      });
    })();
	var makeTabs = (function(){
		root.find("#tab-container").tabs();
	})();
    var getLinkedIn = (function(){
      root.find("#dynamic").load("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D%22http%3A%2F%2Fwww.linkedin.com%2Fin%2Fdgarc%22%20and%20xpath%3D%22%2F%2Fdiv%5B%40id%3D'main'%5D%22", function(response, status, xhr) {
      if (status == "error") {
        var msg = "Sorry but there was an error: ";
        root.find("#dynamic_alert").html(msg + xhr.status + " " + xhr.statusText);
      } else {
        root.find("#dynamic_alert").html("Generated dynamically from LinkedIn");
        $(".connections").hide();
        $("#moreedu").hide();
        $("#additional-information").hide();
        }
      });
    })();
	var doContactActions = (function(){
		root.find('#contactform').validate();
	})();
	var highlightAlertSuccess = (function(){
		root.find('.error, .success').effect("highlight", {}, 3000);
	})();
	/*
	var getLinkedInSafe = (function(){
		function xss(callback){
			var yql = "http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20html%20where%20url%3D%22http%3A%2F%2Fwww.linkedin.com%2Fin%2Fdgarc%22%20and%20xpath%3D%22%2F%2Fdiv%5B%40id%3D'main'%5D%22&format=json&callback=cbfunc"
			$.getJSON(yql,cbfunc);
			function cbfunc(data){
				if ( typeof callback === 'function') {  
					callback(data);  
				} 
			}
		}
		xss(function(results){
			console.log('starts');
			root.find("#dynamic").html(results);
		});
	})();
	*/
  });
})(jQuery);