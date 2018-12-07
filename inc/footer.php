<footer>
  <div class="flame"><img id="copyright" src="img/copyright.svg" alt="コピーライト"></div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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

  //スクロールアニメーション
  var scrollAnimationElm = document.querySelectorAll('.scroll_hide');
  var scrollAnimationFunc = function() {
    for(var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 150;
      <?php if($file_name !== 'index'){ ?>
      var triggerMargin = 50;
      <?php } ?>
      <?php if($browser == 'sp'){ ?>
      var triggerMargin = 100;
      <?php } ?>
      var elm = scrollAnimationElm[i];
      var showPos = 0;
      if(elm.dataset.sa_margin != null) {
        triggerMargin = parseInt(elm.dataset.sa_margin);
      }
      if(elm.dataset.sa_trigger) {
        showPos = document.querySelector(elm.dataset.sa_trigger).getBoundingClientRect().top + triggerMargin;
      } else {
        showPos = elm.getBoundingClientRect().top + triggerMargin;
      }
      if (window.innerHeight > showPos) {
        var delay = (elm.dataset.delay)? elm.dataset.delay : 0;
        setTimeout(function(index) {
          scrollAnimationElm[index].classList.add('scroll_show');
        }.bind(null, i), delay);
      }
    }
  }
  window.addEventListener('load', scrollAnimationFunc);
  window.addEventListener('scroll', scrollAnimationFunc);

  //バリデーション
  $("input").blur(function(){
    if($(this).val() == ""){
      $(this).next("span").text("※必須項目です");
    }else{
      $(this).next("span").text("※入力形式に誤りがあります");
    }
  });

  window.checkAll = function(form) {
    form.btnSubmit.disabled = !form.checkValidity();
  };

</script>
<?=$footer;?>
</body>
</html>
