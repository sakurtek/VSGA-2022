<?php require_once "modul/modul.php"; ?>
<!-- TAMPIL JUDUL -->
<div class="container-fluid p-3 text-center">
	<h3>Tampil Data Anggota</h3>
</div>

<!-- MEMBUAT MENU GABUNGAN -->
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9 p-2">
			<div class="btn-group">
				<a href="index.php?p=anggota-input" class="btn btn-primary">Tambah Anggota
				</a>
			</div>

			<div class="btn-group">
				<a href="pages/cetak.php" target="_blank" class="btn btn-primary">Cetak Anggota
				</a>
			</div>
		</div>

		<div class="col-sm-3 p-2">
			<div class="nav-sm justify-content-end">

			<form class="form-inline" method="POST">
			<div class="input-group">
  				<input type="text" class="form-control" name="pencarian" id="pencarian" placeholder="Cari Pengguna">
  				<div class="input-group-append">
    				<button class="btn btn-success" type="submit" name="submit">Cari Anggota</button>
  				</div>
			</div>
			</form>

			</div>

		</div>
	</div>
</div>

<div class="container-fluid p-3">
	<?php getTampilAnggotaRev($_GET, $_SERVER['REQUEST_METHOD']); ?>
</div>