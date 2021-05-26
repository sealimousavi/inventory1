<?php
include_once ('config.php');
include_once ('header.php'); ?>

<?php
if(isset($_POST['prod']))
{
    $mahsool = $_POST['prod'];
    $sql = "INSERT INTO `products` (papertype)
    VALUES ('$mahsool')";

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

          <h1> محصول ایجاد شد</h1><br>
          
          
        <p class="lead">
            محصول <?php echo $mahsool; ?> به لیست محصول ها اضافه شد<br>
        </p>
        <br>
        <br>
      </div>
        <div class="bg-light p-5 rounded mt-3">
            <p>ليست محصولات :</p>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">شناسه</th>
                    <th scope="col">محصول</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
                    $sql = "SELECT p_id, papertype FROM products ORDER BY p_id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row["p_id"]."</td>";
                            echo "<td>".$row["papertype"]."</td>";
                            echo "</tr>";
                      }
                    } else {
                      echo "0 results";
                    }
                     ?>
                </tbody>
              </table>
        </div>
        



    </main>

</body>
</html>

