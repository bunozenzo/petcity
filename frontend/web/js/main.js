$(document).ready(function () {
     $("#customersignup-birth").datepicker({ dateFormat : 'yy-mm-dd'});
     $("#sig-width3").datepicker({ dateFormat : 'yy-mm-dd'});

     $(".view a").click(function(){
        event.preventDefault();
        var href=$(this).attr('href');
         var name=$(this).attr('data-name');
        $.ajax({
            url: href,
            type: 'GET',
            data: {},
            success:function(res){
                if(res=='ok'){
                    $('#alert-pro-name').html('Sản phẩm <strong>'+ name +'</strong> đã thêm vào giỏ hàng')
                    $('#modal-add-cart').modal('show');
                }else if(res=='false'){
                    $('#alert-pro-name').html('Sản phẩm <strong>'+ name +'</strong> chỉ được đặt 5 sản phẩm')
                    $('#modal-add-cart').modal('show');
                }
                else{
                    $('#alert-pro-name').html('Sản phẩm <strong>'+ name +'</strong> đã hết hàng')
                    $('#modal-add-cart').modal('show');
                }
            }
        });
    });
    $('.order_login').hide();
    $('.order_tiep').hide();
    $('.product_detail_img_list img').click(function(event) {
      var href=$(this).attr('src');
      $('#show_img').attr('src', href);
      $('#show_img').attr('data-zoom-image', href);
    });
     $('input[type="checkbox"]').click(function(){
        var name=$("#name").val();
        var email=$("#email").val();
        var phone=$("#phone").val();
        var address=$("#address").val();
        $('#name_ship').attr('value', name);
        $('#email_ship').attr('value', email);
        $('#phone_ship').attr('value', phone);
        $('#address_ship').attr('value', address);
        });
    $("img#show_img").elevateZoom({
        gallery:'gallery_01', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'
    }); 
   $("#login").click(function(){
    event.preventDefault();
    var out="";
    var href=$(this).attr('href');
    var name=$(this).attr('data-name');
    var username=$("#username").val();
    var password=$("#password").val(); 
    if(username=='' || password==''){
           $('#login-title').html('Username hoặc password không được để trống')
    }else{
    $.ajax({
        url: href,
        type: "post",
        data: {
            username:username,
            password:password
        },
        success:function(res){
            // var data=jQuery.parseJSON(res);
            if(res=="ok"){
                 $('#modal-id-login').modal('hide');
                  out+="<div class='btn-group'><span class='username'>";
                  out+=username;
                  out+="</span><span class='caret' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'></span>";
                  out+="<ul class='dropdown-menu'>";
                  out+="<li><a href='#'>Thông tin cá nhân</a></li>";
                  out+="<li><a href='#''>Đơn hàng</a></li>";
                  out+="<li role='separator' class='divider'></li>";
                  out+="<li><a href='"+root()+"/site/logout' data-method='post'>Thoát</li>";
                  out+=" </ul>";
                  out+="  </div>";
                $("#my_list").html(out);  
            }
            else{
                  $('#login-title').html('Thông tin đăng nhập không chính xác')
            }
        }
    });

    }
    });
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1041659385979027',
          xfbml      : true,
          version    : 'v2.8'
        });
        FB.AppEvents.logPageView();
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
});
$(document).ready(function () {
    $('.view-fast').click(function () {
        var pro_id=$(this).parent().find('#pro_id').val();
        var pro_status=$(this).parent().find('#pro_status').val();
        var pro_price=$(this).parent().find('#product_price').val();
        var pro_img=$(this).parent().parent().children().children().children('img').attr('src');
        var pro_name=$(this).parent().parent().find('.pro_name').html();
        $('#view-fast').modal('show');
        $('img#show_img').attr('src',pro_img);
        $('.product_title').html(pro_name);
        $('.pro_status').html(pro_status);
        $('.product_price-info').html(pro_price);
        $('#product_id').val(pro_id);

    });
});


