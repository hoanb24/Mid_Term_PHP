<!DOCTYPE html>
<html>
<title>Product</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
<link rel="shortcut icon" href="https://cf.shopee.vn/file/51460c45fc3b4ee731fb18a73e706135" type="image/x-icon">
<style>
    form {
        border: 2px solid blue;
        width: 400px;
        padding: 10px;
    }

    input[type=text],
    select {
        width: 200px;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 300px;
        background-color: hsl(0, 100%, 50%);
        ;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    img {
        width: 200px;
        height: 250px;
    }

    #card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 280px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    #card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }

    .gach {
        border: 1px solid #DCDCDC;
        width: 1020px;
        margin-left: 250px;
    }

    button {
        margin-top: 10px;
        margin-bottom: 30px;
        border-radius: 20px;
        color: white;
        border: orange;
        background-color: orange;
    }

    .line {
        border: 1px solid #DCDCDC;
        width: 1010px;
        margin-left: 50px;
    }

    .title {
        margin-left: 50px;
        margin-top: 30px;
    }
</style>

<body>


    <?php
    error_reporting(0);
    session_start();

    $product = array(
        'GI??Y D??P' => array(
            'G1' => array(
                'id' => 1,
                'name' => 'Sandal n??? cao g??t phong c??ch H??n Qu???c - Kem ',
                'code' => 'SD02K',
                'price' => '400.000 ??',
                'img' => 'http://product.hstatic.net/200000245907/product/2128201_l_493b7eccbd454a839bb8ed582a21bfea_grande.gif'
            ),
            'G2' => array(
                'id' => 1,
                'name' => 'Gi??y sandal ????? xu???ng 7 cm quai ch??o 10190',
                'code' => 'S8 - ZM ',
                'price' => '600.000 ??',
                'img' => 'https://salt.tikicdn.com/cache/w1200/ts/product/cf/99/89/bf004aa9986efce181885a2e6cdd06cf.jpg'
            ),
            'G3' => array(
                'id' => 1,
                'name' => 'Gi??y cao g??t b??t m??i Tammy shoes 8cm ??en',
                'code' => 'AD8',
                'price' => '218.000 ??',
                'img' => 'http://tcorder.vn/wp-content/uploads/2014/07/giay-cao-got-gai-day-ngang-1.jpg'
            )
        ),
        'T??I X??CH' => array(
            'T1' => array(
                'id' => '1',
                'name' => 'T??i x??ch n??? th???i trang POKETO',
                'code' => 'GW2',
                'price' => '1.500.000 ??',
                'img' => 'https://cf.shopee.vn/file/04e94499983800d326188f5fed24ffd4'
            ),
            'T2' => array(
                'id' => '1',
                'name' => 'T??i x??ch n??? th???i trang POKETO',
                'code' => 'SP-2A1-??EN',
                'price' => '600.000 ??',
                'img' => 'https://cf.shopee.vn/file/sg-11134201-22120-b01xkr6qemlvd2_tn'
            ),
            'T3' => array(
                'id' => '1',
                'name' => 'T??i x??ch n??? th???i trang POKETO',
                'code' => 'GW2',
                'price' => '450.000 ??',
                'img' => 'https://cf.shopee.vn/file/b31e508532a18baefa325643bae1aac3'
            )
        )
    );
    $_SESSION['products'] = $product;
    ?>
    <center>
        <form action="" method="post" class="formvali">
            <input type="text" name="nchoose" placeholder="Gi??y d??p or T??i x??ch"> <br> <br>
            <input type="text" name="nid" placeholder="Nh???p id"> <br> <br>
            <input type="text" name="nname" placeholder="Nh???p t??n"> <br> <br>
            <input type="text" name="ncode" placeholder="Nh???p code"> <br> <br>
            <input type="text" name="nprice" placeholder="Nh???p gi??"> <br> <br>
            <input type="text" name="nimg" placeholder="Link ???nh"> <br> <br>
            <input type="submit" value="OK">
        </form>
    </center>

    <?php
    $nid = $_POST['nid'];
    $nname = $_POST['nname'];
    $ncode = $_POST['ncode'];
    $nprice = $_POST['nprice'];
    $nimg = $_POST['nimg'];
    $new_mang = array(
        'id' => $_POST['nid'],
        'name' => $_POST['nname'],
        'code' => $_POST['ncode'],
        'price' => $_POST['nprice'],
        'img' => $_POST['nimg']
    );
    if($_POST['nchoose']== 'Gi??y d??p'){
        array_push($product['GI??Y D??P'], $new_mang);
    }
    else {
        array_push($product['T??I X??CH'], $new_mang);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['products'] = $product;
    }
    ?>

    <div class="container">
        <?php
        foreach ($_SESSION['products'] as $k => $v) { ?>
            <h4 class="title" style="color:#FF4500;">
                <?php echo $k; ?>
            </h4>
            <p class="line"></p>
            <div class="row">
                <?php foreach ($v as $k1 => $v1) { ?>
                    <div class="col-lg-3" id="card">
                        <img src="<?php echo $v1['img'] ?>" alt="" class="img-pro">
                        <br> <br>
                        <p class="name">
                            <?php echo $v1['name'] . " - " . $v1['code'] ?>
                        </p>
                        <p style="color:red;">
                            <?php echo $v1['price'] ?>
                        </p>
                        <button type="button" onclick="camon()">?????t mua</button>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>

    </div>
    <br>
    <br>
    <p class="gach"></p>


    <script>
        function camon() {
            alert("Thank you your order");
        };
    </script>
</body>

</html>