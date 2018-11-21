<footer>
  <div class="flame"><img id="copyright" src="img/copyright.svg" alt="コピーライト"></div>
</footer>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
  function no_scroll(){
    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
    $(document).on(scroll_event,function(e){e.preventDefault();});
    $(document).on('touchmove.noScroll', function(e) {e.preventDefault();});
  }
  function return_scroll(){
    var scroll_event = 'onwheel' in document ? 'wheel' : 'onmousewheel' in document ? 'mousewheel' : 'DOMMouseScroll';
    $(document).off(scroll_event);
    $(document).off('.noScroll');
  }
  //メニュー開く
  $('p.add_open').click(function(){
    $('nav,p.add_close').fadeIn(250);
    $('p.add_open').fadeOut(250);
    $('main').addClass('blur');
    no_scroll();
  });
  //メニュー閉じる
  $('li#close,p.add_close').click(function(){
    $('nav,p.add_close').fadeOut(250);
    $('p.add_open').fadeIn(250);
    $('main').removeClass('blur');
    return_scroll();
  });

  var timer = false;
  var w = 0;

  //ロード時
  $(window).load(function() {
    w = $(window).width();
  });

  //リサイズ時
  $(window).resize(function() {
    if (timer !== false) {
      clearTimeout(timer);
    }
    timer = setTimeout(function() {
      if($(window).width() != w){
        // 幅変更後に行う処理
        location.reload();

        //幅再設定
        w = $(window).width();
      }
    }, 200);
  });

</script>
<?=$footer;?>
</body>
</html>
