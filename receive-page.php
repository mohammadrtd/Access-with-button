<?php
session_start();
if (empty($_GET['token'])) {

echo "you dont have access";
exit;
}else{
    echo "hi";
}
