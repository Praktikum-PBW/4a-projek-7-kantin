<?php
if(isset($_GET['page'])){
    
    include '../lib/koneksi.php';
    
    $page = $_GET['page'];

    switch($page){
        case 'dashboard':
            include 'dashboard/index.php';
            break;
        case 'dashboard_create':
            include 'dashboard/create.php';
            break;
        case 'dashboard_store':
            include 'dashboard/store.php';
            break;
        case 'dashboard_edit':
            include 'dashboard/edit.php';
            break;
        case 'dashboard_update':
            include 'dashboard/update.php';
            break;
        case 'dashboard_delete':
            include 'dashboard/delete.php';
            break;
        case 'signup':
            include 'new/signup.php';
            break;
        case 'signin':
            include 'new/signin.php';
            break;
        default :
            echo "Maaf Halaman Tidak Ada";
            break;
    }   
} else{
    include 'profile.php';
}
?>