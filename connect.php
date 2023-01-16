<?php

    $no_ticket = ((isset($_POST['no_ticket']))?$_POST['no_ticket']:0);
    $create_date = ((isset($_POST['create_date']))?$_POST['create_date']:'2022-07-01');
    $subject = ((isset($_POST['subject']))?$_POST['subject']:'');
    $from = ((isset($_POST['from']))?$_POST['from']:'');
    $priority = ((isset($_POST['priority']))?$_POST['priority']:'');
    $assigned_to = ((isset($_POST['assigned_to']))?$_POST['assigned_to']:'');
    $nama_team = ((isset($_POST['nama_team']))?$_POST['nama_team']:'');

    //koneksi ke database
  $koneksi =mysqli_connect("localhost","root","","sla");
echo "insert into new_ticket(create_date, subject, priority, assigned_to, nama_team, id_divisi, id_helptopic, id_department, id_jabatan, id_dampak, id_categories) values ('".$create_date."','".$subject."', '".$priority."', '".$assigned_to."', '".$nama_team."', '001', '002', '002', 10, 11, 10, 11)";
  
  //ambil data dari tabel ticket
  $result= mysqli_query ($koneksi,"insert into new_ticket(create_date, subject, priority, assigned_to, nama_team, id_divisi, id_helptopic, id_department, id_jabatan, id_dampak, id_categories) values ('".$create_date."','".$subject."', '".$priority."', '".$assigned_to."', '".$nama_team."', '001', '002', '002', 10, 11, 10)");
var_dump($result);
?>