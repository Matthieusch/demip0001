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

  $(document).on('click', '#what', function(event) {
    $('#lightbox-bg').addClass('show');
    $('article').addClass('open');
  });

  $(document).on('click', '#close-what, #lightbox-bg', function(event) {
    $('article').removeClass('open');
    $('#lightbox-bg').removeClass('show');
  });

  // Log Message
  app.debugLoadMessages.push('Events ready');

};
