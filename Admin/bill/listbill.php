<div class="pl-5 pt-5">
    <div class="pb-4">Danh sách đơn hàng Fbook</div>
    <div class="pb-3">
        <form action="index.php?act=listbill" method="post">

            <input type="text" name="kyw" class="border" placeholder="Nhập phần số mã đơn">
            <input type="submit" class="border w-[40px] bg-gray-500 rounded-lg hover:bg-blue-500" name="listok" value="Go">
        </form>
    </div>
    <div class="pb-3">
        <table class="border w-full">
            <tr class="bg-blue-500">
                <th></th>
                <th>Mã đơn hàng</th>
                <th>Người Đặt</th>
                <th>Số lượng mặt hàng</th>
                <th>Tổng giá trị đơn hàng</th>
                <th>Tình trạng đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Thao tác</th>
            </tr>
            <?php 
                if(is_array($listbill)){
                    foreach($listbill as $bill){
                        extract($bill);
        
                        $suabill = "index.php?act=suabill&id=" . $bill['id_bill'];
                        $xoabill = "index.php?act=xoabill&id=" . $bill['id_bill'];
                        $kh=$bill["bill_name"].'
                        <br>'.$bill["bill_email"].'
                        <br>'.$bill["bill_address"].'
                        <br>'.$bill["bill_tel"];
                        $ttdh=get_ttdh($bill['bill_status']);
                        $countsp=loadall_cart_count($bill['id_bill']);
                        echo '<tr>
                        <td class="border-x text-center w-[5%]"><input type="checkbox"></td>
                        <td class="border-x text-center w-[15%]">SP-'.$bill['id_bill'].'</td>
                        <td class="border-x text-center w-[15%]">'.$kh.'</td>
                        
                        <td class="border-x text-center w-[5%]">'.$countsp.'</td>
                        <td class="border-x text-center w-[10%]">'.$bill['total'].'</td>
                        <td class="border-x text-center w-[10%]">'.$ttdh.'</td>
                        <td class="border-x text-center w-[10%]">'.$bill['order_date'].'</td>
                        <td class="border-x text-center w-[15%]"><a href="' . $suabill . '"><input type="button" name="" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a> <a href="' . $xoabill . '"><input type="button" class="border w-[100px] hover:bg-blue-400 rounded-lg" name="" value="Xóa"></a></td>
                    </tr> ';
                    }
                }
                ?>
                
        </table>
        
    </div>
    <div>
        <input type="button" class="border hover:bg-gray-300 rounded-lg w-[120px]" value="Chọn tất cả">
        <a href="index.php?act=addbill"><input type="button" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Thêm mới"></a>
    </div>
</div>