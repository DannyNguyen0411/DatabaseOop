<?php
/* Smarty version 4.3.2, created on 2023-10-03 10:59:10
  from 'C:\Wamp.NET\sites\oopdb\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_651bf3feb61f77_98173190',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22866d203007b7b81717902a88f9c5d7dc8a7930' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\oopdb\\template\\layout.tpl',
      1 => 1696257676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_651bf3feb61f77_98173190 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2079893951651bf3feb13132_30855191', "title");
?>
</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        /*dropdown button*/
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            min-width: 160px;
            z-index: 1;
            transition: all 1s;
        }

        .dropdown-content:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: orange;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

    </style>
</head>
<body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1729264536651bf3feb1d644_76382924', "navmenu");
?>

<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_76539636651bf3feb36951_56682716', "userInformation");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1490253257651bf3feb39240_07074103', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_490938207651bf3feb3b9e8_56839417', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1412278504651bf3feb3e193_42779225', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_499803114651bf3feb40938_33096908', "filterPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_783733081651bf3feb46105_91456593', "loginForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2058254526651bf3feb499b2_69386626', "admin-login");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1559566769651bf3feb4ce60_87155150', "adm-dash");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1129875547651bf3feb4f664_62579365', "userUpdateCredentials");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1560972583651bf3feb51de6_53318618', "contact-page");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1401004462651bf3feb54532_70066181', "userChangeSuccesFull");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1422600860651bf3feb56ce6_87940986', "registerSuccesFull");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639572091651bf3feb594e1_39586174', "notpermitted");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1786648803651bf3feb5bd01_75016373', "cartPage");
?>

</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_647125099651bf3feb5ee39_95257582', "footer");
?>


    <!--<?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>-->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    </body>
</html>

<?php }
/* {block "title"} */
class Block_2079893951651bf3feb13132_30855191 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2079893951651bf3feb13132_30855191',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "register"} */
class Block_1377438514651bf3feb310c9_64294960 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=registerForm">Sign-up</a></button><?php
}
}
/* {/block "register"} */
/* {block "navmenu"} */
class Block_1729264536651bf3feb1d644_76382924 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'navmenu' => 
  array (
    0 => 'Block_1729264536651bf3feb1d644_76382924',
  ),
  'register' => 
  array (
    0 => 'Block_1377438514651bf3feb310c9_64294960',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                </a>


                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php?action=homePage" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="index.php?action=productPage" class="nav-link px-2 text-white">Products</a></li>
                    <li><a href="index.php?action=playstationPage" class="nav-link px-2 text-white">Playstation</a></li>
                    <li><a href="index.php?action=xboxPage" class="nav-link px-2 text-white">Xbox</a></li>
                    <li><a href="index.php?action=nintendoPage" class="nav-link px-2 text-white">Nintendo</a></li>
                    <li><a href="index.php?action=contact" class="nav-link px-2 text-white">FAQ</a></li>
                </ul>

                <form method="POST" class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" action="index.php?action=search" autocomplete="off">
                    <input type="search" name="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
                </form>


                <div class="text-end">
                    <?php if ((isset($_SESSION['user']))) {?>
                    <div class="dropdown">
                        <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none; color: inherit" href="index.php?action=userInformation"><?php echo $_SESSION['user']['username'];?>
</a></button>

                        <div class="dropdown-content">
                    <ul class="dropdown-menu d-block position-static mx-0 border-0 shadow w-220px" data-bs-theme="dark">
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="index.php?action=userInformation">
                                <svg class="bi" width="16" height="16"><use xlink:href="#files"/></svg>
                                Mijn gegevens
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#image-fill"/></svg>
                                Photos
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#film"/></svg>
                                Movies
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#music-note-beamed"/></svg>
                                Music
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="#">
                                <svg class="bi" width="16" height="16"><use xlink:href="#joystick"/></svg>
                                Games
                            </a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item d-flex gap-2 align-items-center" href="index.php?action=logout">
                                <svg class="bi" width="16" height="16"><use xlink:href="#trash"/></svg>
                                Uitloggen
                            </a>
                        </li>
                    </ul>
                </div>
                        </div>
                    <?php } else { ?>
                        <button type="button" class="btn btn-outline-light me-2"><a style="text-decoration: none; color: inherit" href="index.php?action=loginForm">Login</a></button>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1377438514651bf3feb310c9_64294960', "register", $this->tplIndex);
?>

                    <?php }?>
                </div>
            </div>
        </div>
</header>
<?php
}
}
/* {/block "navmenu"} */
/* {block "userInformation"} */
class Block_76539636651bf3feb36951_56682716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userInformation' => 
  array (
    0 => 'Block_76539636651bf3feb36951_56682716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userInformation"} */
/* {block "registerForm"} */
class Block_1490253257651bf3feb39240_07074103 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerForm' => 
  array (
    0 => 'Block_1490253257651bf3feb39240_07074103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerForm"} */
/* {block "homePage"} */
class Block_490938207651bf3feb3b9e8_56839417 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_490938207651bf3feb3b9e8_56839417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
class Block_1412278504651bf3feb3e193_42779225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_1412278504651bf3feb3e193_42779225',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "filterPage"} */
class Block_499803114651bf3feb40938_33096908 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'filterPage' => 
  array (
    0 => 'Block_499803114651bf3feb40938_33096908',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "filterPage"} */
/* {block "loginForm"} */
class Block_783733081651bf3feb46105_91456593 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'loginForm' => 
  array (
    0 => 'Block_783733081651bf3feb46105_91456593',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginForm"} */
/* {block "admin-login"} */
class Block_2058254526651bf3feb499b2_69386626 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin-login' => 
  array (
    0 => 'Block_2058254526651bf3feb499b2_69386626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-login"} */
/* {block "adm-dash"} */
class Block_1559566769651bf3feb4ce60_87155150 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'adm-dash' => 
  array (
    0 => 'Block_1559566769651bf3feb4ce60_87155150',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "adm-dash"} */
/* {block "userUpdateCredentials"} */
class Block_1129875547651bf3feb4f664_62579365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userUpdateCredentials' => 
  array (
    0 => 'Block_1129875547651bf3feb4f664_62579365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userUpdateCredentials"} */
/* {block "contact-page"} */
class Block_1560972583651bf3feb51de6_53318618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contact-page' => 
  array (
    0 => 'Block_1560972583651bf3feb51de6_53318618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "contact-page"} */
/* {block "userChangeSuccesFull"} */
class Block_1401004462651bf3feb54532_70066181 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'userChangeSuccesFull' => 
  array (
    0 => 'Block_1401004462651bf3feb54532_70066181',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "userChangeSuccesFull"} */
/* {block "registerSuccesFull"} */
class Block_1422600860651bf3feb56ce6_87940986 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerSuccesFull' => 
  array (
    0 => 'Block_1422600860651bf3feb56ce6_87940986',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerSuccesFull"} */
/* {block "notpermitted"} */
class Block_1639572091651bf3feb594e1_39586174 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notpermitted' => 
  array (
    0 => 'Block_1639572091651bf3feb594e1_39586174',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "notpermitted"} */
/* {block "cartPage"} */
class Block_1786648803651bf3feb5bd01_75016373 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cartPage' => 
  array (
    0 => 'Block_1786648803651bf3feb5bd01_75016373',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "cartPage"} */
/* {block "footer"} */
class Block_647125099651bf3feb5ee39_95257582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_647125099651bf3feb5ee39_95257582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <footer class="py-5 " >
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php?action=admin-login" class="nav-link p-0 text-body-secondary">Admin login</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>


                <div class="col-md-5 offset-md-1 mb-3">
                    <form>
                        <h5 >Subscribe to our newsletter</h5>
                        <p>Monthly digest of what's new and exciting from us.</p>
                        <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button" style="background-color: orange; color: black; border: none">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>
<?php
}
}
/* {/block "footer"} */
}
