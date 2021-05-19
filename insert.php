<?php
include_once ('config.php');
include_once ('header.php'); ?>

<?php
if(isset($_POST['city']))
{
    $shahr = $_POST['city'];
    $sql = "INSERT INTO inventories (id, city)
    VALUES ('NULL', '$shahr')";
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

          <h1> انبار ایجاد شد</h1><br>
          
          
        <p class="lead">
            انبار <?php echo $shahr; ?> به لیست انبار ها اضافه شد<br>
        </p>
        <br>
        <br>
      </div>
        <div class="bg-light p-5 rounded mt-3">
            <p>ليست انبار ها:</p>
            
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">شناسه</th>
                    <th scope="col">شهر</th>
                  </tr>
                </thead>
                <tbody>
                     <?php
                    $sql = "SELECT id, city FROM inventories ORDER BY id";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["city"]."</td>";
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

