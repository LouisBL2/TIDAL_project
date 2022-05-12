<?php
/* Smarty version 3.1.39, created on 2021-11-20 13:52:49
  from '/var/www/html/V2/html/login.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6198efa168eb47_50106796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c479104ed566fb31ce8b9d57033349b9dfd08152' => 
    array (
      0 => '/var/www/html/V2/html/login.php',
      1 => 1637412702,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6198efa168eb47_50106796 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >

            </form>
        </div>
    </body>
</html>
<?php }
}
