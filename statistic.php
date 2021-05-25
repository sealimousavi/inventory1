
<?php
include_once ('config.php');
include_once ('header.php');
?>


  <body>
      <br><br><br>
        <main class="container">
            

          <div class="bg-light p-5 rounded mt-3">
             
              <h1>آمار هر انبار </h1>
              <br>
              <h3>
                 براي مشاهده آمار محصولات کافيه شهر را انتخاب کنيد.
                 <br>
              </h3>
              <br>
            <div class="col-lg-3">
                <form action="amarshahr.php" method="post">
                    
                    <div>
                        <select class="form-select" aria-label="Default select example" name="anbary" id="anbary" required>
                        <option selected >انبار را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT i_id, city FROM inventories ORDER BY city";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {


                                echo "<option value='".$row["city"]."'>".$row["city"]."</option>";
                          }
                        } else {
                          echo "0 results";
                        }

                        ?>
                        </select>
                    </div>

                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">تایید</button>
                    </form>
                </div>
           

           
        </main>
      
        <main class="container">
            

          <div class="bg-light p-5 rounded mt-3">
             
              <h1>آمار هر محصول </h1>
              <br>
              <h3>
                 براي مشاهده آمار محصولات کافيه نوع محصول را انتخاب کنيد.
                 <br>
              </h3>
              <br>
            <div class="col-lg-3">
                <form action="amarmahsool.php" method="post">
                    
                    <div>
                        <select class="form-select" aria-label="Default select example" name="mahsool" id="mahsool" required>
                        <option selected >محصول را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT p_id, papertype FROM products ORDER BY papertype";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {


                                echo "<option value='".$row["papertype"]."'>".$row["papertype"]."</option>";
                          }
                        } else {
                          echo "0 results";
                        }

                        ?>
                        </select>
                    </div>

                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary">تایید</button>
                    </form>
                </div>
           

           
        </main>
      
  </body>
