 <?php $url = $this->uri->segment(1); ?>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="<?= base_url('Dashboard') ?>" class="brand-link">
     <span class="brand-text font-weight-light"><b>Admin</b>Marketing</span>
   </a>
   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel d-flex" style="margin-top: 5%;">
       <div class="pull-left image" style="margin-top: 4%;">
         <img src="<?php echo base_url('assets/admin'); ?>/dist/img/default-avatar.png" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="pull-left info">
         <a href="#" class="d-block" style="color: #fff;"><?= $this->session->userdata('user_logged')->name; ?></a>
         <p style="color: #fff; font-size: 9pt;">
           <i class="fa fa-circle text-success"></i>
         </p>
       </div>
     </div>
     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?= base_url("Dashboard") ?>" class="nav-link <?= $url === 'Dashboard' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-tachometer-alt"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url("Question") ?>" class="nav-link <?= $url === 'Question' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-question"></i>
             <p>
               Questions
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url("Tags") ?>" class="nav-link <?= $url === 'Tags' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-tag"></i>
             <p>
               Tags
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url("Blog") ?>" class="nav-link <?= $url === 'Blog' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-newspaper"></i>
             <p>
               Blog
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?= base_url("Banner") ?>" class="nav-link <?= $url === 'Banner' ? 'active' : '' ?>">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Banner
             </p>
           </a>
         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>