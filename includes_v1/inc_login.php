<div id="login-div" class="login-form" style="display: none;">
    <form id="login-form" method="post" action="">
      <div class="text-center padding-sm-bottom">
        <img src="/Themes/Portal/Default/Images/bizweb_old_logo.png" alt="Bizweb">
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
      var iframeSrc = 'https://store.bizwebvietnam.net/admin/createstore/quickregister?source=bizweb_themes';
      
      if (!storeName)
        storeName = $(e).closest(".quick-registration").find(".input-site-name").val();
      
      if (storeName != null && storeName != "") {
        iframeSrc = setParameter(iframeSrc, "storeName", storeName);
        iframeSrc = setParameter(iframeSrc, "storeAlias", generateAlias(storeName));
      }
      
      var kd = getCookie("kd");
      if (kd !== null && kd !== "")
        iframeSrc = setParameter(iframeSrc, "kd", kd);
      
      var ref = getCookie("ref");
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
      var bizwebDomain = 'https://store.bizwebvietnam.net';
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