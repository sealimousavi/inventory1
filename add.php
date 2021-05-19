
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
                  نوع کاغذ بر حسب سايز (A1, A2,A3,..) و تعداد بسته ها را وارد کنيد.
                 <br>
              </h3>

            <p class="lead">
            <div class="col-lg-3">
                <form action="addprod.php" method="post">
                <div class="form-group">
                    <br>
                    <input class="form-control" type="text" placeholder="نوع کاغذ:" name="paper" id="paper" required>
                </div>
                <div class="form-group">
                    <br>
                    <input class="form-control" type="number" min="0" placeholder="تعداد:" name="amount" id="amount" required>
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



