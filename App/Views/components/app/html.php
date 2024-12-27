<?php

use App\Helpers\Menu;
use App\Helpers\Setting;
use Core\View;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Luni Dashboard">
  <meta name="keyword" content="DineVerse">
  <link rel="icon" href="/Public/assets/logo/dv-profil-4.png" type="image/x-icon"> <!-- Favicon-->
  <title>Dashboard</title>
  <!-- Application vendor css url -->
  <link rel="stylesheet" href="/Public/assets/cssbundle/daterangepicker.min.css">
  <!-- project css file  -->
  <link rel="stylesheet" href="/Public/assets/css/luno-style.css">
  <!-- <link rel="stylesheet" href="https://www.wrraptheme.com/templates/luno/assets/css/luno-style.css"> -->
  <!-- <link rel="stylesheet" href="/Public/assets/cssbundle/tuicalendar.min.css"> -->
  <!-- Jquery Core Js -->
  <script src="/Public/assets/js/plugins.js"></script>
</head>

<body class="layout-1" data-luno="theme-red">
  <!-- start: sidebar -->
  <div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
      <!-- sidebar: title-->
      <div class="title-text d-flex align-items-center mb-4 mt-1">
        <h4 class="sidebar-title mb-0 flex-grow-1"><span class="sm-txt">D</span><span>ineverse</span></h4>
      </div>
      <!-- sidebar: menu list -->
      <div class="main-menu flex-grow-1">
        <ul class="menu-list">
            <!-- <li class="divider py-2 lh-sm"><span class="small">MAIN</span><br> <small class="text-muted">Unique dashboard designs </small></li> -->
            <?php foreach(Menu::myMenu() as $name => $menu): ?>
                <?php if(!isset($menu['sub'])): ?>
                    <li>
                    <a class="m-link <?= $menu['active'] ?>" href="<?= $menu['link'] ?? "" ?>">
                        <?= $menu['icon'] ?? "" ?>
                        <span class="ms-2"><?= $name ?? "N/A" ?></span>
                    </a>
                    </li>
                <?php else: ?>
                    <li class="collapsed">
                      <a class="m-link <?= $menu["active"] ?> <?= $menu['active'] === "active" ? "collapsed" : "" ?>" aria-expanded="<?= $menu['active'] === "active" ? "true" : "false" ?>" data-bs-toggle="collapse" data-bs-target="#<?= $menu['id'] ?? '' ?>" href="<?= $menu['link'] ?? "" ?>">
                        <?= $menu['icon'] ?? "" ?>
                        <span class="ms-2"><?= $name ?? "" ?></span>
                        <span class="arrow fa fa-angle-right ms-auto text-end"></span>
                      </a>
                      <!-- Menu: Sub menu ul -->
                      <ul class="sub-menu collapse <?= $menu['active'] === "active" ? "show" : "" ?>" id="<?= $menu['id'] ?? '' ?>">
                        <?php foreach($menu['sub'] as $subName => $link): ?>
                        <li><a class="ms-link <?= $link["active"] ?>" href="<?= $link["url"] ?? ""?>"><?= $subName ?? "" ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
    <!-- start: body area -->
    <div class="wrapper">
        <?php View::component("app/topbar") ?>
        <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 mt-0 mt-lg-3">
            <div class="container-fluid">