<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
    <th>Company</th>
    <th>Contact</th>
  </tr>
  <?php
   
   include "../login/baglanti.php";
   $sec="SELECT * FROM etkinlikler";
   $sonuc=$conn->query($sec);
   if($sonuc->num_rows>0)
   {
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
        
        <tr>
          <td>".$cek['id']."</td>
          <td>".$cek['kategori_id']."</td>
          <td>".$cek['baslik']."</td>
          <td>".$cek['aciklama']."</td>
          <td>".$cek['gorevli_personel_id']."</td>
        </tr>
        
        
        
        ";
    }
   }
   else
   {
        echo "kayitli veri bulunamadı";

   }

?>

</table>

</body>
</html>

