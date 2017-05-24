$(document).ready(function () {
   $("#product-begin_date_sale_off").datepicker({ dateFormat : 'yy-mm-dd'});
   $("#product-end_date_sale_off").datepicker({ dateFormat : 'yy-mm-dd'});
    var host = window.location.href;
    host=host.split("backend");
      tinymce.init({
        selector: 'textarea#content',
        height: 350,
        width:"",
        plugins: [
            "codemirror advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars fullscreen",
            "insertdatetime media nonbreaking save table contextmenu directionality",
            "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
        ],
        toolbar1: "undo redo bold italic underline strikethrough cut copy paste| alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace | styleselect formatselect fontselect fontsizeselect ",
        toolbar2: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
        image_advtab: true,
        image_advtab: true,
        menubar: false,
        toolbar_items_size: 'small',
        relative_urls: false, 
        remove_script_host : false,
        filemanager_title:"Media Manager",  
        external_filemanager_path: host[0]+"filemanager/",
        external_plugins: { "filemanager" : host[0]+"/filemanager/plugin.min.js"},
        // filemanager_access_key:csrf(),
    });
       $('button#select-img').click(function(event) {
          /* Act on the event */
        event.preventDefault();
        $('#modal-media-image').modal('show');
        $('#modal-media-image').on('hide.bs.modal', function (e) {
            var imgUrl= $('input#image').val();
            var style='height:200px; width:160px';
            $('img#show_img').attr('src',imgUrl);
            $('img#show_img').attr('style',style);
        });
      });
    var imgUrl= $('input#image').val();
    if(imgUrl!=''){
        var style='height:200px; width:160px';
        $('img#show_img').attr('style',style);
        $('img#show_img2').attr('style',style);
        $('img#show_img3').attr('style',style);
    }
    $('button#remove-img').click(function(event) {
        /* Act on the event */
        var imgUrl= $('input#image').val('');
        $('img#show_img').attr('src','');
    });
    $('button#select-img-new').click(function(event) {
        /* Act on the event */
        event.preventDefault();
        $('#modal-media-image-new').modal('show');
        $('#modal-media-image-new').on('hide.bs.modal', function (e) {
            var imgUrl= $('input#image-new').val();
            var style='height:200px; width:160px';
            $('img#show_img_new').attr('src',imgUrl);
            $('img#show_img_new').attr('style',style);
        });
    });
    var imgUrl= $('input#image-new').val();
    if(imgUrl!=''){
        var style='height:200px; width:160px';
        $('img#show_img_new').attr('style',style);
    }
    $('button#remove-img-new').click(function(event) {
        /* Act on the event */
        var imgUrl= $('input#image-new').val('');
        $('img#show_img_new').attr('src','');
    });
      $('button#select-img2').click(function(event) {
          /* Act on the event */
        event.preventDefault();
        $('#modal-media-image2').modal('show');
        $('#modal-media-image2').on('hide.bs.modal', function (e) {
            var imgUrl= $('input#image2').val();
            var style='height:200px; width:160px';
            $('img#show_img2').attr('src',imgUrl);
            $('img#show_img2').attr('style',style);
        });
      });
    $('button#remove-img2').click(function(event) {
          /* Act on the event */
        var imgUrl= $('input#image2').val('');
        $('img#show_img2').attr('src','');
      });
      $('button#select-img3').click(function(event) {
          /* Act on the event */
        event.preventDefault();
        $('#modal-media-image3').modal('show');
        $('#modal-media-image3').on('hide.bs.modal', function (e) {
            var imgUrl= $('input#image3').val();
            var style='height:200px; width:160px';
            $('img#show_img3').attr('src',imgUrl);
            $('img#show_img3').attr('style',style);
        });
      });
    $('button#remove-img3').click(function(event) {
          /* Act on the event */
        var imgUrl= $('input#image3').val('');
        $('img#show_img3').attr('src','');
      });
});


