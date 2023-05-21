<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns3 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1,$ns2,$ns3,$ns4];

?>
<h3 class="text-center">Daftar Nilai Siswa</h3>
<table class="table" width="100%">
 <thead>
  <tr class="table-danger">
     <th>No</th><th>NIM</th><th>UTS</th>
     <th>UAS</th><th>Tugas</th><th>Nilai Akhir</
  </tr>
 </thead>
 <tbody>
   <?php
   $nomor = 1;
   foreach($ar_nilai as $ns){
    echo '<tr><td class="table-danger border-end" width="3%">'.$nomor.'</td>';
    echo '<td class="border-end border-3">'.$ns['nim'].'</td>';
    echo '<td class="border-end border-3">'.$ns['uts'].'</td>';
    echo '<td class="border-end border-3">'.$ns['uas'].'</td>';
    echo '<td class="border-end border-3">'.$ns['tugas'].'</td>';
    $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
    echo '<td class="border-end border-3">'.number_format($nilai_akhir,2,',','.').'</td>';
    echo '<tr/>';
    $nomor++;
   }
  ?>
 </tbody>
 </table>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>


