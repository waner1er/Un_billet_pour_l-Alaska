<?php ob_start(); ?>
<h2>Liste des commentaires </h2>
 <table class="table">
   <thead>
     <tr>
       <th>Utilisateur</th>
       <th>mail</th>
       <th>Message</th>
    </tr>
   </thead>
    <tbody>
    <tr>
       <th>machin truc</th>
       <th>blablabli@pouloulou.org</th>
       <th>bonjour blablablabla</th>
    </tr>
    </tbody>
</table>    

   
<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
