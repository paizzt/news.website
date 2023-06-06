<!DOCTYPE html>
<html>
<head>
  <title>Data</title>
  <link rel="stylesheet"  href="login.css">
</head>
<body>
  <h1>Data</h1>
  <table>
    <tr>
      <th>Judul</th>
      <th>Tema</th>
      <th>Gambar</th>
      <th>Deskripsi</th>
      <th>Tanggal</th>
    </tr>
    <?php
    $data = [
      [
        "judul" => "Judul 1",
        "tema" => "Tema 1",
        "gambar" => "gambar1.jpg",
        "deskripsi" => "Deskripsi 1",
        "tanggal" => "01-01-2022"
      ],
      [
        "judul" => "Judul 2",
        "tema" => "Tema 2",
        "gambar" => "gambar2.jpg",
        "deskripsi" => "Deskripsi 2",
        "tanggal" => "02-01-2022"
      ],
      [
        "judul" => "Judul 3",
        "tema" => "Tema 3",
        "gambar" => "gambar3.jpg",
        "deskripsi" => "Deskripsi 3",
        "tanggal" => "03-01-2022"
      ],
    ];
    foreach ($data as $item) {
      echo "<tr>";
      echo "<td>" . $item["judul"] . "</td>";
      echo "<td>" . $item["tema"] . "</td>";
      echo "<td><img src='" . $item["gambar"] . "'></td>";
      echo "<td>" . $item["deskripsi"] . "</td>";
      echo "<td>" . $item["tanggal"] . "</td>";
      echo "</tr>";
    }
    ?>
  </table>
</body>
</html>
