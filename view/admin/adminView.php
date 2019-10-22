<?php $title = 'ADMIN'; ?>

<?php ob_start(); ?>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">n°</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
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
      <td><?= htmlspecialchars($data['content']) ?></td>
      <td><a href="">modifier</a></td>

    </tr>


    


<?php
}
$posts->closeCursor();
?>

 </tbody>
</table>



<form action="addChapter" method="post">
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