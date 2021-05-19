<?php
include_once ('config.php');
include_once ('header.php'); 


if(isset($_POST['paper']))
{
    $paper = $_POST['paper'];
    $amount = $_POST['amount'];
    $sql = "INSERT INTO products (`id`, `paper-type`, `quantity`)
    VALUES ('', '$paper','$amount')";
if (mysqli_query($conn, $sql)) {
  echo "با موفقيت اضافه شد";
} else {
  echo "خطا رخ داد: " . $sql . "<br>" . mysqli_error($conn);
}
}

?>

<html>
<body>
    
    

<br><br><br>
    <main class="container">

      <div class="bg-light p-5 rounded mt-3">

          <h1> محصول اضافه شد</h1><br>
          
          
        <p class="lead">
             کاغذ<?php echo $paper; ?> به لیست محصولات ها اضافه شد<br>
        </p>
        <br>
        <br>
      </div>


    </main>

</body>
</html>

