<?php $title = 'Nouveau chapitre'; ?>


<?php ob_start(); ?>


    <div id="myTabContent" class="tab-content">
      <div class="tab-pane fade active show" id="home">
          <div class="container">
              <form action="index.php?action=addChapter" method="post">
                  <h2 style="text-align: center;">Rédiger un nouveau chapitre</h2>

                  <div>
                      <label for="title">Titre du Chapitre</label><br />
                      <input type="text" id="title" name="title" />
                  </div>

                  <div>
                      <label for="id"></label><br />
                      <textarea class="mytextarea" name="content" ></textarea>
                  </div>

                  <div>
                      <input class="btn btn-success " type="submit" />
                  </div>

              </form>
          </div>
      </div>
    </div>

    

<?php $content = ob_get_clean(); ?>

<?php require('adminTemplate.php'); ?>
