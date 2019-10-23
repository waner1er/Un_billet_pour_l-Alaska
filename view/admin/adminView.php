<?php $title = 'ADMIN'; ?>

<?php ob_start(); ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Date de publication</th>
      <th scope="col">Titre du chapitre</th>
      <th scope="col">Contenu du chapitre</th>
      <th scope="col"></th>
    </tr>
  </thead>
<?php
while ($data = $posts->fetch())
{
?>
<tbody>
    <tr class="table-active">
      <th scope="row"><?= htmlspecialchars($data['id']) ?></th>
      <td><?= $data['creation_date_fr'] ?></td>
      <td><?= $data['title'] ?></td>
      <td><?= htmlspecialchars($data['content']) ?></td>
      <td><a href="index.php?action=chapter&amp;id=<?= $data['id'] ?>">modifier</a></td>

    </tr>


    


<?php
}
$posts->closeCursor();
?>

 </tbody>
</table>



<form action="#" method="post">
  <h2 style="text-align: center;">Ajouter un chapitre</h2>
    <div>
        <label for="title">Titre du Chapitre</label><br />
        <input type="text" id="author" name="author" />
    </div>
    <div>
        <label for="comment">Commentaire</label><br />
        
<textarea id="mytextarea" name="content" ></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>
<?php $content = ob_get_clean(); ?>

<?php require('view/frontend/template.php'); ?>