<?php
$this->title = "báo cáo";
$this->params['breadcrumbs'][] = $this->title;

?>
<div id="content-report">
    <h3>Thống kê Sản phẩm không bán được trong tháng</h3>
    <div id="input-report">
        <select name="thang" id="thang">
            <option value="0">-Chọn tháng-</option>
            <option value="1">Tháng 1</option>
            <option value="2">Tháng 2</option>
            <option value="3">Tháng 3</option>
            <option value="4">Tháng 4</option>
            <option value="5">Tháng 5</option>
            <option value="6">Thang 6</option>
            <option value="7">Tháng 7</option>
            <option value="8">Tháng 8</option>
            <option value="9">Thang 9</option>
            <option value="10">Tháng 10</option>
            <option value="11">Tháng 11</option>
            <option value="12">Tháng 12</option>

        </select>
        <a href="javascript:void(0)" onclick="report();">In thống kê</a>
    </div>
    <br/>
    <div id="product-report">

        <div class='table-responsive'>
            <table class='table table-striped table-bordered '>
                <tr class='success item-title'>
                    <td>STT</td>
                    <td>Sản phẩm giá</td>
                    <td> Giá</td>
                    <td> Chiết Khấu</td>
                    <td>sản phẩm mua nhiều</td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
    var date = new Date();
    var url1 = "<?=Yii::$app->getUrlManager()->getBaseUrl()?>/";
    function report() {
        var months = $("#thang").val();
        var years = date.getFullYear();
        var product = $("#product");
        if (months == 0) {
            alert("chưa chọn tháng");
        }
        else {
            $.ajax({

                url: url1 + "report",// gửi ajax đến file result.php
                type: "post", // chọn phương thức gửi là post
                dateType: "jsonp", // dữ liệu trả về dạng text
                data: { // Danh sách các thuộc tính sẽ gửi đi
                    month: months,
                    year: years
                },
                success: function (result) {
                    var data = jQuery.parseJSON(result);
                    var i;
                    var out = "<div class='table-responsive'><table class='table'><tr class='success item-title'><td>STT</td><td>Sản phẩm giá</td><td> Giá</td><td> Chiết Khấu</td> <td>Chi tiết sản phẩm</td></tr>";
                    for (i = 0; i < data.length; i++) {
                        // if(data[i].Muanhieu==0)
                        // {
                        //    kt="disenable ishot";
                        // }
                        // else
                        // {
                        // 	kt="enable ishot";
                        // }
                        out += "<tr><td>" + (i + 1) + "</td><td>" +
                            data[i].pro_name +
                            "</td><td>" +
                            formatnumber(data[i].pro_price) + " đ" +
                            "</td><td algin='center'>" +
                            data[i].pro_sale_off + " %" +
                            "</td> <td><a href='" + url1 + "product/update?id=" + data[i].pro_id + "'>Xem chi tiết</a></td></tr>";
                    }
                    out += "</table></div>";
                    $("#product-report").html(out);
                }

            });
        }
    }
    function formatnumber(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }
</script>