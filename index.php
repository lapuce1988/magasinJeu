<?php ob_start();
session_start();
include 'Product.php';
include 'ProductManager.php';
include 'User.php';
include 'UserManager.php';
include 'views/header.php';

$productManager = new ProductManager();

$userManager = new UserManager();

$url = empty($_GET['url']) ? 'home' : $_GET['url'];

switch ($url){
    case 'home':
        $products = $productManager->fetchAll();
        include('views/home.php');
        break;
    case 'pk-search-product':
        include('views/productPk.php');
        break;
    case 'addProduct':
        include('views/formProductAjouter.php');
        break;
    case 'deleteProduct':
        $delete = $productManager->delete($_GET['pk']);
        header('location: index.php?url=home');
        exit();
        break;
    case 'updateProduct':
        $product = $productManager->fetch($_GET['pk']);
        include('views/formProductModifier.php');
        break;
    case 'listUser':
        $users = $userManager->fetchAll();
        include('views/listUser.php');
        break;
    case 'addUser':
        include '';
    case 'pk-search-user':
        include('views/userPk.php');
        break;
    case 'valideFormAjoutProduct':
        $newProduct = $productManager->save($_POST);
        header('location: index.php?url=home');
        exit();
        break;
    case 'valideFormModifProduct':
        $product = $productManager->update($_POST);
        header('location: index.php?url=home');
        exit();
        break;
}


include 'views/footer.php';