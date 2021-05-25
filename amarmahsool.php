<?php
include_once ('config.php');
include_once ('header.php'); 


if(isset($_POST['mahsool']))
{
    $prod = $_POST['mahsool'];



}

?>



<html>
<body>
    
    

<br><br><br>
    <main class="container">

      
        <div class="bg-light p-5 rounded mt-3">
            <p>ليست محصولات انبار  :</p>
            
            <table class="table">
                <thead>
                  <tr>
                  <th scope="col">نوع محصول</th>
                    <th scope="col">شهر</th>
                    <th scope="col">تعداد </th>

                  </tr>
                </thead>
                <tbody>
                     <?php
                    $sql = "select inventories.city,products.papertype,manage.quantity from products INNER JOIN manage ON manage.p_id=products.p_id INNER JOIN inventories ON manage.i_id=inventories.i_id WHERE products.papertype='$prod'";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      // output data of each row
                      while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>".$row["papertype"]."</td>";
                            echo "<td>".$row["city"]."</td>";
                            echo "<td>".$row["quantity"]."</td>";
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

