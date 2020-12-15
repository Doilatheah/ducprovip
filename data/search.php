<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://kit.fontawesome.com/4b2f049118.js" crossorigin="anonymous"></script>
  <title> Computer Engineering Technology </title>
</head>
<style>
  table,
  th,
  td,
  tr {
    border: 2px solid rgba(0, 0, 0, 0.3);
    width: 1100px;
    background: rgba(0, 0, 0, 0.3);
    padding: 5px;
    color: white;
    font-weight: bolder;

  }
</style>

<body>
  <center>
    <div class="box">
      <form action="" method="POST">
        <input type="text" name="id" placeholder="Nhập mã số sinh viên" required>
        <input class="success" type="submit" name="search" value="Tìm kiếm">
      </form>
      <table>
        <tr>
          <td>MSSV</td> <br>
          <td>HỌ TÊN</td>
          <td>NGÀY SINH</td>

        </tr>
    </div>

    <!-- MySQL -->

    <?php
    $con = mysqli_connect('localhost', 'root', '', '') or die("Không tìm thấy dữ liệu");
    mysqli_select_db($con, 'database') or die("Không có phản hồi!");
    //connect
    if (isset($_POST['search'])) {
      $id = $_POST['id'];
      $query = "SELECT *FROM tabledb WHERE id='$id' or MSSV='$id'" or die("Không thể tìm kiếm");
      $query_run = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($query_run)) {
    ?>
        <tr>
          <td><?php echo $row['MSSV']; ?></td>
          <td><?php echo $row['Name']; ?></td>
          <td><?php echo $row['Date']; ?></td>
        </tr>
    <?php
        /* End MySQL */
      }
    }
    ?>
    </table>
  </center>
  <div>
    <p style="color:white;bottom:-16px;left:38%;position:fixed;">Copyright &copy; 2020 by <a style="text-decoration:none;color:red;font-weight:bold;" href="https://www.facebook.com/xinchaohiiiihiiii/">VuDucpro</a>. No rights reserved</p>
  </div>
  <div class="social-media">
        <a class="btn" href="https://www.instagram.com/vuvanduc453/"><i class="fab fa-instagram"></i></a>
        <a class="btn" href="https://www.facebook.com/xinchaohiiiihiiii/"><i class="fab fa-facebook-f"></i></a>
        <a class="btn" href="https://github.com/Doilatheah"><i class="fab fa-github"></i></a>
    </div>
</body>

</html>
