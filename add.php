
<?php
include_once ('config.php');
include_once ('header.php');
?>


  <body>
      <br><br><br>
        <main class="container">
            
        <div class="bg-light p-5 rounded mt-3">
             
             <h1>افزودن محصول </h1>
             <br>
             <h3>
                  نام محصول را در بخش زیر وارد کنید.
                <br>
                به جای فاصله از _ استفاده کنید.              
                <br>
             </h3>

           <p class="lead">
           <div class="col-lg-3">
               
               <form action="newprod.php" method="post">
               <div class="form-group">
                   <br>
                   <input class="form-control" type="text" placeholder="نام محصول" name="prod" id="prod" required>                </div>
                   <br>
                   <br>
               <button type="submit" class="btn btn-primary">تایید</button>
               </form>
           </div>
           </p>
           
         </div>

          <div class="bg-light p-5 rounded mt-3">
             
              <h1>افزایش محصول </h1>
              <br>
              <h3>
                  نوع محصول  و تعداد بسته ها و نام انبار  را وارد کنيد.
                 <br>
              </h3>

            <p class="lead">
                <div class="col-lg-3">
                    <form action="addprod.php" method="post">
                    <div>
                        <select class="form-select" name="ptype" id="ptype" required>
                        <option selected>محصول را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT `p_id`, `papertype` FROM `products` WHERE 1";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                                $ptype =$row["p_id"] ;

                                echo "<option value=".$row["p_id"].">".$row["papertype"]."</option>";
                          }
                        } else {
                          echo "0 results";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <br>
                    <input class="form-control" type="text" placeholder="تعداد :" name="amount" id="amount" required>
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" name="inventory" id="inventory" required>
                        <option selected>انبار را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT i_id, city FROM inventories ORDER BY city";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                          $inventory = ["i_id"];

                                echo "<option value=".$row["i_id"].">".$row["city"]."</option>";
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
            </p>
            <br>
            <br>
            
          </div>
          
          <div class="bg-light p-5 rounded mt-3">
             
              <h1>کاهش محصول </h1>
              <br>
              <h3>
                  نوع محصول    و تعداد بسته ها و نام انبار  را وارد کنيد.
                 <br>
              </h3>

            <p class="lead">
                <div class="col-lg-3">
                    <form action="minprod.php" method="post">
                    <div>
                        <select class="form-select" name="ptype" id="ptype" required>
                        <option selected>محصول را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT `p_id`, `papertype` FROM `products` WHERE 1";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                                $ptype =$row["p_id"] ;

                                echo "<option value=".$row["p_id"].">".$row["papertype"]."</option>";
                          }
                        } else {
                          echo "0 results";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <br>
                    <input class="form-control" type="text" placeholder="تعداد :" name="amount" id="amount" required>
                    </div>
                    <br>
                    <div>
                        <select class="form-select" aria-label="Default select example" name="inventory" id="inventory" required>
                        <option selected>انبار را انتخاب کنيد</option>
                        <?php
                        $sql = "SELECT i_id, city FROM inventories ORDER BY city";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                          // output data of each row
                          while($row = mysqli_fetch_assoc($result)) {
                          $inventory = ["i_id"];

                                echo "<option value=".$row["i_id"].">".$row["city"]."</option>";
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
            </p>
            <br>
            <br>
            
          </div> 

           
        </main>
      
  </body>



