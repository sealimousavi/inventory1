<?php
include_once ('config.php');
include_once ('header.php'); 


if(isset($_POST['amount']))
{
    $type = $_POST['ptype'];
    $invent = $_POST['inventory'];
    $amount = $_POST['amount'];
    
  //  $sql = "UPDATE INTO `test_db`.`manage` (`id`, `p_id`, `i_id`, `quantity`) VALUES (NULL, '$type', '$invent', '$amount')";

   $sql ="UPDATE `manage` SET quantity = quantity -$amount WHERE p_id=$type AND i_id=$invent";

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
          
          
        <br>
        <br>
      </div>


    </main>

</body>
</html>

