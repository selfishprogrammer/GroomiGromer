<div class="shadow-sm" style="width: 100%; height:200px; background-color: #86e0f2;">

    <div class="text-center" style="    font-size: 30px;
font-family: ui-serif;
padding-top: 55px;"><b> Binary Bara Shop</b></div>
    <div class="container">
        <div class="shadow-sm bg-white border" style=" width:100%; margin-top:25px; border-radius: 20px;">
            <form action="your_shops.php">
                <div class="row">


                    <div class="col-md-5">

                        <div class="form-group pt-3">

                            <select class="form-control" name="state" id="state"
                                style=" font-family: cursive;   width:100%;     "
                                aria-label="Example select with button addon" required>
                                <option selected>Region</option>
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

                        </div>
                    </div>
                    <div class="col-md-5">

                        <div class="form-group pt-3">
                            <select class="form-control" name="dist" id="dist"
                                style=" font-family: cursive;   width:100%;      "
                                aria-label="Example select with button addon" required>
                                <option selected>Area</option>

                            </select>
                        </div>
                    </div>

                    <div class="col-md-2  mt-3">
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-info form-control " type="submit"
                                    style="background-color:#1E88E5;  width:10rem;">Search</button>
                            </div>
                        </div>
                    </div>

                </div>





            </form>


        </div>
    </div>
</div>















<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>


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