<?php
/**
 * Created by PhpStorm.
 * User: roger
 * Date: 16-5-1
 * Time: 下午2:58
 */

/*
 * call controller upload action
 */
require_once "include.php";

$xmlFileController = new ProductsController($smarty);
$xmlFileController->upload();