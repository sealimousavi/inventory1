
<?php
include_once ('config.php');
include_once ('header.php'); ?>



  <body>
      <br><br><br>
        <main class="container">

          <div class="bg-light p-5 rounded mt-3">
             
              <h1>ایجاد انبار </h1>
              <br>
              <h3>
                 برای ایجاد انبار جدید کافی است نام شهر را در بخش زیر وارد کنید.
                 <br>
              </h3>

            <p class="lead">
            <div class="col-lg-3">
                
                <form action="insert.php" method="post">
                <div class="form-group">
                    <br>
                    <input class="form-control" type="text" placeholder="نام شهر" name="city" id="city" required>                </div>
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
