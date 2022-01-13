<?php
    require 'config/constants.php';
    if(isset($_POST['request'])){
        $request=$_POST['request'];

        $query="SELECT * FROM  cuahang WHERE khu_vuc='$request' ";
        $result=mysqli_query($conn,$query);
        $count=mysqli_num_rows($result);
?>
    <div class="product">
        <ul class="product_list" >
          <?php
            while($row_do_an=mysqli_fetch_assoc($result)){
          ?>

          <li class="rounded" style="margin-right: 1%;margin-left:1%; margin-bottom: 25px;height: 230px;width: 200px;background-color: white;">
            <a href="<?php echo $row_do_an['menu_ch']?>"style="height:100%">
              <img class="img_cuahang" style="object-fit: cover;width: 200px;height: 150px;width:100%" src="<?php echo $row_do_an['img_ch']?>" alt="" />
              <p class="title_product" style="font-size: medium; color: black; font-weight: bold;overflow-x: hidden;width:100%;height: 30px;overflow-y:hidden;margin-bottom: 0;">
                <img src="assets/img/partner2x.jpg" style="height: 20px;width: 20px"><?php echo $row_do_an['ten_ch']?>
              </p>
              <p class="address_product" style="font-size: small; color: darkgray; font-weight: bold;overflow-x: hidden;width:100%;height: 20px;overflow-y:hidden;margin-bottom: 0;">
                <?php echo $row_do_an['address']?>
              </p>
              <hr style="margin: 0;"/>
              <p class="promotion" style="font-size: medium;width:100%; color:red;margin-bottom: 0;">
                <i class="bi bi-tag-fill">Giảm giá <?php echo $row_do_an['giamgia']?>%</i>
              </p>
            </a>
          </li>

          <?php
            }
          ?>

        </ul> 
      </div>
<?php
    }
?>