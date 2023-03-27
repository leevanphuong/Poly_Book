<div class="pl-5 pt-5">
    <div class="pb-4">Danh sách bình luận Fbook</div>
    
    <div class="pb-3">
        <table class="border w-full">
            <tr class="bg-blue-500">
                    <th></th>
                    <th>ID</th>
                    <th>Nội dung bình luận</th>
                    <th>idUser</th>
                    <th>idPro</th>
                    <th>Ngày bình luận</th>
                    <th></th>
            </tr>
            <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);

                    $suabl = "index.php?act=suabl&id=" . $id_cmt;
                    $xoabl = "index.php?act=xoabl&id=" . $id_cmt;

                    echo '<tr>
                            <td class="border-x text-center w-[1%]"><input type="checkbox" name=""></td>
                            <td class="border-x text-center w-[2%]">' . $id_cmt . '</td>
                            <td class="border-x text-center w-[8%]">' . $content . '</td>
                            <td class="border-x text-center w-[5%]">' . $id_user . '</td>
                            <td class="border-x text-center w-[5%]">' . $id_pro . '</td>
                            <td class="border-x text-center w-[5%]">' . $date . '</td>
                            <td class="border-x text-center w-[5%]"><a href="' . $xoabl . '"><input class="border w-[100px] hover:bg-blue-400 rounded-lg" type="button" name="" value="Xóa"></a></td>
                        </tr>';
                }
                ?>
                 
        </table>
        
    </div>
    
</div>