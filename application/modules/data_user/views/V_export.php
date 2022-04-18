<!DOCTYPE html>
<html>
<head>
  <title>Hotel</title>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}

th {
  background-color: aqua;
}

tr:nth-child(even) {
  background-color: ;
}
</style>
</head>
<body>
  <center><h3 align="center">LAPORAN HOTEL </h3></center>
  
          <table border="1" cellspacing="0" cellpadding="10" width="100%">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Username</th>
              <th>Password</th>
              <th>level</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($tampil as $user) {
             ?>
            <tr>
              <td><?= $user->nama_user ?></td>
              <td><?= $user->email ?></td>
              <td><?= $user->username ?></td>
              <td>*********</td>
              <td>
                
                <?php if ($user->role == 1) { ?>
                      Admin
                <?php }else{ ?>
                      Kasir
                <?php } ?>

              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>

</body>
</html>