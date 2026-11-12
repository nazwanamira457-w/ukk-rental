<?php $this->load->view('layout/header', ['title' => 'Dashboard Rental Mobil', 'active' => 'dashboard']); ?>

<h1 class="h3 mb-4">Dashboard</h1>

<?php if (!empty($pesan) && $pesan == 'dihapus'): ?>
<div class="alert alert-success">Data Rental mobil Raracute berhasil dihapus.</div>
<?php endif; ?>

<p class="text-muted mb-3">
Total: <strong><?= $total ?></strong>  | 
Tersedia: <strong><?= $tersedia ?></strong>  | 
Disewa: <strong><?= $disewa ?></strong>
</p>

<input type="search" class="form-control mb-3" style="max-width: 280px;" placeholder="Cari mobil..." data-table-search="tabelMobil">

<section class="panel">
<div class="table-responsive">
<table class="table align-middle mb-0" id="tabelMobil">
<thead>
<tr>
<th>Nama Mobil</th>
<th>Plat Nomor</th>
<th>Harga Sewa</th>
<th>Status</th>
<th class="text-end">Aksi</th>
</tr>
</thead>
<tbody>
<?php foreach ($mobil as $row): ?>
<?php $ok = strtolower($row['status']) == 'tersedia'; ?>
<tr>
<td><?= html_escape($row['nama_mobil']) ?></td>
<td><?= html_escape($row['plat_nomor']) ?></td>
<td>Rp <?= number_format($row['harga_sewa'], 0, ',', '.') ?></td>
<td><span class="badge <?= $ok ? 'text-bg-success' : 'text-bg-warning' ?>"><?= html_escape($row['status']) ?></span></td>
<td class="text-end">
<a href="<?= site_url('dashboard/detail/' . $row['id']) ?>" class="btn btn-sm btn-light" title="Detail">
<i class="bi bi-eye"></i>
</a>
<form action="<?= site_url('dashboard/hapus/' . $row['id']) ?>" method="post" class="d-inline"
onsubmit="return confirm('Yakin hapus mobil ini?');">
<button type="submit" class="btn btn-sm btn-light text-danger" title="Hapus">
<i class="bi bi-trash"></i>
</button>
</form>
</td>
</tr>
<?php endforeach; ?>
<?php if (empty($mobil)): ?>
<tr><td colspan="5" class="text-center text-muted py-4">Belum ada data mobil.</td></tr>
<?php endif; ?>
</tbody>
</table>
</div>
</section>

<?php $this->load->view('layout/footer'); ?>
