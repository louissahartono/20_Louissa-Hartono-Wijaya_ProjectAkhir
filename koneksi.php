<?php

$koneksi = mysqli_connect("localhost","root","mysql","tugasakhir");
if(mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

