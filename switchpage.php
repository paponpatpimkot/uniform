<?php
    switch (@$_GET['page']){
        case 'shop_m':
            include 'form/shop_m.php';
            break;
        case 'shop_f':
            include 'form/shop_f.php';
            break;        
        case 'shirts_m':
            include 'form/shirts_m.php';
            break;
        case 'shirts_f':
            include 'form/shirts_f.php';
            break;
        case 'shirtl_m':
            include 'form/shirtl_m.php';
            break;
        case 'shirtl_f':
            include 'form/shirtl_f.php';
            break;
        case 'trousers':
            include 'form/trousers.php';
            break;
        case 'skirt':
            include 'form/skirt.php';
            break;
        case 'tpala':
            include 'form/tpala.php';
            break;
        case 'spala':
            include 'form/spala.php';
            break;        
        case 'canvas_shoe':
            include 'form/canvas_shoe.php';
            break;
        case 'cutshoe_m':
            include 'form/cutshoe_m.php';
            break;
        case 'cutshoe_f':
            include 'form/cutshoe_f.php';
            break;
        case 'safetyshoe':
            include 'form/safetyshoe.php';
            break;  
        case 'wat_canvas':
            include 'masurment/wat_canvas.php';
            break;
        case 'wat_cutshoe_m':
            include 'masurment/wat_cutshoe_m.php';
            break;
        case 'wat_cutshoe_f':
            include 'masurment/wat_cutshoe_f.php';
            break;
        case 'myorder';
            include 'myorder.php';
            break;        
        default:
            include 'dashboard.php';
            break;
    }

