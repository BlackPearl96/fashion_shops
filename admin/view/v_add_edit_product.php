<script type="text/javascript" src="ckeditor/ckeditor.js"></script>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cùng học Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">                
                <!-- BEGIN CONTENT -->
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="glyphicon glyphicon-th-list"></i> Add-Edit-product</div>
                    <div class="panel-body">
                        <form id="category-form" class="form-horizontal" method="post" action="<?php echo "$form_act";?>" enctype="multipart/form-data" >
                            <input name="id" type="hidden" value="8"/>


                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">Tên sản phẩm:
                                </label>
                                <div class="col-sm-9">
                                    <input name="ten_sanpham" id="name" type="text" value="<?php echo isset($arr["ten_sanpham"])?$arr["ten_sanpham"]:"" ?>" class="form-control"/>
                                    <span id="name1"></span>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                    Sản phẩm hot:
                                </label>
                                <div class="col-sm-9">
                                    <input type="checkbox" name="sanpham_hot" value="1">
                                </div>
                            </div>  


                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">

                                    Ngày Đăng:
                                </label>
                                <div class="col-sm-9">
                                    <input name="ngaydang" type="date" value="<?php echo isset($arr["ngaydang"])?$arr["ngaydang"]:""; ?>"  type="text"  class="form-control"    value=""/>
                                    <span id="gia1"></span>
                                </div>
                            </div>



                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">
                                    mô tả:
                                </label>
                                <div class="col-sm-9">
                                    <textarea style="width:600px;height:400px" name="mota"><?php echo isset($arr["mo_ta"])?$arr["mo_ta"]:"" ?></textarea>
                                </div>
                            </div>
                            <script>
                                CKEDITOR.replace('mota');
                            </script>
                            
                            


                           

                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">

                                    Giá:
                                </label>
                                <div class="col-sm-9">
                                    <input name="gia"  value="<?php echo isset($arr["gia"])?$arr["gia"]:""; ?>" id="gia" type="text"  class="form-control"    value=""/>
                                    <span id="gia1"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">

                                Thuộc danh mục:
                                </label>
                                <div class="col-sm-9">
                                    <select name="danhmuc" class="form-control" id="danhmuc" >
                                       <?php 
                                        foreach ($arr_danhmuc as $row) {
                                           
                                        ?>
                                        <option value="<?php echo $row["id_danhmuc"] ?>"><?php echo $row["ten_danhmuc"] ?></option>
                                        <?php } ?>
                                    </select>   
                                    <span id="danhmuc1"></span>     
                                </div>
                            </div> 


                            <div class="form-group">
                                <label for="name" class="col-sm-3 control-label">

                                    Ảnh:
                                </label>
                                <div class="col-sm-9">
                                    <input type="file" name="upload" id="f" >   
                                    <br>
                                    <span id="f1"></span>
                                    <br>
                                </div>
                                <div style="width:200px;margin:0px auto">
                                    <img style="width:200px" src="../<?php echo isset($arr["anh_sanpham"])?$arr["anh_sanpham"]:""; ?>">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" name="btn_add_edit_product" class="btn btn-primary" onClick="return checkform();">Cập nhật</button>
                                    
                                </div>
                            </div>

                        </form>
                    </div>
                </div>                <!-- END CONTENT -->

            </div>
        </div>       
    </div>
</body>