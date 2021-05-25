<?php
include_once ('config.php');
include_once ('header.php'); 




if(isset($_POST['amount']))
{
    $type = $_POST['ptype'];
    $invent = $_POST['inventory'];
    $amount = $_POST['amount'];
    

   $sql="SELECT `id`, `p_id`, `i_id`, `quantity` FROM `manage` WHERE `p_id`=$type AND`i_id`=$invent";
   $result = mysqli_query($conn, $sql);
   if ( mysqli_num_rows($result) > 0)
    {
    $sql="UPDATE `manage` SET quantity = quantity +$amount WHERE p_id=$type AND i_id=$invent";
      if (mysqli_query($conn, $sql)) {
        echo "با موفقيت اضافه شد";
      } else {
        echo "خطا رخ داد: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
  else
   {
     $sql="INSERT INTO `test_db`.`manage` (`p_id`, `i_id`, `quantity`) VALUES ('$type', '$invent', '$amount')";
      if (mysqli_query($conn, $sql)) {
        echo "با موفقيت اضافه شد";
      } else {
        echo "خطا رخ داد: " . $sql . "<br>" . mysqli_error($conn);
      }
  
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

