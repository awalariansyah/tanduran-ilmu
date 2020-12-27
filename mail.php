<?php     
$to_email = 'awalariansyah7@gmail.com';
$subject = 'Pesan dari Tandurarian';

$email = $_POST['email'];
$nama = $_POST['nama'];
$no = $_POST['no'];
$pesan = $_POST['pesan'];

$message = '['.$no.'_'.$nama.'] '.$pesan;
$headers = 'From: '.$email;

mail($to_email,$subject,$message,$headers);
echo '<script language="javascript">alert("Pesan anda berhasil dikirimkan! Terima kasih");document.location="index.php";</script>';
?>