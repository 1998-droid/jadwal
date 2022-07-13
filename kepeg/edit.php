<?php
    include_once "../_header.php";


    //menampilkan data siswa berdasarkan siswaID
      $id=$_GET['id'];
      $sql=mysqli_query($koneksi, "SELECT * FROM tb_dokter WHERE id_dokter='$id'") or die (mysqli_error($koneksi));;
      $data=mysqli_fetch_array($sql);
      //data hobi dari tabel siswa 
      $hari=explode(',', $data['jadwal']);
      
       

?>
<div id="layoutSidenav_content">
                <main>
<div class="container">
                        <div class="row justify-content-center">
               
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Upload File</h3></div>
                                    <div class="card-body">
                                        <form action="pro.php" method="post" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" name="id" id="inputFirstName" type="hidden" value="<?=$data['id_dokter']?>"  placeholder="Nama File"/>
                                                        <input class="form-control" name="nama" id="inputFirstName" type="text" value="<?=$data['nama']?>"  placeholder="Nama File"/>
                                                        <label for="inputFirstName">Nama File</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="nomor" id="inputLastName" type="text" value="<?=$data['nip']?>" placeholder="Nomor File"/>
                                                        <label for="inputLastName">Nomor</label>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Pilih Hari : </label>
                                                    <input type="checkbox" name="jdwl[]" value="senin" <?php in_array ('senin', $hari) ? print "checked" : ""; ?> id="color_red" />
                                                    <label for="color_red">Senin</label>
                                                    <input type="checkbox" name="jdwl[]" value="selasa" <?php in_array ('selasa', $hari) ? print "checked" : ""; ?>  id="color_green" />
                                                    <label for="color_red">Selasa</label>
                                                    <input type="checkbox" name="jdwl[]" value="rabu" <?php in_array ('rabu', $hari) ? print "checked" : ""; ?>  id="color_blue" />
                                                    <label for="color_red">Rabu</label>
                                                    <input type="checkbox" name="jdwl[]" value="kamis" <?php in_array ('kamis', $hari) ? print "checked" : ""; ?>  id="color_red" />
                                                    <label for="color_red">Kamis</label>
                                                    <input type="checkbox" name="jdwl[]" value="jumat" <?php in_array ('jumat', $hari) ? print "checked" : ""; ?>  id="color_green" />
                                                    <label for="color_red">Jum'at</label>
                                                    <input type="checkbox" name="jdwl[]" value="sabtu" <?php in_array ('sabtu', 
                                                    $hari) ? print "checked" : ""; ?>  id="color_blue" />
                                                    <label for="color_red">Sabtu</label>
                                                </div>
                                                </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                <button class="w-100 btn btn-primary btn-lg" value="edit" type="submit">
                                                Kirim
                                                </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    </div>
                                    </main>



                    <?php
    include_once "../_footer.php";
?>