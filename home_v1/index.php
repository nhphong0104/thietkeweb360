
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
  
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />

  <head>
    <?include("head.php");?>
  </head>
  <body>
    <div id="container">
      <?include("../includes_v1/inc_header.php");?>
 
      <div id="wrapper" class="clearfix">
        <?include("../includes_v1/inc_search.php");?>
        <?include("../includes_v1/inc_index_description.php");?>
          <div id="index-app-store">
            <div class="container">
              <div class="col-md-12 text-center title-app-store">
                <h3 class="h3-scale">
                  Kho ứng dụng
                </h3>
                <p class="uppercase">
                  Cung cấp cho bạn đầy đủ công cụ bán hàng hữu ích
                </p>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 layout-apps-left">
                  <div class="layout-apps app-tag">
                    <ul>
                      <li class="header-apps">
                        Thanh toán
                      </li>
                    </ul>
                    <ul>
                      <li class="content-apps">
                        Tích hợp cổng thanh toán trực tuyến giúp việc giao dịch trở nên dễ dàng
                      </li>
                    </ul>
                  </div>
                  <div class="layout-apps app-ship">
                    <ul>
                      <li class="header-apps">
                        Vận chuyển
                      </li>
                    </ul>
                    <ul>
                      <li class="content-apps">
                        Tích hợp vận chuyển với các dịch vụ giao vận lớn giúp hoàn thành đơn hàng nhanh
                      </li>
                    </ul>
                  </div>
                </div>
                
                <div class="col-xs-12 col-sm-6 col-md-3 layout-apps-right col-md-push-6">
                  <div class="layout-apps app-cart">
                    <ul>
                      <li class="header-apps">
                        Phần mềm quản lý bán hàng
                      </li>
                    </ul>
                    <ul>
                      <li class="content-apps">
                        Phần mềm giúp bạn quản lý sản phẩm và tình hình kinh doanh của của hàng
                      </li>
                    </ul>
                  </div>
                  <div class="layout-apps app-marketing">
                    <ul>
                      <li class="header-apps">
                        Marketing
                      </li>
                    </ul>
                    <ul>
                      <li class="content-apps">
                        Công cụ marketing giúp bạn tiếp cận khách hàng tiềm năng, tăng nhanh doanh số
                      </li>
                    </ul>
                  </div>
                </div>
                <div style="padding:0;" class="col-xs-12 col-sm-12 col-md-6 col-md-pull-3 img-banner">
                  <img style="margin: 0 auto;" class="img-responsive" src="/themes/v1/images/banner/banner-apps.png" >
                </img>
              </div>
            </div>
            <div class="row">
              <div style="padding:0;" class="col-xs-12 col-sm-12 col-md-12 veiw-more">
                <a href="https://apps.bizweb.vn/">
                  Xem thêm
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2 logo-partner">
                <a class="partner-zopim">
                </a>
                <a class="partner-vht">
                </a>
                <a class="partner-sapo">
                </a>
                <a class="partner-ghn">
                </a>
              </div>
            </div>
          </div>
          </div>
          <div id="index-theme-store">
            <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-12">
              </div>
            </div>
          </div>
         
          <div id="index-aboutus">
            <div class="container">
              <div class="col-md-12 col-sm-12 col-sx-12">
                <div class="row">
                  <div class="col-md-6 col-sm-6 index-aboutus-desc">
                    <span class="index-aboutus-title uppercase">
                      Về chúng tôi
                    </span>
                    <hr class="visible-sx" />
                    <strong>
                      Làm cho việc
                    </strong>
                    <h3 class="h3-grant uppercase">
                      Bán hàng
                    </h3>
                    <h3 class="h3-scale">
                      trở nên dễ dàng
                    </h3>
                    <p class="caption">
                      Chúng tôi bắt đầu sứ mệnh này từ năm 2008...
                    </p>
                  </div>
                  <div class="col-md-6 col-sm-6 index-aboutus-video">
                    <div class="video-intro">
                      <a class="play html5lightbox visible-lg" href="#bizweb-video">
                        <img class="video-intro event-Intro-video-play" src="/themes/v1/images/banner/play.png" alt="Video-Bizweb">
                      </a>
                      <a class="bg html5lightbox visible-lg" href="#bizweb-video">
                        <img class="img-responsive video-intro event-Intro-video-play" src="/themes/v1/images/banner/image-video.png" alt="Video-Bizweb">
                      </a>
                      <a class="bg html5lightbox hidden-lg" href="#bizweb-video">
                        <img class="autoresize-image video-intro event-Intro-video-play" src="/themes/v1/images/banner/image_video_full.png" alt="Video-Bizweb">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="bizweb-video" class="video-form-content" style="display: none;">
            <iframe class="bizvideo" width="953" height="534" src="#" frameborder="0">
            </iframe>
            
          </div>
          <script type="text/javascript">
            $(function () {
              $('.html5lightbox').fancybox({
                fitToView: false,
                autoSize: true,
                closeClick: false,
                openEffect: 'fade',
                closeEffect: 'fade',
                helpers: {
                  overlay: {
                    closeClick: false
                  }
                  // prevents closing when clicking OUTSIDE fancybox
                }
                ,
                beforeLoad: function () {
                  $(".bizvideo").attr("src", "https://www.youtube.com/embed/rsCD_XoMLQE?autoplay=1&amp;wmode=transparent&amp;rel=0");
                  
                  var ww = $(window).width()
                      if (ww > 1200) {
                        $(".bizvideo").attr("width", "953");
                        $(".bizvideo").attr("height", "534");
                      }
                  if (ww > 750 && ww <= 1200) {
                    $(".bizvideo").attr("width", "745");
                    $(".bizvideo").attr("height", "450");
                  }
                  if (ww > 540 && ww <= 750) {
                    $(".bizvideo").attr("width", "530");
                    $(".bizvideo").attr("height", "328");
                  }
                  if (ww <= 540) {
                    $(".bizvideo").attr("width", "280");
                    $(".bizvideo").attr("height", "220");
                  }
                }
                ,
                afterClose: function () {
                  $(".bizvideo").removeAttr("src");
                }
              });
            });
          </script>
          <div id="top-comments">
            <div class="container">
              <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                <div class="text-center">
                  <h3 class="h3-scale">
                    Sự hài lòng của khách hàng
                  </h3>
                  <p class="uppercase">
                    chính là thành công lớn nhất của chúng tôi
                  </p>
                </div>
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="thumbnail">
                        <img src="Upload/CustomerComments/2014/9/23/e5ed474aac658dcf9a017fc9e7fb13b4.png" alt="" />
                      </div>
                      <div class="content">
                        <div>
                          <p>
                            Ch&#250;ng t&#244;i c&#243; si&#234;u thị hoạt động được một thời gian kh&#225; d&#224;i, h&#242;a c&#249;ng với xu thế thương mại điện tử, kinh doanh online ph&#225;t triển rầm rộ, ch&#250;ng t&#244;i đ&#227; t&#236;m hiểu v&#224; lựa chọn Bizweb để x&#226;y dựng website. Ch&#250;ng t&#244;i đ&#227; c&#243; một website ưng &#253;, c&#225;c c&#244;ng cụ hỗ trợ b&#225;n h&#224;ng hiệu quả. T&#244;i h&#224;i l&#242;ng về dịch vụ m&#224; Bizweb cung cấp.
                          </p>
                        </div>
                        <div class="customer-name">
                          &#212;ng: Đỗ Tr&#225;c Chiến
                          - 
                          <a class="text-aqua" href="http://www.megaplaza.com.vn/" target="_blank" rel="nofollow">
                            www.megaplaza.com.vn
                          </a>
                          -
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumbnail">
                        <img src="Upload/CustomerComments/2014/9/23/e86a4affc889aa3dfe673458993c28a1.png" alt="" />
                      </div>
                      <div class="content">
                        <div>
                          <p>
                            Magonn l&#224; một hệ thống chuỗi cửa h&#224;ng thời trang lớn tại Việt Nam, c&#249;ng với việc ph&#225;t triển hệ thống, ch&#250;ng t&#244;i cũng ch&#250; trọng đến việc ph&#225;t triển kinh doanh online. Magonn chọn Bizweb v&#236; Bizweb đ&#225;p ứng được tất cả c&#225;c y&#234;u cầu t&#237;nh năng, thẩm mỹ  m&#224; Magonn đưa ra, ch&#250;ng t&#244;i rất h&#224;i l&#242;ng với dịch vụ của Bizweb.
                          </p>
                        </div>
                        <div class="customer-name">
                          B&#224;: Nguyễn Minh Ph&#250;c v&#224; T&#250; Ng&#244; 
                          - 
                          <a class="text-aqua" href="http://www.magonn.com.vn/home-p3.html" target="_blank" rel="nofollow">
                            www.magonn.com.vn/home-p3.html
                          </a>
                          -
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumbnail">
                        <img src="Upload/CustomerComments/2014/10/22/0bc7a048fabf9b471587da7a872e9cef.png" alt="" />
                      </div>
                      <div class="content">
                        <div>
                          <p>
                            C&#244;ng ty ch&#250;ng t&#244;i đ&#227; cung cấp dịch vụ qu&#224; tết v&#224; v&#233; m&#225;y bay, thời gian đầu chỉ b&#225;n h&#224;ng trực tiếp tại cửa h&#224;ng. Khi phong tr&#224;o kinh doanh online ph&#225;t triển rầm rộ ch&#250;ng t&#244;i cũng quyết định x&#226;y dựng website về qu&#224; tết c&#249;ng với đ&#243; l&#224; site về v&#233; m&#225;y bay tại Bizweb. T&#244;i cảm thấy ho&#224;n to&#224;n tin tưởng v&#236; được đội ngũ hỗ trợ rất nhiệt t&#236;nh.
                          </p>
                        </div>
                        <div class="customer-name">
                          &#212;ng: L&#234; Ngọc Quang
                          - 
                          <a class="text-aqua" href="http://www.quatet.org/" target="_blank" rel="nofollow">
                            www.quatet.org
                          </a>
                          -
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumbnail">
                        <img src="Upload/CustomerComments/2014/10/23/d968599be77746400c0815fd1e64b280.png" alt="" />
                      </div>
                      <div class="content">
                        <div>
                          <p>
                            L&#224; một kh&#225;ch h&#224;ng đang sử dụng dịch vụ của Bizweb, t&#244;i thấy website của m&#236;nh được c&#225;c bạn nh&#226;n vi&#234;n chăm s&#243;c v&#224; hỗ trợ rất nhiệt t&#236;nh về việc quản trị website cũng như sử dụng c&#225;c c&#244;ng cụ hỗ trợ quảng c&#225;o để quảng b&#225; th&#234;m cho website. Với chất lượng dịch vụ như vậy, t&#244;i vẫn sẽ lu&#244;n ở lại v&#224; đồng h&#224;nh với Bizweb.
                          </p>
                        </div>
                        <div class="customer-name">
                          &#212;ng: Ch&#226;u L&#234; Minh
                          - 
                          <a class="text-aqua" href="http://www.maytapthethao.net/" target="_blank" rel="nofollow">
                            www.maytapthethao.net
                          </a>
                          -
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="thumbnail">
                        <img src="Upload/CustomerComments/2014/10/23/e640e13a78c4583e0838e318227445ef.png" alt="" />
                      </div>
                      <div class="content">
                        <div>
                          <p>
                            Lĩnh vực &#244; t&#244; đ&#227; th&#226;m nhập v&#224;o Việt Nam từ kh&#225; l&#226;u nhưng chưa thực sự ph&#225;t triển, v&#236; vậy lấn s&#226;n v&#224;o lĩnh vực n&#224;y c&#243; rất nhiều cơ hội nhưng cũng kh&#244;ng k&#233;m rủi ro. Nhưng t&#244;i đ&#227; t&#236;m được giải ph&#225;p tối ưu cho m&#236;nh qua việc kinh doanh online c&#249;ng với Bizweb, c&#225;c bạn đ&#227; khiến t&#244;i thật sự h&#224;i l&#242;ng!”
                          </p>
                        </div>
                        <div class="customer-name">
                          &#212;ng: L&#234; Văn Hiệp
                          - 
                          <a class="text-aqua" href="http://www.toyota-thanglong.com.vn/" target="_blank" rel="nofollow">
                            www.toyota-thanglong.com.vn
                          </a>
                          -
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination">
                  </div>
                </div>
              </div>
            </div>
          </div>
        <script>
          var commentSwiper = new Swiper('#top-comments .swiper-container', {
            autoplay: 8000,
            autoplayDisableOnInteraction: false,
            slidesPerView: 1,
            grabCursor: true,
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true
          }
                                        )
        </script>
        <div class="home-supports">
          <div class="container">
            <div class="col-md-12">
              <div class="text-center padding-md-bottom">
                <h3 class="text-large">
                  Các chuyên viên tư vấn của chúng tôi
                </h3>
                <p class="caption">
                  luôn sẵn sàng hỗ trợ bạn
                </p>
              </div>
              <div class="item col-xs-6 col-sm-3 col-md-3 col-lg-2 text-center custom-supports margin-lg-bottom ">
                <div class="avatar margin-bottom">
                  <img class="img-responsive" src="Upload/Counselors/57b3b44cd7397fbabbccd9c90d7a3868.png" alt="" />
                </div>
                <div class="name margin-bottom">
                  <span class="uppercase">
                    L&#234; Hồng Sơn
                  </span>
                </div>
                <div class="position margin-bottom">
                  Tư vấn vi&#234;n - 
                  <span>
                    01699.959.345
                  </span>
                </div>
                <div class="nick">
                  <a class="skype" href="skype:leson.designer?chat">
                    <img src="/themes/v1/images/popup/skype-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <a class="yahoo" href="ymsgr:SendIM?lehongson0693">
                    <img src="/themes/v1/images/popup/yahoo-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <span class="clear">
                  </span>
                </div>
              </div>
              <div class="item col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center custom-supports margin-lg-bottom ">
                <div class="avatar margin-bottom">
                  <img class="img-responsive" src="Upload/Counselors/3546830876b187a6f76bd6be753ba3bc.png" alt="" />
                </div>
                <div class="name margin-bottom">
                  <span class="uppercase">
                    Trần Thị Hồng Thoa
                  </span>
                </div>
                <div class="position margin-bottom">
                  Tư vấn vi&#234;n - 
                  <span>
                    0909.057.911
                  </span>
                </div>
                <div class="nick">
                  <a class="skype" href="skype:hongthoa1192?chat">
                    <img src="/themes/v1/images/popup/skype-icon.png" alt="" class="event-Skype-contact" />
                  </a>
                  <a class="yahoo" href="ymsgr:SendIM?hongthoa1192">
                    <img src="/themes/v1/images/popup/yahoo-icon.png" alt="" class="event-Skype-contact" />
                  </a>
                  <span class="clear">
                  </span>
                </div>
              </div>
              <div class="item col-xs-6 col-sm-3 col-md-3 col-lg-2 text-center custom-supports margin-lg-bottom ">
                <div class="avatar margin-bottom">
                  <img class="img-responsive" src="Upload/Counselors/19f537a1dca5af2eb70ff02093b2447a.png" alt="" />
                </div>
                <div class="name margin-bottom">
                  <span class="uppercase">
                    Yến Nhi
                  </span>
                </div>
                <div class="position margin-bottom">
                  Tư vấn vi&#234;n - 
                  <span>
                    0905.678.886
                  </span>
                </div>
                <div class="nick">
                  <a class="skype" href="skype:yeni_nguyen?chat">
                    <img src="/themes/v1/images/popup/skype-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <a class="yahoo" href="ymsgr:SendIM?kagome_tinhnghich">
                    <img src="/themes/v1/images/popup/yahoo-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <span class="clear">
                  </span>
                </div>
              </div>
              <div class="item col-xs-6 col-sm-3 col-md-3 col-lg-3 text-center custom-supports margin-lg-bottom ">
                <div class="avatar margin-bottom">
                  <img class="img-responsive" src="Upload/Counselors/297b054bdcf0fdc18dbd52891b3a74f5.png" alt="" />
                </div>
                <div class="name margin-bottom">
                  <span class="uppercase">
                    Tiến To&#224;n
                  </span>
                </div>
                <div class="position margin-bottom">
                  Tư vấn vi&#234;n - 
                  <span>
                    0976.688.970
                  </span>
                </div>
                <div class="nick">
                  <a class="skype" href="skype:Tientoan89?chat">
                    <img src="/themes/v1/images/popup/skype-icon.png" alt="" class="event-Skype-contact" />
                  </a>
                  <a class="yahoo" href="ymsgr:SendIM?tientoan89_vnr">
                    <img src="/themes/v1/images/popup/yahoo-icon.png" alt="" class="event-Skype-contact" />
                  </a>
                  <span class="clear">
                  </span>
                </div>
              </div>
              <div class="item col-xs-6 col-sm-3 col-md-3 col-lg-2 text-center custom-supports margin-lg-bottom visible-lg">
                <div class="avatar margin-bottom">
                  <img class="img-responsive" src="Upload/Counselors/88b1c7c80e57d188cbe84ce12a668bb4.png" alt="" />
                </div>
                <div class="name margin-bottom">
                  <span class="uppercase">
                    Nguyễn Thị Nhẫn
                  </span>
                </div>
                <div class="position margin-bottom">
                  Tư vấn vi&#234;n - 
                  <span>
                    0937.687.111
                  </span>
                </div>
                <div class="nick">
                  <a class="skype" href="skype:nhankt_0407?chat">
                    <img src="/themes/v1/images/popup/skype-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <a class="yahoo" href="ymsgr:SendIM?nhankt_0407">
                    <img src="/themes/v1/images/popup/yahoo-icon.png" alt="" class="icon-skype event-Skype-contact" />
                  </a>
                  <span class="clear">
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="index-registration quick-registration">
          <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 margin-bottom bottom-registration">
              <h3 class="text-large">
                Đăng ký dùng thử miễn phí 15 ngày
              </h3>
              <span>
                để trải nghiệm toàn bộ tính năng
              </span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
              <input id="site_name_bottom" class="input-site-name" type="text" value="" placeholder="Nhập tên cửa hàng/doanh nghiệp của bạn" onkeypress="return onInputStoreName(event, this)" />
              <a class="btn-registration banner-home-registration event-Bizweb-Free-Trial-form-open" onclick="openCreateStorePopup(this);" href="javascript:;">
                Dùng thử miễn phí
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="footer">
        <div class="container-fluid">
          <div class="row">
            <div class="container footer-links">
              <div class="col-xs-6 col-sm-3 col-md-3">
                <h4>
                  Bizweb.vn
                </h4>
                <ul>
                  <li>
                    <a href="ve-chung-toi.html">
                      Giới thiệu Bizweb
                    </a>
                  </li>
                  <li>
                    <a href="tinh-nang-noi-bat.html">
                      Tính năng nổi bật
                    </a>
                  </li>
                  <li>
                    <a href="bang-gia.html">
                      Bảng giá
                    </a>
                  </li>
                  <li>
                    <a href="https://themes.bizweb.vn/">
                      Kho giao diện
                    </a>
                  </li>
                  <li>
                    <a href="https://apps.bizweb.vn/">
                      Kho ứng dụng
                    </a>
                  </li>
                  <li>
                    <a href="website-tham-khao.html">
                      Website tham khảo
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <h4>
                  Về chúng tôi
                </h4>
                <ul>
                  <li>
                    <a href="tam-nhin-va-gia-tri-cot-loi.html">
                      Tầm nhìn và giá trị cốt lõi
                    </a>
                  </li>
                  <li style="display:none;">
                    <a href="index.html">
                      Ý kiến khách hàng
                    </a>
                  </li>
                  <li>
                    <a href="bao-chi-noi-ve-bizweb.html">
                      Báo chí nói về chúng tôi
                    </a>
                  </li>
                  <li>
                    <a href="https://docs.bizweb.vn/quy-dinh-su-dung-87.html">
                      Quy định sử dụng
                    </a>
                  </li>
                  <li>
                    <a href="https://docs.bizweb.vn/chinh-sach-bao-mat-88.html">
                      Chính sách bảo mật
                    </a>
                  </li>
                  <li>
                    <a href="lien-he.html">
                      Liên hệ
                    </a>
                  </li>
                  <li>
                    <a href="http://tuyendung.dkt.com.vn/co-hoi-nghe-nghiep.html">
                      Gia nhập Bizweb
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-3 col-md-3 hidden-xs">
                <h4>
                  Dịch vụ
                </h4>
                <ul>
                  <li>
                    <a href="dang-ky-ten-mien.html">
                      Đăng ký tên miền
                    </a>
                  </li>
                  <li>
                    <a href="ten-mien-mien-phi.html">
                      Tên miền miễn phí
                    </a>
                  </li>
                  <li>
                    <a href="dich-vu-email-doanh-nghiep.html">
                      Dịch vụ email
                    </a>
                  </li>
                  <li>
                    <a href="dich-vu-quang-cao-google-adwords.html">
                      Quảng cáo Google Adwords
                    </a>
                  </li>
                  <li>
                    <a href="phan-mem-quan-ly-ban-hang.html">
                      Phần mềm quản lý bán hàng
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xs-6 col-sm-3 col-md-3">
                <h4>
                  Hợp tác
                </h4>
                <ul>
                  <li>
                    <a href="https://experts.bizweb.vn/">
                      Chương trình chuyên gia
                    </a>
                  </li>
                  <li>
                    <a href="doi-tac.html">
                      Chương trình đối tác
                    </a>
                  </li>
                  <li>
                    <a href="chuong-trinh-affiliate.html">
                      Chương trình affiliate
                    </a>
                  </li>
                  <li>
                    <a href="nha-phat-trien-ung-dung.html">
                      Nhà phát triển ứng dung
                    </a>
                  </li>
                  <li>
                    <a href="nha-thiet-ke-giao-dien.html">
                      Dành cho nhà thiết kế
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xs-6 visible-xs">
                <h4>
                  Trợ giúp
                </h4>
                <ul>
                  <li>
                    <a href="https://docs.bizweb.vn/help.html">
                      Trung tâm trợ giúp
                    </a>
                  </li>
                  <li>
                    <a href="http://docs.bizweb.vn/">
                      Tài liệu hướng dẫn
                    </a>
                  </li>
                  <li>
                    <a href="https://docs.bizweb.vn/hinh-thuc-thanh-toan-154.html">
                      Hình thức thanh toán
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.bizweb.vn/">
                      Blog Bizweb
                    </a>
                  </li>
                  <li>
                    <a href="http://forum.bizweb.vn/">
                      Diễn đàn
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <hr class="line-gray" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="container footer-contact">
              <div class="col-sm-3 col-md-3 hidden-xs">
                <h4>
                  Trợ giúp
                </h4>
                <ul>
                  <li>
                    <a href="http://support.bizweb.vn/">
                      Trung tâm trợ giúp
                    </a>
                  </li>
                  <li>
                    <a href="http://docs.bizweb.vn/">
                      Tài liệu hướng dẫn
                    </a>
                  </li>
                  <li>
                    <a href="https://docs.bizweb.vn/hinh-thuc-thanh-toan-154.html">
                      Hình thức thanh toán
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.bizweb.vn/">
                      Blog Bizweb
                    </a>
                  </li>
                  <li>
                    <a href="http://forum.bizweb.vn/">
                      Diễn đàn
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-sm-9 col-md-9">
                <h4>
                  Liên hệ
                  <a target="_blank" href="https://www.facebook.com/bizwebvietnam?fref=ts">
                    <i class="fa fa-facebook-square">
                    </i>
                  </a>
                  <a target="_blank" href="https://www.youtube.com/user/bizwebvietnam">
                    <i class="fa fa-youtube">
                    </i>
                  </a>
                  <a target="_blank" href="http://forum.bizweb.vn/">
                    <i class="fa fa-users">
                    </i>
                  </a>
                  <a target="_blank" href="http://blog.bizweb.vn/">
                    <i class="fa fa-weixin">
                    </i>
                  </a>
                </h4>
                <span class="uppercase">
                  Công ty cổ phần công nghệ DKT (DKT Technology JSC)
                </span>
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>
                      Trụ sở
                    </span>
                    <ul>
                      <li class="address">
                        <span class="text-infos">
                          <i class="fa fa-map-marker">
                          </i>
                          Tầng 4 - Tòa nhà Hanoi Group - 442 Đội Cấn - Ba Đình - Hà Nội
                        </span>
                      </li>
                      <li class="phone">
                        <span class="text-infos">
                          <i class="fa fa-mobile">
                          </i>
                          (04) 6674 2332 - 
                          <i class="fa fa-mobile">
                          </i>
                          (04) 3786 8904
                        </span>
                      </li>
                    </ul>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>
                      Chi nhánh
                    </span>
                    <ul>
                      <li class="address">
                        <span class="text-infos">
                          <i class="fa fa-map-marker">
                          </i>
                          Lầu 3 - Tòa nhà Lữ Gia - Số 70 Lữ Gia - P.15 - Q.11 - TP HCM
                        </span>
                      </li>
                      <li class="phone">
                        <span class="text-infos">
                          <i class="fa fa-mobile">
                          </i>
                          (08) 6680 9686 - 
                          <i class="fa fa-mobile">
                          </i>
                          (08) 3866 6276
                        </span>
                      </li>
                    </ul>
                  </div>
                </div>
                <span class="padding-sm-right">
                  Hỗ trợ ngoài giờ HC & Thứ 7, Chủ nhật:
                </span>
                <span class="text-infos">
                  <i class="fa fa-mobile">
                  </i>
                  0934 515 339 
                  <i class="fa fa-envelope">
                  </i>
                  support@bizweb.vn
                </span>
              </div>
            </div>
          </div>
          <div class="row footer-copyright">
            <div class="container">
              <div class="col-xs-12 col-sm-3 col-md-3">
                <span>
                  © Copyright 2008 - 2015
                </span>
              </div>
              <div class="col-xs-12 col-sm-9 col-md-9">
                <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-6">
                    <span>
                      Bizweb.vn - Giải pháp thiết kế web bán hàng Số 1 Việt nam
                    </span>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          /* <![CDATA[ */
          var google_conversion_id = 967817189;
          var google_custom_params = window.google_tag_params;
          var google_remarketing_only = true;
          /* ]]> */
        </script>
        <div style="display:none;">
          <script type="text/javascript" src="../www.googleadservices.com/pagead/f.txt">
          </script>
        </div>
        <noscript>
          <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/967817189/?value=0&amp;guid=ON&amp;script=0" />
          </div>
        </noscript>
        <script type="text/javascript">
          setTimeout(function () {
            var a = document.createElement("script");
            var b = document.getElementsByTagName("script")[0];
            a.src = document.location.protocol + "//dnn506yrbagrg.cloudfront.net/pages/scripts/0022/5393.js?" + Math.floor(new Date().getTime() / 3600000);
            a.async = true;
            a.type = "text/javascript";
            b.parentNode.insertBefore(a, b)
          }
                     , 1);
        </script>
      </div>
      <div id="registration" class="registration-frame" style="display: none;">
        <iframe id="iFrameRegistration" width="100%" height="700" scrolling="no" frameborder="0" style="border: none;" src="#">
        </iframe>
      </div>
      <div id="login-div" class="login-form" style="display: none;">
        <form id="login-form" method="post" action="#">
          <div class="text-center padding-sm-bottom">
            <img src="/themes/v1/images/bizweb_old_logo.png" alt="Bizweb">
          </div>
          <div class="form-group margin-bottom errors">
            <ul>
            </ul>
          </div>
          <div class="form-group subdomain hide">
            <input name="Subdomain" class="form-input" placeholder="Đường dẫn website" data-val="true" data-val-length="Đường dẫn phải dài từ 4 đến 50 ký tự" data-val-length-max="50" data-val-length-min="4" data-val-regex="Đường dẫn website không hợp lệ" data-val-regex-pattern="^[a-zA-Z0-9-_]{4,50}$" aria-invalid="false" aria-describedby="Name-error">
            <span class="subdomain-inline">
              .bizwebvietnam.net
            </span>
            <div class="has-error padding-md-left padding-sm-top">
              <span class="help-block">
                <span class="help-block field-validation-valid" data-valmsg-for="Subdomain" data-valmsg-replace="true">
                </span>
              </span>
            </div>
          </div>
          <div class="form-group">
            <input class="form-input" data-val="true" data-val-required="Nhập vào Email" data-val-email="Email không đúng định dạng" id="Email" name="Email" placeholder="Địa chỉ email" type="text" value="" aria-required="true" aria-invalid="true" aria-describedby="Email-error">
            <div class="has-error padding-md-left padding-sm-top">
              <span class="help-block">
                <span class="help-block field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true">
                </span>
              </span>
            </div>
          </div>
          <div class="form-group">
            <input name="Password" class="form-input" type="password" placeholder="Mật khẩu" data-val-required="Nhập vào mật khẩu" aria-required="true" data-val="true" data-val-length="Mật khẩu dài từ 6 đến 50 ký tự" data-val-length-max="50" data-val-length-min="6">
            <div class="has-error padding-md-left padding-sm-top">
              <span class="help-block">
                <span class="help-block field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true">
                </span>
              </span>
            </div>
          </div>
          <div class="form-group">
            <div class="form-checkbox checkbox-confirm">
              <div class="checkbox-five">
                <input class="big-checkbox" id="cbRememberMe" name="RememberMe" type="checkbox" value="true">
                <label class="checkbox-tick" for="cbRememberMe">
                </label>
              </div>
              <label for="cbRememberMe" class="checkbox-label">
                Nhớ mật khẩu
              </label>
            </div>
          </div>
          <div class="text-center">
            <button class="btn-login event-Login-form-submit" onclick="return login();" type="submit">
              Đăng nhập
            </button>
          </div>
        </form>
      </div>
      <script type="text/javascript">
        var LAST_STORE_COOKIE_NAME = "last_store"
            
            $(function () {
              var lastStore = getCookie(LAST_STORE_COOKIE_NAME);
              if (lastStore !== null && lastStore !== "") {
                $(".subdomain").removeClass("hide");
                $("#login-form input[name=Subdomain]").val(lastStore);
                $("#login-form input[name=Subdomain]").attr("aria-required", "true");
                $("#login-form input[name=Subdomain]").attr("data-val-required", "Nhập vào đường dẫn website");
                $("#login-form").removeData("validator");
                $("#login-form").removeData("unobtrusiveValidation");
                $.validator.unobtrusive.parse($("#login-form"));
              }
            }
             );
        
        $(document).ready(function () {
          $("input[name=StoreName]").blur(function () {
            $("input[name=StoreAlias]").val(generateAlias($("input[name=StoreName]").val()));
          }
                                         );
          
          var createStore = getParameterByName("createStore");
          if (createStore) {
            var storeName = getParameterByName("storeName");
            
            openCreateStorePopup(document, storeName);
          }
        }
                         );
        
        var mobile = false;
        $(window).resize(function () {
          var ww = $(window).width();
          if (ww > 855) {
            mobile = false;
            $('.fancybox-item.fancybox-close').addClass('fancybox-close-reg-web');
          }
          else {
            mobile = true;
            $('.fancybox-item.fancybox-close').removeClass('fancybox-close-reg-web');
          }
        }
                        )
          $(window).trigger('resize');
        
        function getParameterByName(name) {
          name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
          var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
              results = regex.exec(location.search);
          return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }
        
        function onInputStoreName(e, element) {
          if (e.keyCode == 13) {
            openCreateStorePopup(element);
            return false;
          }
        }
        
        function openCreateStorePopup(e, storeName) {
          var iframeSrc = 'https://store.bizwebvietnam.net/admin/createstore/quickregister?source=bizweb_home';
          
          if (!storeName)
            storeName = $(e).closest(".quick-registration").find(".input-site-name").val();
          
          if (storeName != null && storeName != "") {
            iframeSrc = setParameter(iframeSrc, "storeName", storeName);
            iframeSrc = setParameter(iframeSrc, "storeAlias", generateAlias(storeName));
          }
          
          var kd = getParameterByName("kd");
          if (kd !== null && kd !== "")
            setCookie("kd", kd, 30);
          
          kd = getCookie("kd");
          if (kd !== null && kd !== "")
            iframeSrc = setParameter(iframeSrc, "kd", kd);
          
          var ref = getParameterByName("ref");
          if (ref !== null && ref !== "")
            setCookie("ref", ref, 30);
          
          ref = getCookie("ref");
          if (ref !== null && ref !== "")
            iframeSrc = setParameter(iframeSrc, "ref", ref);
          
          $('#registration iframe').attr('src', iframeSrc);
          
          $.fancybox.open({
            fitToView: false,
            closeClick: false,
            openEffect: 'fade',
            closeEffect: 'fade',
            href: "#registration",
            width: "100%",
            maxWidth: 847,
            autoSize: false,
            autoHeight: true,
            margin: [20, 0, 20, 0],
            'afterShow': function () {
              $('.fancybox-item.fancybox-close').addClass('fancybox-close-reg');
              if (mobile == false) {
                $('.fancybox-item.fancybox-close').addClass('fancybox-close-reg-web');
              }
            }
            ,
            'afterClose': function () {
              $('.fancybox-item.fancybox-close').removeClass('fancybox-close-reg');
              $('.fancybox-item.fancybox-close').removeClass('fancybox-close-reg-web');
            }
          }
                         );
        }
        
        function generateAlias(text) {
          text = text.toLowerCase();
          text = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
          text = text.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
          text = text.replace(/ì|í|ị|ỉ|ĩ/g, "i");
          text = text.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
          text = text.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
          text = text.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
          text = text.replace(/đ/g, "d");
          text = text.replace(/'|\"|\(|\)|\[|\]/g, "");
          text = text.replace(/\W+/g, "-");
          if (text.slice(-1) === "-")
            text = text.replace(/-+$/, "");
          
          if (text.slice(0, 1) === "-")
            text = text.replace(/^-+/, "");
          
          return text;
        }
        
        function openLoginPopup() {
          $.fancybox.open({
            fitToView: false,
            closeClick: false,
            openEffect: 'fade',
            closeEffect: 'fade',
            href: "#login-div",
            autoSize: true,
            margin: [20, 0, 20, 0]
          });
        }
        
        function login() {
          var bizwebDomain = 'https://store.bizwebvietnam.net/';
          var findSubdomainSrc = bizwebDomain + '/admin/services/findsubdomain';
          
          $("#login-form .errors ul").html("");
          
          if ($("#login-form").valid()) {
            $.ajax({
              url: findSubdomainSrc,
              type: "POST",
              data: $("#login-form").serialize(),
              success: function (data) {
                var loginSubdomain = $("#login-form input[name=Subdomain]").val();
                if (data != null && (loginSubdomain === null || loginSubdomain === ""))
                  loginSubdomain = data.subdomain;
                
                var action = bizwebDomain.replace("store", loginSubdomain) + "/admin/authorization/login";
                
                setCookie(LAST_STORE_COOKIE_NAME, loginSubdomain, 365);
                
                $("#login-form").attr("action", action);
                $("#login-form").submit();
              },
              error: function (data) {
                if (data.responseJSON != null && data.responseJSON.error != null) {
                  if (data.responseJSON.error) {
                    $("#login-form .errors ul").append("<li>Bạn nhập sai email hoặc mật khẩu.</li>");
                  }
                }
                else if (data.responseJSON != null && data.responseJSON.suggest != null) {
                  var message = "Có phải ý bạn là: '" + data.responseJSON.suggest + "' ?";
                  $(".subdomain .help-block .help-block").append("<span id='Subdomain-error' class=''>" + message + "</span>");
                }
                else if (data.responseJSON != null && data.responseJSON.multiple != null) {
                  $(".subdomain").removeClass("hide");
                  $(".subdomain .help-block .help-block").append("<span id='Subdomain-error' class=''>Có nhiều hơn một cửa hàng đăng ký dưới email này. Xin hãy nhập đường dẫn website để đăng nhập.</span>");
                }
                else {
                  $("#login-form .errors ul").append("<li>Bạn nhập sai email hoặc mật khẩu.</li>");
                }
              }
            });
          }
          
          return false;
        }
        
        function getCookie(cname) {
          var name = cname + "=";
          var ca = document.cookie.split(';');
          for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
          }
          return "";
        }
        function setCookie(cname, cvalue, exdays) {
          if (!exdays)
            exdays = 30;
          
          var d = new Date();
          d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
          var expires = "expires=" + d.toGMTString();
          document.cookie = cname + "=" + cvalue + "; " + expires + ";domain=.bizweb.vn;path=/";
        }
        
        function setParameter(url, paramName, paramValue) {
          if (url.indexOf(paramName + "=") >= 0) {
            var prefix = url.substring(0, url.indexOf(paramName));
            var suffix = url.substring(url.indexOf(paramName));
            suffix = suffix.substring(suffix.indexOf("=") + 1);
            suffix = (suffix.indexOf("&") >= 0) ? suffix.substring(suffix.indexOf("&")) : "";
            url = prefix + paramName + "=" + paramValue + suffix;
          }
          else {
            if (url.indexOf("?") < 0)
              url += "?" + paramName + "=" + paramValue;
            else
              url += "&" + paramName + "=" + paramValue;
          }
          
          return url;
        }
      </script>
      <!-- Start of LiveChat (www.livechatinc.com) code -->
      <script type="text/javascript">
        var __lc = {
        };
        __lc.license = 4036971;
        
        $(function () {
          (function () {
            var lc = document.createElement('script');
            lc.type = 'text/javascript';
            lc.async = true;
            lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(lc, s);
          }
          )();
        }
         );
      </script>
      <style type="text/css">
        #livechat-full, #livechat-compact-container, #livechat-eye-catcher {
          right: 0px !important;
        }
        
        #livechat-compact-container {
          width: 253px !important;
          height: 70px !important;
        }
        
        #livechat-eye-catcher {
          bottom: 50px !important;
        }
        
        #livechat-eye-catcher a:first-child {
          right: 8px !important;
        }
        #livechat-eye-catcher.fancybox-margin
        {
          margin-right: 17px !important;
          padding-right: 0 !important;
        }
      </style>
      <!-- End of LiveChat code -->
      
  </div>
  
  <script type="text/javascript">
    $(function () {
      var agent = navigator.userAgent;
      if (/Safari/.test(agent) && !/Chrome/.test(agent)) {
        if ($.cookie("firstTimeSession") == null) {
          var returnUrl = encodeURIComponent(window.location.href);
          $.cookie("firstTimeSession", 1, {
            expires: 1, path: '/' }
                  );
          window.location = _defaultRegistrationAddress + '?userAgent=safari&returnUrl=' + returnUrl;
        }
      }
    }
     );
  </script>
</body>

<!-- Mirrored from www.bizweb.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 31 Oct 2015 04:04:30 GMT -->
</html>
<strong>
</strong>