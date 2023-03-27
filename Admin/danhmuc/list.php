<div class="pl-5 pt-5">
    <div class="pb-4">Danh sách danh mục Fbook</div>
    <div class="pb-3">
        <table class="border-3 w-full">
            <tr class="bg-blue-500">
                <th ></th>
                <th >Mã loại</th>
                <th >Tên loại</th>
                <th></th>
            </tr>
            <?php 
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id_category;
                    $xoadm="index.php?act=xoadm&id=".$id_category;
                    echo '<tr class="border">
                    <td class="border-x text-center w-[10%]"><input type="checkbox"></td>
                    <td class="border-x text-center w-[20%]">'.$id_category.'</td>
                    <td class="border-x text-center w-[45%]">'.$name_category.'</td>
                    <td class="border-x text-center w-[25%]"><a class="pr-4" href="'.$suadm.'"><input type="button" class="border w-[100px] hover:bg-blue-400 rounded-lg" value="Sửa"></a><a href="'.$xoadm.'"><input type="button" class="border w-[100px] hover:bg-red-500 rounded-lg" value="Xóa"></a></td>
                </tr>';
                }
            ?>         
        </table>
        
    </div>
    <div>
        <input type="button" class="border hover:bg-gray-300 rounded-lg w-[120px]" value="Chọn tất cả">
        <a href="index.php?act=adddm"><input type="button" class="border hover:bg-gray-300 rounded-lg w-[100px]" value="Thêm mới"></a>
    </div>
</div>