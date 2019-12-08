<?php $title = 'Billet Simple pour l\'alaska;' ?>

<?php ob_start(); ?>
  





  <?php
  while ($data = $posts->fetch()):
  
  ?>
  <a  href="index.php?action=post&amp;id=<?= $data['id']?>">
      <div id="chapterBckgrnd">
        <div id="chapter_main" class="alert-light">
        <div>
          <h1 style="color: #000">
                <?= ($data['title']) ?> 
          </h1>
          <em>
            le <?= $data['creation_date_fr'] ?></em>
        </div>

          <p><?= nl2br($data['content']) ?></p>

        </div>
      </div>
  </a>

      


  <?php
  endwhile;
  $posts->closeCursor();
  ?>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>