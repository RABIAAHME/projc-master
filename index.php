<?php
session_start();

include './load.php';
$db = new mysqli('localhost', 'root', '', 'our_project');
$load = new myload;
$load->db1 = $db;
//var_dump($db);
if (isset($_POST['form_name'])) {
    if (function_exists($_POST['form_name'])) {
        $_POST['form_name']();
        /* $func();
   exit(); */
    } else {
        echo 'there is wrong something';
        exit();
    }
}
if (isset($_POST['page'])) {
    $x = file_get_contents('./pages/' . $_POST['page']);
    $load->load($x);
    //echo $x;
} else {
    $x = file_get_contents('./pages/index1.php');
    $load->load($x);
    //echo $x;
}
//////////////////////////////////////////////////////////////////////////
function login()
{
    global $db;
    //var_dump($db);
    extract($_POST);
    include './sql_inc/login.php';
    //echo $q['login'];
    $res = $db->query($sql);
    //var_dump($res);
    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        //var_dump($_SESSION);
        include './roles.php';

        $_POST['page'] = $rolelist[$_SESSION['role']] . '/' . $_SESSION['role'] . '_main.php';
    } else {
        $_POST['page'] = 'login.php';
    }
}


function create_ad()
{
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $res = mysqli_query($ins->db_conn, "SELECT PASSWORD('123456') as pass ");
        $_POST['pass'] = $res->fetch_assoc()['pass'];
        $last_id = $ins->iInsert('users', $_POST);
        if($last_id){
            $_POST['admin_id']=$last_id;
            $ins->iInsert('collages', $_POST);
        }
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}

function checklogin()
{
    if (!isset($_SESSION['user_id'])) {
        $_POST['page'] = 'login.php';
        return false;
    } else {
        return $_SESSION['user_id'];
    }
}

function add_part(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $last_id = $ins->iInsert('parts', $_POST);
        
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}

function add_level(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $last_id = $ins->iInsert('level', $_POST);
        
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
    
}

function add_term(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $last_id = $ins->iInsert('term', $_POST);
        
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}

function add_subj(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $last_id = $ins->iInsert('subj', $_POST);
        
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}

function create_stu(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $res = mysqli_query($ins->db_conn, "SELECT PASSWORD('123456') as pass ");
        $_POST['pass'] = $res->fetch_assoc()['pass'];
        $last_id = $ins->iInsert('users', $_POST);
        if($last_id){
            $_POST['users_id']=$last_id;
            $ins->iInsert('stu', $_POST);
        }
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
    
}

function get_levels(){
        if (checklogin()) {
            global $db;
            extract($_POST);
            include './sql_inc/levels.php';
            //echo $q['login'];
            $res = $db->query($sql);
            //var_dump($db->error);
            $rows=$res->fetch_all(MYSQLI_ASSOC);
            echo json_encode($rows);
            exit();
        }
    }

    function get_terms(){
        if (checklogin()) {
            global $db;
            extract($_POST);
            include './sql_inc/terms.php';
            //echo $q['login'];
            $res = $db->query($sql);
            //var_dump($db->error);
            $rows=$res->fetch_all(MYSQLI_ASSOC);
            echo json_encode($rows);
            exit();
        }
    }

    function create_dr(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
        $res = mysqli_query($ins->db_conn, "SELECT PASSWORD('123456') as pass ");
        $_POST['pass'] = $res->fetch_assoc()['pass'];
        $last_id = $ins->iInsert('users', $_POST);
        include './sql_inc/collage_id.php';
        $res = mysqli_query($ins->db_conn, $sql);

        if($last_id){
            $_POST['users_id']=$last_id;
            $_POST['collage_id']=$res->fetch_assoc()['{{col_id}}'];
            $ins->iInsert('dr_collage', $_POST);
        }
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}
function create_lec(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
       
        //$_POST['lect_date']= time();
       
        $last_id = $ins->iInsert('lects', $_POST);
         $_POST['lec_id']=$last_id;
               
        //var_dump($last_id);
    }else{
        $_POST['page'] = 'login.php';
    }
}
function hodor(){
    if (checklogin()) {
        global $db;
        include './autoInsert.php';
        $ins = new autoInsert();
        $ins->db_conn = $db;
       $z=explode('-',$_POST['lec_data']) ;
        $lec=explode('=',$z[0]);
       $r=[];
        $r['users_id']=$_SESSION['user_id'];
        $r['lects_id']=$lec[1];
        $last_id = $ins->iInsert('hodor', $r);
         if($last_id){
            echo "good";
         }else{
            echo 'bad';
         }
        
        exit;
    }else{
        $_POST['page'] = 'login.php';
    }
}




