<?php
    include_once "../_header.php";
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
                                                        <input class="form-control" name="nama" id="inputFirstName" type="text"  placeholder="Nama File"/>
                                                        <label for="inputFirstName">Nama Dokter</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3 mb-md-0">
                                                    <div class="form-floating">
                                                        <input class="form-control" name="nomor" id="inputLastName" type="text"  placeholder="Nomor File"/>
                                                        <label for="inputLastName">NIP Dokter</label>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Pilih Hari : </label>
                                                    <input type="checkbox" name="jdwl[]" value="senin" id="color_red" />
                                                    <label for="color_red">Senin</label>
                                                    <input type="checkbox" name="jdwl[]" value="selasa" id="color_green" />
                                                    <label for="color_red">Selasa</label>
                                                    <input type="checkbox" name="jdwl[]" value="rabu" id="color_blue" />
                                                    <label for="color_red">Rabu</label>
                                                    <input type="checkbox" name="jdwl[]" value="kamis" id="color_red" />
                                                    <label for="color_red">Kamis</label>
                                                    <input type="checkbox" name="jdwl[]" value="jumat" id="color_green" />
                                                    <label for="color_red">Jum'at</label>
                                                    <input type="checkbox" name="jdwl[]" value="sabtu" id="color_blue" />
                                                    <label for="color_red">Sabtu</label>
                                                </div>
                                                </div>
                                                <div class="col-sm-6">
                                                <div class="form-group">
                                                <label>Pilih Shift : </label>
                                                    <input type="checkbox" name="shift[]" value="pagi" id="color_red" />
                                                    <label for="color_red">Pagi</label>
                                                    <input type="checkbox" name="shift[]" value="siang" id="color_green" />
                                                    <label for="color_red">siang</label>
                                                    <input type="checkbox" name="shift[]" value="malam" id="color_blue" />
                                                    <label for="color_red">Malam</label>
                                            <div class="mt-4 mb-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                <button class="w-100 btn btn-primary btn-lg" value="simpan" type="submit">
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