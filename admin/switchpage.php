<?php
    switch (@$_GET['page']){
        case "student":
            include 'student.php';
            break;
        case "edit_std":
            include 'edit_std.php';
            break;
        case "major":
            include 'major.php';
            break;
        case "order_list":
            include 'order_list.php';
            break;
        case "order_major":
            include 'order_major.php';
            break;
        case "order_majorf":
            include 'order_majorf.php';
            break;            
        case "product":
            include 'product.php';
            break;
        case "noconfirm":
            include 'noconfirm.php';
            break;
        case "add_std":
            include 'add_std.php';
            break;
        default:
            include 'dashboard.php';
            break;
    }

