jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');

        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

        e.preventDefault();
    });

    $.urlParam = function(name){
      var results = new RegExp('[\?&]' + name + '=([^]*)').exec(window.location.href);
      if (results==null){
         return null;
      }
      else{
         return results[1] || 0;
      }
    }

    // example.com?param1=name&param2=&id=6
    var pageFor = '';
    pageFor = $.urlParam('pageFor'); // name
    if(pageFor == "before"){
      $('#welcome_tamu').addClass("not_active_page");
      $('#before_arriving').removeClass("not_active_page");
    }else if(pageFor == "welcome"){
      $('#before_arriving').addClass("not_active_page");
      $('#welcome_tamu').removeClass("not_active_page");
    }else{
      $('#welcome_tamu').addClass("not_active_page");
      $('#before_arriving').removeClass("not_active_page");
    }

});
