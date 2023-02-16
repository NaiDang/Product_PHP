<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Show products</title>

    <style>
        img{
            width: 150px;
        }
        .container{
            padding: 30px;
        }
        .titles{
            text-align:center;
            background: linear-gradient(270deg, #0085FF 21.31%, #CA0B7D 46.5%, #EF6262 65.59%, rgba(230, 11, 11, 0.88) 92%);
            color: white;
            font-size:  30px;
        }
        .price{
            color: red;

        }
       
    </style>
    
</head>
<body>
    <?php 
        $sanpham=array(
            'NỔI BẬT NHẤT'=>array(
                'sp1'=>array(
                    'img'=>'<img src="https://i0.wp.com/laboutikdebabi.ci/wp-content/uploads/2021/11/iphone-7-la-boutik-de-babi.png?fit=1600%2C1600&ssl=1"/>',
                    'name'=>'Iphone 7',
                    'Price'=>4650000,
                ),
                'sp2'=>array(
                    'img'=>'<img src="https://evvuci26k4y.exactdn.com/wp-content/uploads/2022/09/iphone_8_plus_silver.jpg?strip=all&lossy=1&ssl=1"/>',
                    'name'=>'Iphone 8',
                    'Price'=>4750000,
                ),
                'sp3'=>array(
                    'img'=>'<img src="https://productimages.hepsiburada.net/s/122/500/110000072179540.jpg"/>',
                    'name'=>'Samsung s20',
                    'Price'=>8990000,
                ),
                'sp4'=>array(
                    'img'=>'<img src="https://www.xtsmart.vn/vnt_upload/product/01_2022/thumbs/(600x600)_crop_iphone-x.jpg"/>',
                    'name'=>'Iphone 10',
                    'Price'=>6350000,
                ),
                'sp5'=>array(
                    'img'=>'<img src="https://bizweb.dktcdn.net/thumb/grande/100/263/281/products/samsung-galaxy-a13-official-image-1-550x550-e7988614-7650-4f51-87ae-7553a431f726.png?v=1648014187590"/>',
                    'name'=>'Samsung Galaxy A13',
                    'Price'=>3690000,
                )
                ,
                'sp6'=>array(
                    'img'=>'<img src="https://skypantech.vn/wp-content/uploads/2022/11/S10-5G.jpg"/>',
                    'name'=>'Samsung Galaxy s10',
                    'Price'=>4450000,
                )
                ),

                'SẢN PHẨM MỚI'=>array(
                    'sp01'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQph9S-b_7iW4w8bsjIljkWeAspfv9deHUsZRdVjOJIghWkzc2f7E-NPOhq74LScXJfDmpR5JlYlqcQ_xn0xePRc0Nk2VHl7ch013J1oluQ8mnXKz-PDa_2ng&usqp=CAE"/>',
                        'name'=>'Iphone 14',
                        'Price'=>18800000,
                    ),
                    'sp02'=>array(
                        'img'=>'<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT7TY7ErTzJBhGysoHuK-ejxl1ox9TWlBAO92PkUPP4vPeHbr_gw2zpzJHRIj8enqqCwjPvh9kCEg2c53dqOGh2HS7uiYBKD5-JfYiMjJEMn_nHnPr6YVxxxw&usqp=CAE"/>',
                        'name'=>'Iphone 13',
                        'Price'=>17990000,
                    ),
                    'sp03'=>array(
                        'img'=>'<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcT67Utk8b07Li5DzAL2SRZsW_oLGapgCI13u2jUwO0WojR_86B0TMKRr_25yo0eDFqEoLfDOEzw0zbEVlmPMmaaf35SrrzFolD67CYwptVXrlxq5CoJFEtS&usqp=CAE"/>',
                        'name'=>'Iphone 12 plus',
                        'Price'=>15290000,
                    ),
                    'sp04'=>array(
                        'img'=>'<img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTxIzXKfrusNU9d_B52t_uToHm9jqWj_U-27uHxUqSmqD6j4tCpd-9YFN4MGnITjqfM88oIuz96ZQmaN6j_Sz4yJmuC4HuZnjWwdy99JpVgznmv5jyKknDdEQ&usqp=CAE"/>',
                        'name'=>'Iphone 12',
                        'Price'=>9290000,
                    ),
                    'sp05'=>array(
                        'img'=>'<img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQiJJ6bzMIdOHGXy3HrwfDZ-WgAW0YnUPOXI9Tm32SSdqgFuWXg4laroiFkzrNzvJEb9SV8LWD8Hf-sf4j2uVxg4dp9pZlxu3KFRraM1vY&usqp=CAE"/>',
                        'name'=>'Samsung Galaxy A53',
                        'Price'=>8990000,
                    )
                    ,
                    'sp06'=>array(
                        'img'=>'<img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTf2WvNPdoOIwd6FlcLoWnRXxNgAr1gECGE4A_5XC0CY-DSatUOjxU0Ba0E5vmUbSBv4jqQPpUUh6w9pizcHMj4ThvdZngXwivIffUk_FkQdCHblj_cMwb32H0&usqp=CAE"/>',
                        'name'=>'Galaxy Note 10',
                        'Price'=>4349000,
                    )
                )
        )
    ?>
    <?php 
        foreach($sanpham as $k=>$vl){ 
        ?>
        <div class="container"> <div class="titles">*<?php echo $k ?>*</div></div>
        <div class="container">
                <div class="row">
                    <?php foreach($vl as $k1=>$vl1){ 
                    ?>
                       <div class="col-sm-2">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $vl1['img']  ?></h5>
                                <p class="card-text"><?php echo $vl1['name'] ?></p>
                                <p class="card-text"> <div class="price"><?php echo $vl1['Price'] ?> <span style="text-decoration:underline">đ</span></div></p>
                                <p class="card-text">
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <i class="fa fa-star" style="color:orange"></i>
                                    <span style="font-size:  10px;">399 đánh giá</span>
                                </p>
                            </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    </div>
                </div>
        </div>
           
        
           
    <?php
    }
    ?>
</body>
</html>