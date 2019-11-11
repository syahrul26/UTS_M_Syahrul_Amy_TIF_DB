<!doctype html>
<html lang="en">
<head>
	<base href="<?=base_url()?>">
	<meta charset="UTF-8">
	<title>Add Data</title>
</head>
  <div class="content-wrapper">
    <section class="content-header">
    	<h1>
			Data Tables Mahasiswa
			<small> </small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Tables</a></li>
			<li class="active">Data Tables</li>
		</ol>
	</section>
	<section class="content">
        <div class="row">
        	<div class="box">
			<div class="box-header">
      <?php echo "<h3>".$judul."</h3>"; ?>
<?php echo validation_errors(); ?>
<form method="post" action="<?php echo base_url('c_crud/simpan')?>" enctype="multipart/form-data">
	<div class="form-group row">		
			<label for="Nim" class="col-sm-2 col-form-label">NIM :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nim"placeholder="NIM">
			</div>
	</div>

	<div class="form-group row">		
			<label for="NAMA" class="col-sm-2 col-form-label"> Nama :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nama_mahasiswa"placeholder="Nama">
			</div>
	</div>

	<div class="form-group row">		
			<label for="NAMA" class="col-sm-2 col-form-label"> Program Studi :</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="prodi"placeholder="Program Studi">
			</div>
	</div>


	<fieldset class="form-group">
	<div class="row">
	<label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin :</label>
	<div class="col-sm-10">
	<div class="form-check">
 	 <input class="form-check-input" type="radio" name="jk" id="L" value="Laki-Laki" checked>
 	 <label class="form-check-label" for="l">
            Laki -Laki
          </label>
      </div>
 	 <div class="form-check">
 	 <input class="form-check-input" type="radio" name="jk" id="P" value="Perempuan" checked>
 	 <label class="form-check-label" for="p">
            Perempuan
          </label>
      </div>
  </div>
</div>
</fieldset>

	<div class="form-group row">		
			<label for="Alamat" class="col-sm-2 col-form-label"> Alamat :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="alamat"placeholder="Alamat">
	</div>
</div>

	<div class="form-group row">		
			<label for="nomer" class="col-sm-2 col-form-label"> Nomor Handphone :</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="hp"placeholder="Nomor Handphone">
	</div>
</div>

	<div class="form-group row">
	   <div class="col-sm-1">
	     <button type="submit" name="simpan" class="btn btn-primary">Save</button>
	   </div>	

    <!-- <div class="col-auto"> -->
    <div class="col-sm-1">
      <a href="<?php echo base_url()."c_crud/tampil";?>">
      	<input type="button" class="btn btn-primary" value="Cancel"></a>
    </div>	
</div>

</form>
    </section>
    <section class="content container-fluid">
    </section>
</div>
</div>
</form>
</div>
</section>
  </div>




