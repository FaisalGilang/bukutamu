<!DOCTYPE html>
<html>
<head>
  <title>Buku Tamu</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
  <h2 class="mt-5 text-center">BUKU TAMU</h2>
  
  <form action="save_guestbook.php" method="post">
    <label for="name" class="form-label">Nama:</label><br>
    <input type="text" id="name" name="name" class="form-control" required><br>
    
    <label for="email" class="form-label">Email:</label><br>
    <input type="email" id="email" name="email" class="form-control" required><br>
    
    <label for="message" class="form-label">Pesan:</label><br>
    <textarea id="message" name="message" class="form-control" required></textarea><br>
    
    <input type="submit" class="mt-3" value="Kirim">
  </form>
  
  <h3 class="mt-4">Daftar Tamu:</h3>
  <table class="table table-striped">
          <thead>
            <tr>
              <td>no</td>
              <td>nama</td>
              <td>email</td>
              <td>pesan</td>
            </tr>
          </thead>
          <tbody>
    <?php 
    include "koneksi.php";
      $sql = mysqli_query($conn,"SELECT * FROM buku_tamu");
      $no=1;
      while ($data = mysqli_fetch_array($sql)) {
    ?>
        
        <tr>
          <td> <?php echo $no++ ?> </td> 
          <td> <?php echo $data['name'] ?> </td>
          <td> <?php echo $data['email'] ?> </td>
          <td> <?php echo $data['message'] ?> </td>
          <br>
        </tr>
        <?php  
    }
    ?>
        </tbody>
      </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>