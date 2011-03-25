/* Author: Daniel Garcia

*/
(function($){
  $(document).ready(function(){
    var root = $('html');
    var res = new Array($(window).height(), $(document).width());
    
    var gridClick = (function(){
      root.find('.grid').click(function(){
        var emuState = $(this).attr('rel');
        
        $('footer#data').data('state', emuState);
        $('.wrapper').hide("explode", 1000);
        
        setTimeout(function() { $('.sub-wrapper').show("explode", 1000); }, 1000);
        
        
      });
    })();
    
    var subgridClick = (function(){
      root.find('.sub-grid').click(function(){
        var emuState = $(this).attr('rel');
        var parentState = $('footer#data').data('state');
        $('div.grid[rel="' + parentState + '"]').find('span').html(emuState + " terminated the state.");
        
        $('footer#data').data('state', '');
        $('.sub-wrapper').hide("explode", 1000);
        
        setTimeout(function() { $('.wrapper').show("explode", 1000); }, 1000);
        
        
      });
    })();
    
    
  });
})(jQuery);



















