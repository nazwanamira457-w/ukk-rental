<?php $this->load->view('layout/header', ['title' => 'Detail Mobil', 'active' => 'dashboard']); ?>

<div class="d-flex align-items-center gap-2 mb-4">
<a href="<?= site_url('dashboard') ?>" class="btn btn-sm btn-light" title="Kembali"><i class="bi bi-arrow-left"></i></a>
<h1 class="h3 mb-0">Detail Mobil</h1>
</div>

<?php $ok = strtolower($mobil['status']) == 'tersedia'; ?>
<section class="panel p-4" style="max-width: 560px;">
<table class="table mb-0">
<tr><th style="width: 40%;">ID</th><td><?= $mobil['id'] ?></td></tr>
<tr><th>Nama Mobil</th><td><?= html_escape($mobil['nama_mobil']) ?></td></tr>
<tr><th>Plat Nomor</th><td><?= html_escape($mobil['plat_nomor']) ?></td></tr>
<tr><th>Harga Sewa</th><td>Rp <?= number_format($mobil['harga_sewa'], 0, ',', '.') ?> / hari</td></tr>
<tr><th>Status</th><td><span class="badge <?= $ok ? 'text-bg-success' : 'text-bg-warning' ?>"><?= html_escape($mobil['status']) ?></span></td></tr>
</table>
</section>

<?php $this->load->view('layout/footer'); ?>