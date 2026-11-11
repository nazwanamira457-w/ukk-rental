<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= html_escape(isset($title) ? $title : 'Rental Mobil') ?></title>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/vendors/bootstrap-icons/bootstrap-icons.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
<div class="admin-shell">

<?php $active = isset($active) ? $active : 'dashboard'; ?>
<aside class="admin-sidebar" id="adminSidebar">
<div class="sidebar-header">
<a class="brand-mark" href="<?= site_url('dashboard') ?>">
<span class="brand-copy">
<span class="brand-title">Rental Mobil</span>
</span>
</a>
</div>

```
<nav class="sidebar-nav nav flex-column">
    <a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= site_url('dashboard') ?>">
        <span class="nav-text">Dashboard</span>
    </a>

</nav>

<div class="sidebar-footer">
    <span class="sidebar-footer-text">&copy; <?= date('Y') ?> Rental Mobil</span>
</div>
```

</aside>
<div class="sidebar-backdrop" data-sidebar-close></div>

<div class="admin-main">
<header class="admin-navbar navbar bg-white">
<button class="icon-button sidebar-toggle" type="button" data-sidebar-toggle aria-label="Menu">
<i class="bi bi-list"></i>
</button>
</header>
