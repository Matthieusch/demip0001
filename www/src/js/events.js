var $ = app.jQuery;

app.functions.events = function events(){

  $('#bottle').load(function(event){
    app.functions.bottleSizing($(this));
  });

  $(window).resize(function() {
    //app.console($(window).width());
    if($(window).width() > 640) {
      app.functions.bottleSizing($('#bottle'));
      app.functions.translateDiv($('.col'));
    }
  });

  $(document).keydown(app.functions.konami);

  // Log Message
  app.debugLoadMessages.push('Events ready');

};
