    <?php
    include("koneksi.php");
    if(isset($_POST['input'])){
        $judul=$_POST['judul'];
        $isi=$_POST['isi'];
        $gambar=$_POST['gambar'];
        $kategori=$_POST['kategori'];
        $tanggal=$_POST['tanggal'];

        $sql ="insert into artikel (judul,isi,gambar,kategori,tanggal) values ('$judul','$isi','$gambar','$kategori','$tanggal');";
        $query = mysqli_query($db,$sql);
        if($query){
            header('location: admin.php?status=sukses');
        }else{
           header('location: admin.php?status=gagal');
        }
    }else {
        die("akses dilarang.....");
    }
        ?> 

