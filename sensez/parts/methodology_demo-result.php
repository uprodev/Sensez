<?php if (get_field('methodology_results_demo', 'option')): ?>
  <section class="section res-screen-05">
    <div class="bg">
      <div class="container">
        <div class="wrapper">

          <?php if ($field = get_field('methodology_results_demo', 'option')['image']): ?>
            <div class="image">
              <figure>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </figure>
            </div>
          <?php endif ?>
          
          <?php if ($field = get_field('methodology_results_demo', 'option')['text']): ?>
            <div class="text">
              <div class="inner"><?= $field ?></div>
            </div>
          <?php endif ?>
          
        </div>

        <?php if ($field = get_field('methodology_results_demo', 'option')['list']): ?>
          <div class="list"><?= $field ?></div>
        <?php endif ?>
        
      </div>
      <?php if ($field = get_field('methodology_results_demo', 'option')['quote']): ?>
        <div class="cite">
          <div class="container">
            <div class="inner">
              <blockquote><?= $field ?></blockquote>
            </div>
          </div>
        </div>
      <?php endif ?>
      
    </div>
  </section>
  <?php endif ?>