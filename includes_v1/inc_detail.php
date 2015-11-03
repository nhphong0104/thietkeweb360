<div class="container">
        <div class="row margin-top-40">
            <div class="clear"></div>
            <div id="wrapper" class="default-wrapper">
                

<div id="theme-detail">
    <div class="row form-group">
        <div class="col-lg-12">
            <div class="col-md-4 theme-detail">
                <div class="page-header">
                    <h1>Company 01 - Batakoo</h1>
                </div>
                <div>
                    <span>
                        <p>Giao diện dành cho các doanh nghiệp có thể giới thiệu thông tin của doanh nghiệp mình đến với các đối tác cũng như những đối tượng khác.</p>

<p>Giao diện thích hợp với nhiều loại màn hình thiết bị như máy tính, điện thoại và máy tính bảng</p>

                    </span>
                </div>
                <div>
                    <h2>Miễn phí</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="quick-registration">
                            <a href="javascript:void(0)" class="btn-registration banner-home-registration event-Template-apply-form-open" data-toggle="modal" data-target="#myModal">Sử dụng giao diện này</a>
                            <p>hoặc</p>
                            <a href="/demo/company-01-batakoo" class="btn-registration view-demo full-type" target="_blank">Xem demo</a>
                        </div>
                    </div>
                </div>
                <div class="theme-author">
                    <h4>Nhà phát triển giao diện</h4>
                    <p class="desc">Giao diện phát triển bởi Team Avent</p>
                    <div class="theme-nav">
                        <a href="mailto:aventteam@gmail.com">Liên hệ hỗ trợ</a>
                        <a href="https://docs.bizweb.vn/quy-dinh-su-dung-87.html" target="_blank">Điều khoản dịch vụ</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row padding-bottom-md">
                    <div class="col-xs-8 dvDetail dvimgTheme">
                        <div style="margin: 0 auto;">
                            <a target="_blank" href="/demo/company-01-batakoo" class="view-demo thumbnail full-type">
                                <img src="https://s3-ap-southeast-1.amazonaws.com/bizweb-themes/themes/1043/themestores/97107c92cd21f49ad46e41168cb4cf39.jpg?1446534363400" class="img-theme">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4 dvDetail">
                        <div class="p-rel">
                            <div class="main-screenshot" style="height: 609px;">
                            </div>
                            <div class="iphone-position">
                                <div class="iphone-screenshot">
                                    <span class="iphone">
                                        <a target="_blank" href="/demo/company-01-batakoo" class="view-demo full-type">
                                            <img src="https://s3-ap-southeast-1.amazonaws.com/bizweb-themes/themes/1043/themestores/f5ff0cf3efd38be9e559c43526922aab.jpg?1446534363400">
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="col-lg-12">
        <div class="theme-type">
            <div class="page-header">
                <h2>Giao diện cùng loại</h2>
            </div>
            <div>
                <div id="divTheme">
                    <div class="skins-home-items">
                       <div class="skin-item nn-prod-box">
                           <a title="Xem chi tiết" href="/beauty-02-aqua-spa" class="thumbnail">
                               <div class="">
                                   <img class="img-responsive" alt="" src="https://s3-ap-southeast-1.amazonaws.com/bizweb-themes/themes/1042/themestores/4ac22e076ebef1bfa3892781ed543457.jpg?1446484639790">
                                   <div class="nn-prod-icon">
                                       <h4>Beauty 02 - Aqua Spa</h4>
                                       <span>Miễn phí</span>
                                   </div>
                               </div>
                           </a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-themes">
                <div class="modal-header" style="padding-right:0;">
                    <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body text-center">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <h3>Bạn đã có website tại Bizweb</h3>
                        </div>
                        <form method="get" action="" id="formLoginRedirect" onsubmit="return redirectToBackend()" novalidate="novalidate">
                            <input id="Alias" name="Alias" type="hidden" value="company-01-batakoo">
                            <div class="form-group dvmodal quick-registration">
                                <div class="col-sm-8">
                                    <input name="storeAlias" type="text" placeholder="http://store.bizwebvietnam.net" class="input-site-name">
                                </div>
                                <div class="col-sm-4">
                                    <button id="btnLogin" type="submit" class="btn-registration banner-home-registration btn-login-store">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Đăng nhập &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                                </div>
                            </div>
                            <script type="text/javascript">
                                function redirectToBackend() {
                                    var store = $("#formLoginRedirect input[name='storeAlias']").val();
                                    if (store == "")
                                    {
                                        alert("Vui lòng nhập địa chỉ website");
                                        $("#formLoginRedirect input[name='storeAlias']").focus();
                                        return false;
                                    }
                                    if (store.indexOf(".") > -1) {
                                        if (!store.startsWith("http")) {
                                            store = "http://" + store;
                                        }
                                        var url = new URL(store);
                                        store = url.hostname;
                                        store = store.replace(".bizwebvietnam.net", "");
                                    }

                                    window.location.href = "http://" + store + ".bizwebvietnam.net/admin/themes/install?alias=company-01-batakoo";
                                    return false;
                                }
                            </script>
                        </form>
                        <hr style="margin: 20px 0; border-bottom: 1px solid #e0e0e0;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <h3>Tạo website bán hàng miễn phí trong 30s</h3>
                                <p>Đã có hơn 10.000 khách hàng tin tưởng và sử dụng Bizweb, bạn có muốn trải nghiệm miễn phí Bizweb miễn phí 15 ngày không</p>
                            </div>
                        </div>
                        <div class="form-group dvmodal quick-registration">
                            <div class="col-sm-8 dv_modal">
                                <input type="text" placeholder="Nhập tên cửa hàng/doanh nghiệp của bạn" class="input-site-name">
                            </div>
                            <div class="col-sm-4">
                                <button id="btnSearch" type="button" class="btn-registration event-Bizweb-Free-Trial-form-open" onclick="openCreateStorePopup(this, null, 'company-01-batakoo')">
                                    Dùng thử miễn phí
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var $window = $(window);
        zindex();
        $window.resize(function () {
            zindex();
            //console.log($(window).width());
        });
        function zindex() {
            var height = $('.img-theme').css("height");
            //console.log(height);
            $('.main-screenshot').css("height", height);
            //$('#vh').html($(window).width());
        }

        var iOS = /iPad|iPhone|iPod/.test(navigator.platform);
        if (!iOS) {
            $("a.view-demo").attr("href", "/demo/company-01-batakoo");
        }
    });
</script>
                <div class="clear"></div>
            </div>
        </div>
    </div>