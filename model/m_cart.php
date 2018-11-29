<?php 
if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
    function get_a_record($id_sanpham){
        global $link;
        $result = mysqli_query($link,"select * from tbl_sanpham where id_sanpham = $id_sanpham");
        return mysqli_fetch_array($result);
    }
    function cart_total(){
    $total = 0;
    foreach($_SESSION['cart'] as $product){
        $total += $product['gia'] * $product['number'];
    }
    return $total;
}

    

    function cart_destroy(){
    $_SESSION['cart'] = array();
    }

    function cart_update($id_sanpham, $number){
    if($number==0){
        //xóa sp ra khỏi giỏ hàng
        unset($_SESSION['cart'][$id_sanpham]);
    } else {
        $_SESSION['cart'][$id_sanpham]['number'] = $number;
    }
    }


    function cart_delete($id_sanpham){
    unset($_SESSION['cart'][$id_sanpham]);
    }


    function cart_add($id_sanpham){
    if(isset($_SESSION['cart'][$id_sanpham]))
    {
        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
        $_SESSION['cart'][$id_sanpham]['number']++;
    } 
    else 
    {
        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
        $product = get_a_record($id_sanpham);
        
        $_SESSION['cart'][$id_sanpham] = array(
            'id_sanpham' => $id_sanpham,
            'ten_sanpham' => $product['ten_sanpham'],
            'anh_sanpham' => $product['anh_sanpham'],
            'number' => 1,
            'gia' => $product['gia']
        );
    }
}
 ?>