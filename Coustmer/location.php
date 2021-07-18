<div class="shadow-sm sticky-top bg-info" style="width: 100%;">


    <form action="your_shops.php" class="pb-1 pt-4 mx-4">
        <div class="container">
            <div class="row">
                <!-- <div class="form-group  mx-2">
                    <select name="state" id="state" style="width: 12rem;     margin-left: 60px;; height:50px; border-radius:5px;" id="" class="form-control ">
                    <option value="" selected>--Select State--</option>
                       
                        

                    </select>
                </div> -->

                <div class="input-group mb-3">

                    <select class="custom-select" name="state" id="state" aria-label="Example select with button addon" required>
                        <option selected>--Select Region--</option>
                        <?php
                        include '../Connection/connection.php';
                        $sql = "select * from `state_services`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {


                        ?>
                            <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state'] ?></option>
                        <?php
                        }



                        ?>
                    </select>
                    <select class="custom-select" name="dist" id="dist" aria-label="Example select with button addon" required>
                        <option selected>--Select Area--</option>

                    </select>
                    <div class="input-group-prepend">
                        <button class="btn btn-info" type="submit" style="background-color:#1E88E5;">Search</button>
                    </div>

                </div>




            </div>

        </div>
    </form>



</div>
<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<script>
    $(document).ready(() => {
        console.log("Connected");

        $("#state").on('change', function() {
            var StateId = $(this).val();
            console.log("StateId")




            $.ajax({
                url: "service.php",
                method: "POST",
                data: {
                    id: StateId
                },
                dataType: "html",
                success: (data) => {
                    $('#dist').html(data)
                    console.log(data)
                }
            })
        });










    });
</script>
<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>