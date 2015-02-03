var $ = app.jQuery;


// Bottle Sizing
app.functions.bottleSizing = function bottleSizing($element) {
  var $this = $element,
      imageOriginalHeight = 1280,
      imageOriginalWidth = 374,
      imageRatio = imageOriginalHeight/imageOriginalWidth,
      imageNewHeight = $this.height(),
      imageNewWidth = imageNewHeight/imageRatio,
      parentWidth = $this.parent().width();

  app.console('New Bottle width : '+imageNewWidth);

  $this.width(imageNewWidth);

  if( parentWidth < imageNewWidth){
    var offsetX = (imageNewWidth-parentWidth)/2;

    $this.css('margin-left', '-'+offsetX+'px');
  }

};

app.functions.translateDiv = function translateDiv($element){
  var thisHeight = $element.height(),
      thisParentHeight = $element.parent().height(),
      offsetY = (thisParentHeight-thisHeight)/2;

  $element.css('-webkit-transform', 'translate3d(0, '+offsetY+'px, 0)');
  $element.css('-ms-transform', 'translate3d(0, '+offsetY+'px, 0)');
  $element.css('transform', 'translate3d(0, '+offsetY+'px, 0)');
};

// Have fun right now
var kKeys = [];
app.functions.konami = function konami(e) {
  kKeys.push(e.keyCode);
  if (kKeys.toString().indexOf("38,38,40,40,37,39,37,39,66,65") >= 0) {
    $('video').remove();
    var newVideo = '<video id="mega-video" preload="" loop="" poster="assets/img/background.jpg"><source src="assets/videos/illbeback.mp4" type="video/mp4"><source src="assets/videos/illbeback.webm" type="video/webm"><source src="assets/videos/illbeback.ogv" type="video/ogg"></video>';
    $(this).unbind('keydown', app.functions.konami);
    $('#wrapper').prepend(newVideo);
    $('video#mega-video').attr('autoplay', '1');
  }
};
