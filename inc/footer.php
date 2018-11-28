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
    $('main,.flame img').addClass('blur');
    no_scroll();
  });
  //メニュー閉じる
  $('li#close,p.add_close').click(function(){
    $('nav,p.add_close').fadeOut(250);
    $('p.add_open').fadeIn(250);
    $('main,.flame img').removeClass('blur');
    return_scroll();
  });
</script>
<?=$footer;?>
</body>
</html>
