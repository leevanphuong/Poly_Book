    <!-- header -->
    <div class=" flex">
        <div class="container mx-auto flex justify-between ">
            <div class="mt-3">
                <div class="bg-blue-800 shadow-lg rounded-md mx-3">
                <!--search-->    
                <form action="index.php?act=sanpham" method="post">
                        <input class="w-[250px] text-sm bg-blue-800 mx-1 my-1 border-none" type="text" name="kyw" placeholder="Tìm kiếm sách">
                        <input type="submit" name="timkiem" class="fa fa-search text-white bg-blue-800" value="Tìm">
                    </form>
                </div>
            </div>
            <div class="mr-[200px]">
                <a href="index.php"><img class="w-[160px] h-[60px] object-cover" src="./view/img/6bf3c149feae38f061bf.jpg" alt=""></a>
            </div>
            <div class="flex justify-between my-2 mt-3">
                <?php include "dangnhap.php";?>
            </div>
        </div>
    </div>
    <div class="">
        <img class="slide_img" src="./view/img/ms_banner_img1.webp" alt="">
        <img class="slide_img" src="./view/img/ms_banner_img2.webp" alt="">
        <img class="slide_img" src="./view/img/ms_banner_img3.webp" alt="">
        <img class="slide_img" src="./view/img/ms_banner_img4.webp" alt="">
        <img class="slide_img" src="./view/img/ms_banner_img5.webp" alt="">
        <a href="#">
            <p class="absolute text-gray-500 bg-gray-200 top-[32%] left-0 opacity-50 hover:opacity-80 h-[55px] text-5xl "
                onclick="h2()"><
                 </p>
        </a>
        <a href="#">
            <p class="absolute text-gray-500 bg-gray-200 top-[32%] right-0 opacity-50 hover:opacity-80 h-[55px] text-5xl"
                onclick="h1()">></p>
        </a>
    </div>
    <!-- nav -->
    <div class=" absolute left-[250px] flex container mx-auto nav top-[98px] ">
        <div class="dropdown bg-red-500">
            <button class="dropbtn"><button class="btn"><i class="fa fa-bars"></i></button>Danh mục sản phẩm</button>
            <div class="dropdown-content w-[230px]">
                    <?php
                    foreach($dmnew as $dm){
                        extract($dm);
                        $linkdm="index.php?act=sanpham&iddm=".$id_category;
                        echo '<li><a href="'.$linkdm.'">'.$name_category.'</a></li>';
                        }
                ?>
            </div>
        </div>
        <div class="dropdown mt-1.5 mx-4">
            <button class="dropbtn text-black">Tin tức <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content w-[200px]">
                <a href="#">Hoạt động</a>
                <a href="#">Sự kiện</a>
                <a href="#">Điểm sách</a>
                <a href="">Lịch phát hành định kì</a>
            </div>
        </div>
        <div class="dropdown mt-1.5 ">
            <button class="dropbtn text-black">Giới thiệu <i class="fa fa-caret-down"></i></button>
            <div class="dropdown-content w-[230px]">
                <a href="#">Giới thiệu về nhà xuất bản</a>
                <a href="#">Tác giả - Tác phẩm</a>
                <a href="#">Công tác xã hội</a>
                <a href="">Khen thưởng nhà nước</a>
                <a href="">Hợp tác quốc tế</a>
                <a href="">Hệ thống nhà sách</a>
            </div>
        </div>
    </div>
<div class=" container mx-auto">
        <h2 class="text-center text-2xl font-bold mt-[430px]">Sách mới</h2>
    </div>
    <!-- sách mới -->
    <div class="container mx-auto grid grid-cols-5 gap-10 mt-5">
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner" src="./view/img/5_79c47034a4a04a75bcfc70588373a358_large.webp" alt="">
            <p class="text-sm font-medium">TANAKA LÚC NÀO CŨNG VẬT VỜ </p>
            <div>
                <span class="text-red-400 float-left">34,200₫</span>
                <span class="text-red-300 float-right line-through ">38,200₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner" src="./view/img/7_e6e04ab2432b4e17badade079dc2ef7e_large.jpg" alt="">
            <p class="text-sm font-medium">BÁ TƯỚC TIỂU THƯ</p>
            <div>
                <span class="text-red-400 float-left">27,000₫</span>
                <span class="text-red-300 float-right line-through ">30,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./view/img/pokemon-best-wish---kyurem-vs-thanh-kiem-si-keldeo_63a19a9793e94f149a36aeb4be2028a3_large.jpg"
                alt="">
            <p class="text-sm font-medium">POKÉMON BEST WISHES - KYUREM
            <p style="display:none;">VS. THÁNH KIẾM SĨ KELDEO</p>
            </p>
            <div>
                <span class="text-red-400 float-left">22,500₫</span>
                <span class="text-red-300 float-right line-through ">25,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./view/img/to-la-cong-dan-toan-cau_chung-tay-bao-ve-moi-truong_d84ba91527ce49b58170c6f9818bc8f2_large.jpg"
                alt="">
            <p class="text-sm font-medium">CHUNG TAY BẢO VỆ MÔI TRƯỜNG</p>
            <div>
                <span class="text-red-400 float-left">31,500₫</span>
                <span class="text-red-300 float-right line-through ">35,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./view/img/to-la-cong-dan-toan-cau_vi-mot-the-gioi-hoa-binh_ec9d202770da416aab25550e1a986230_large.webp"
                alt="">
            <p class="text-sm font-medium">TỚ LÀ CÔNG DÂN TOÀN CẦU </p>
            <div>
                <span class="text-red-400 float-left">31,500₫</span>
                <span class="text-red-300 float-right line-through ">35,000₫</span>
            </div>
        </div>
    </div>
    <div class="container mx-auto mt-4">
        <h2 class="text-center text-2xl font-bold">Sách bán chạy nhất</h2>
    </div>
    <!-- sách bán chạy nhất -->
    <div class="row sp">
        <div class="container mx-auto grid grid-cols-5 gap-10 mt-5" >
                    <?php
                    $i=0;
                        foreach($spnew as $sp){
                            extract($sp);
                            $linksp="index.php?act=sanphamct&idsp=".$id_product;
                            $hinh=$img_path.$img;
                            $m= $price*1.1;
                            echo
                                 '<div>
                                    
                                    <div class="border-2 p-3 img h-[430px]">

                <a href="' . $linksp . '"><img class="flip-box-inner" src="' . $hinh . '" alt=""></a>
                <a href="' . $linksp . '"><p class="text-sm font-medium">' . $name_product . '</p></a>
                <div>
                    <span class="text-red-400 float-left">' . $price . '₫</span>
                    <span class="text-red-300 float-right line-through ">' . $m . '₫</span>
                </div>
            
                                    <div class="row muahang">
                                    <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="'.$id_product.'">
                                    <input type="hidden" name="name" value="'.$name_product.'">
                                    <input type="hidden" name="img" value="'.$img.'">
                                    <input type="hidden" name="price" value="'.$price.'">
                                    </form>
                                    </div>
                                    </div>
                                    </div>';
                        }
                    ?>
                </div>
                </div>
    <!--  -->
    <div class="mt-4">
        <img src="./view/img/banner_home_pro_4.jpg" alt="">
    </div>
    <div class="container mx-auto mt-4">
        <h2 class="text-center text-2xl font-bold">TOP TRUYỆN YÊU THÍCH</h2>
    </div>
    <!-- TOp truyện yêu thích -->
    <div class="container mx-auto grid grid-cols-5 gap-10 mt-5">
        <?php
            
            foreach ($dstop10 as $sp) {
                extract($sp);
                $linksp = "index.php?act=sanphamct&idsp=".$id_product;
                $hinh = $img_path . $img;
                $m= $price*1.1;
                
                echo '<div class="border-2 p-3 img h-[430px]">

                <a href="' . $linksp . '"><img class="flip-box-inner" src="' . $hinh . '" alt=""></a>
                <a href="' . $linksp . '"><p class="text-sm font-medium">' . $name_product . '</p></a>
                <div>
                    <span class="text-red-400 float-left">' . $price . '₫</span>
                    <span class="text-red-300 float-right line-through ">' . $m . '₫</span>
                </div>
            </div>';
                
            }
        ?>
    </div>
    <!--  -->
    <div class="mt-4">
        <img src="./view/img/banner_home_pro_5.webp" alt="">
    </div>
    <div class="container mx-auto mt-4">
        <h2 class="text-center text-2xl font-bold">DORAEMON</h2>
    </div>
    <!-- DORAEMON -->
    <div class="container mx-auto grid grid-cols-5 gap-10 mt-5">
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner" src="./img/5_79c47034a4a04a75bcfc70588373a358_large.webp" alt="">
            <p class="text-sm font-medium">TANAKA LÚC NÀO CŨNG VẬT VỜ </p>
            <div>
                <span class="text-red-400 float-left">34,200₫</span>
                <span class="text-red-300 float-right line-through ">38,200₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner" src="./img/7_e6e04ab2432b4e17badade079dc2ef7e_large.jpg" alt="">
            <p class="text-sm font-medium">BÁ TƯỚC TIỂU THƯ</p>
            <div>
                <span class="text-red-400 float-left">27,000₫</span>
                <span class="text-red-300 float-right line-through ">30,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./img/pokemon-best-wish---kyurem-vs-thanh-kiem-si-keldeo_63a19a9793e94f149a36aeb4be2028a3_large.jpg"
                alt="">
            <p class="text-sm font-medium">POKÉMON BEST WISHES - KYUREM
            <p style="display:none;">VS. THÁNH KIẾM SĨ KELDEO</p>
            </p>
            <div>
                <span class="text-red-400 float-left">22,500₫</span>
                <span class="text-red-300 float-right line-through ">25,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./img/to-la-cong-dan-toan-cau_chung-tay-bao-ve-moi-truong_d84ba91527ce49b58170c6f9818bc8f2_large.jpg"
                alt="">
            <p class="text-sm font-medium">CHUNG TAY BẢO VỆ MÔI TRƯỜNG</p>
            <div>
                <span class="text-red-400 float-left">31,500₫</span>
                <span class="text-red-300 float-right line-through ">35,000₫</span>
            </div>
        </div>
        <div class="border-2 p-3 img h-[430px]">
            <img class="flip-box-inner"
                src="./img/to-la-cong-dan-toan-cau_vi-mot-the-gioi-hoa-binh_ec9d202770da416aab25550e1a986230_large.webp"
                alt="">
            <p class="text-sm font-medium">TỚ LÀ CÔNG DÂN TOÀN CẦU </p>
            <div>
                <span class="text-red-400 float-left">31,500₫</span>
                <span class="text-red-300 float-right line-through ">35,000₫</span>
            </div>
        </div>
    </div>
    <div class="mt-4">
        <img src="./view/img/banner_home_pro_7.webp" alt="">
    </div>
    <div class="container mx-auto">
        <h2 class="text-center text-3xl font-medium mt-5">SHOP NOW</h2>
        <p class="text-center mt-3 mb-5">Chưa có sản phẩm nào trong nhóm sản phẩm này !</p>
    </div>
    <hr>
    <script>
        var yg=document.querySelectorAll(".slide_img");
var nm=0;
var mn=yg.length;
setInterval(function h(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
},2500);
function h1(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(nm>yg.length-2){
        nm=0;
    }else{
        nm+=1;
    }
    yg[nm].style.opacity=1;
    // yg[nm].style.transition="1s";
}
function h2(){
    for(i=0;i<yg.length;i++){
        yg[i].style.opacity=0;
    }
    if(mn<yg.length){
        mn-=1;
    }else{
        mn=0;
    }
    yg[mn].style.opacity=1;
    // yg[nm].style.transition="1s";
}
    </script>