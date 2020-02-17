<?php 
    if(isset($_GET['pesan'])){
	    $pesan = $_GET['pesan'];
	    if($pesan == "input"){
		    echo "Data berhasil di tambahkan.";
	    }else if($pesan == "update"){
		    echo "Data berhasil di edit.";
	    }else if($pesan == "hapus"){
		    echo "Data berhasil di hapus.";
	    }
    }   
?>