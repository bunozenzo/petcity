<?php 

$this->title="Doanh thu";
$this->params['breadcrumbs'][] = $this->title;

?>

<div id="doanhthu">
	<h3>Doanh thu bán sản phẩm</h3>
        <div class="info-table">
        Tháng: <input type="number" name="month" id="month"> Năm: <input type="number" name="year" id="year" > <a href="javascript:void(0)" onclick="doanhthu();">Báo cáo</a>
        </div>
        <div id="report-doanhthu">
		<br/>
		<div class='table-responsive'>
            <table class='table' >
                <tr  class="success item-title"><td >STT</td><td>Mã Hóa đơn</td><td> Ngày đặt Hàng</td><td>Tiền đơn hàng</td> <td>Xem chi tiết đơn hàng</td>
                </tr>
            </table>
        </div>
	</div>
</div>
<script>
	var date = new Date();
	var url1="<?=Yii::$app->getUrlManager()->getBaseUrl()?>/";
    var out="";
	function doanhthu()
	{
		var months=$("#month").val();
		var years=$("#year").val();
         $.ajax({   
        url : url1+"report/turnover",// gửi ajax đến file result.php
        type : "post", // chọn phương thức gửi là post
        dateType:"jsonp", // dữ liệu trả về dạng text
        data : { // Danh sách các thuộc tính sẽ gửi đi
             month : months,
             year:years,
       	},
        success : function (result){
            var data=jQuery.parseJSON(result);
            var i;
            var tongtien=0;
             out= "<br/><div class='table-responsive'><table class='table'  ><tr class='success item-title'><th>STT</th><th>Mã Hóa Đơn</th><th>Ngày Đặt Hàng</th><th> Tiền đơn hàng </th> <th>Xem chi tiết đơn hàng</th></tr>";
			    for(i =0; i<data.length; i++) {
                    tongtien+= parseInt(data[i].order_amount);
			        out += "<tr><td>"+(i+1)+"</td><td>"+
			        data[i].order_id+
			        "</td><td>" +
			        data[i].date_create+
			        "</td><td algin='center'>" +
			        formatnumber(data[i].order_amount)+"VNĐ" +
			        "</td> <td><a href='"+url1+"order-detail?/view?id="+data[i].order_id+"' title=''>xem chi tiết</a></td></tr>";
			    }
			    out+="<tr> <td colspan='3' algin='right'>Tổng Tiền</td> <td colspan='2'>"+formatnumber(tongtien)+" đ"+"</td> </tr>";
			    out += "</table></div>";
            $("#report-doanhthu").html(out);
		}
    });



		}
function formatnumber(nStr)
{
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


