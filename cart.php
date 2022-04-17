<?php 

session_start();

if(!isset($_SESSION['loginname']))
{
    header('Location: index.php');
    die();
}
?>

<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">

    <h1>Votre panier</h1>
    <hr>
        <table class="panierClient">
                    <thead>
                    <tr>
                        <th>Vos articles</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
               
                </tbody>
            </table>
</section>

<?php require 'inc/foot.php'; ?>
