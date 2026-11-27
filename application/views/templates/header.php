<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Student Management Dashboard - Praktikum CodeIgniter 3 dan Bootstrap 5">
	<title><?= html_escape(isset($title) ? $title : 'Dashboard'); ?> &middot; Student Management</title>

	<!-- Bootstrap 5.3 (lokal) -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
	<!-- Bootstrap Icons (lokal) -->
	<link rel="stylesheet" href="<?= base_url('assets/bootstrap-icons/bootstrap-icons.min.css'); ?>">
	<!-- CSS custom: hanya untuk layout dashboard, bukan menggantikan Bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
</head>
<body>
<div class="app-shell">
