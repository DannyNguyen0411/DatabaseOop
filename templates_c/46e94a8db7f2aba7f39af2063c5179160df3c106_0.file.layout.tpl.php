<?php
/* Smarty version 4.3.2, created on 2023-09-13 07:05:51
  from 'C:\Wamp.NET\sites\Project9\template\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65015f4fbdf398_32992147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e94a8db7f2aba7f39af2063c5179160df3c106' => 
    array (
      0 => 'C:\\Wamp.NET\\sites\\Project9\\template\\layout.tpl',
      1 => 1694506563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65015f4fbdf398_32992147 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185105454665015f4fbb3da0_34339341', "title");
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

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }
        .bd-mode-toggle {
            z-index: 1500;
        }
        </style>

        <header class="p-3 text-bg-dark">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>


        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php?action=homePage" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="index.php?action=productPage" class="nav-link px-2 text-white">Products</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
        <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
        <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
        <button type="button" class="btn btn-outline-light me-2"><a style="text-decoration: none;  color: inherit" href="index.php?action=loginForm">Login</a></button>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_36278895365015f4fbbf3b2_76568895', "register");
?>

        </div>

        </div>
        </div>
        </header>



<div class="container-fluid">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114287096665015f4fbc33d9_97575785', "registerForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139687908065015f4fbc6dd4_76068386', "homePage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142560030465015f4fbcaba0_16203578', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_214173232665015f4fbcf6e0_65330255', "loginForm");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137981552165015f4fbd43e4_45256298', "productPage");
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11705483065015f4fbd8171_35832018', "admin-login");
?>


</div>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103512612165015f4fbdc2e6_41740735', "footer");
?>


<!--<?php echo '<script'; ?>
 src="../assets/dist/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>
</html>

<?php }
/* {block "title"} */
class Block_185105454665015f4fbb3da0_34339341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_185105454665015f4fbb3da0_34339341',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
GameHub<?php
}
}
/* {/block "title"} */
/* {block "register"} */
class Block_36278895365015f4fbbf3b2_76568895 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'register' => 
  array (
    0 => 'Block_36278895365015f4fbbf3b2_76568895',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <button type="button" class="btn btn-warning" style="background-color: orange"><a style="text-decoration: none;  color: inherit" href="index.php?action=registerForm">Sign-up</a></button><?php
}
}
/* {/block "register"} */
/* {block "registerForm"} */
class Block_114287096665015f4fbc33d9_97575785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'registerForm' => 
  array (
    0 => 'Block_114287096665015f4fbc33d9_97575785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "registerForm"} */
/* {block "homePage"} */
class Block_139687908065015f4fbc6dd4_76068386 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'homePage' => 
  array (
    0 => 'Block_139687908065015f4fbc6dd4_76068386',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "homePage"} */
/* {block "productPage"} */
class Block_142560030465015f4fbcaba0_16203578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_142560030465015f4fbcaba0_16203578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "loginForm"} */
class Block_214173232665015f4fbcf6e0_65330255 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'loginForm' => 
  array (
    0 => 'Block_214173232665015f4fbcf6e0_65330255',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "loginForm"} */
/* {block "productPage"} */
class Block_137981552165015f4fbd43e4_45256298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'productPage' => 
  array (
    0 => 'Block_137981552165015f4fbd43e4_45256298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "productPage"} */
/* {block "admin-login"} */
class Block_11705483065015f4fbd8171_35832018 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'admin-login' => 
  array (
    0 => 'Block_11705483065015f4fbd8171_35832018',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "admin-login"} */
/* {block "footer"} */
class Block_103512612165015f4fbdc2e6_41740735 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_103512612165015f4fbdc2e6_41740735',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.php?action=admin-login" class="nav-link p-0 text-body-secondary">Inloggen als beheerder</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
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
