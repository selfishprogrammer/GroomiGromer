
<!-- Modal -->
<div class="modal fade" id="coupon" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Your Related Offers Coupon Code</h5>
       
      </div>
      <div class="modal-body">
      <?php
       $trick = 0;
       $trick1 = 1;
       $trick2 = 2;
      if($total_amount >=40 && $total_amount <=200){

      
                       
                     
                            $sql = "select * from `coupon_code` where `trick`='$trick'";
                            $result = mysqli_query($conn, $sql);
                            while ($row1 = mysqli_fetch_assoc($result)) {
                        ?>
                                <div class="shadow-sm border my-2" style="width: 100%; border-radius: 20px;">
                                    <div class="mt-4  mb-4 text-center"> You Can Have 50% off Maximum 30
                                        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                                        <input type="hidden" name="submit_code" value="<?php echo $row1['coupon_name']  ?>">
                                        <button class="btn btn-defaut"  type="submit" style="border-color: greenyellow;"><?php echo $row1['coupon_name']  ?></button>

                                        </form>
                                    </div>
                                </div>
                        <?php
                            }
      }
      else       if($total_amount >=201 && $total_amount <=400){

      
                       
                     
        $sql = "select * from `coupon_code` where `trick2`='$trick1'";
        $result = mysqli_query($conn, $sql);
        while ($row1 = mysqli_fetch_assoc($result)) {
    ?>
            <div class="shadow-sm border my-2" style="width: 100%; border-radius: 20px;">
                <div class="mt-4  mb-4 text-center"> You Can Have 50% off Maximum 30

                    <button class="btn btn-defaut" style="border-color: greenyellow;"><?php echo $row1['coupon_name']  ?></button>
                </div>
            </div>
    <?php
        }
}

if($total_amount >=401 && $total_amount <=20000){

      
                       
                     
    $sql = "select * from `coupon_code` where `trick3`='$trick2'";
    $result = mysqli_query($conn, $sql);
    while ($row1 = mysqli_fetch_assoc($result)) {
?>
        <div class="shadow-sm border my-2" style="width: 100%; border-radius: 20px;">
            <div class="mt-4  mb-4 text-center"> You Can Have 50% off Maximum 30

                <button class="btn btn-defaut" style="border-color: greenyellow;"><?php echo $row1['coupon_name']  ?></button>
            </div>
        </div>
<?php
    }
}
                        ?>
      </div>
    
    </div>
  </div>
</div>
    
     


<!-- Coupon -->