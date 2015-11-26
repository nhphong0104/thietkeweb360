<div id="header">
    <div class="container">
        <div class="col-sm-4 col-md-2 hidden-xs hidden-sm no-padding main-logo">
            <a id="logo" href="/">
                <img src="" alt="Bizweb">
            </a>
        </div>
        <div class="col-xs-6 col-sm-5 hidden-lg hidden-md no-padding btn-menu">
            <button type="button" class="btn-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <a class="small-logo hidden-lg hidden-md" href="/">
                <img src="" alt="Bizweb">
            </a>
        </div>
        <div class="col-xs-6 col-sm-7 col-md-10 text-right no-padding">
            <ul class="main-menu hidden-sm hidden-xs">
                
            </ul>
            <ul class="user-menu">
                <li>
                    <a class="menu-item hidden-xs" href="javascript:openLoginPopup();"><strong>Đăng nhập</strong></a>
                </li>
                <li>
                    <a class="btn-registration event-Bizweb-Free-Trial-form-open" onclick="openCreateStorePopup(this);" href="javascript:;">Tạo website</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a class="menu-item" href="https://apps.bizweb.vn/">Kho ứng dụng</a>
                </li>
                <li>
                    <a href="https://docs.bizweb.vn">
                        Tài liệu
                    </a>
                </li>
                <li>
                    <a href="https://docs.bizweb.vn/help.html">
                        Trợ giúp
                    </a>
                </li>
                <li>
                    <a href="http://forum.bizweb.vn/">
                        Diễn đàn
                    </a>
                </li>
                <li>
                    <a href="https://experts.bizweb.vn/">Chuyên gia Bizweb</a>
                </li>
                <li>
                    <a href="http://blog.bizweb.vn/">
                        Blog
                    </a>
                </li>
                <li>
                    <a href="//www.bizweb.vn/website-tham-khao.html">
                        Website tham khảo
                    </a>
                </li>
                <li>
                    <a href="//www.bizweb.vn/ve-chung-toi.html">
                        Về chúng tôi
                    </a>
                </li>
                <li>
                    <a href="//www.bizweb.vn/lien-he.html">
                        Liên hệ
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
  <script type="text/javascript">
    function onResize() {
      var ww = $(window).width()
          if (ww <= 385) {
            if ($("#header").hasClass("index") || $("#header").hasClass("aqua")) {
              $("#header #logo img").attr("src", "themes/v1/images/bizweb_new_logo_short.png");
              $("#header .small-logo img").attr("src", "themes/v1/images/bizweb_new_logo_short.png");
            }
          else {
            $("#header #logo img").attr("src", "themes/v1/images/bizweb_old_logo_short.png");
            $("#header .small-logo img").attr("src", "themes/v1/images/bizweb_old_logo_short.png");
          }
        }
      else {
        if ($("#header").hasClass("index") || $("#header").hasClass("aqua")) {
          $("#header #logo img").attr("src", "themes/v1/images/logonew.png");
          $("#header .small-logo img").attr("src", "themes/v1/images/logonew.png");
        }
        else {
          $("#header #logo img").attr("src", "themes/v1/images/logonew.png");
          $("#header .small-logo img").attr("src", "themes/v1/images/logonew.png");
        }
      }
    }
  
  $(window).resize(function () {
    onResize();
  }
                  );
  $(window).trigger('resize');
  
  function isVisibleScrollbar() {
    var offset = $("#header").offset();
    var curWin = $(window);
    
    var top = curWin.scrollTop() - 51;
    if (top >= 0)
      return true;
    
    return false;
  }
  
  
  $(function () {
    $("#header:not(.index):not(.aqua) #logo img").attr("src", "themes/v1/images/logonew.png");
  }
   );
  </script>