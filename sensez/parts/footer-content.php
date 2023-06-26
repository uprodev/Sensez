<div class="container">

    <?php if ($field = get_field('text', 'option')): ?>
        <p><?= $field ?></p>
    <?php endif ?>

    <?php if( have_rows('links_footer', 'option') ): ?>

        <ul>

            <?php while( have_rows('links_footer', 'option') ): the_row(); ?>

                <?php if ($field = get_sub_field('link')): ?>
                    <li>
                        <a href="<?= $field['url'] ?>"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                    </li>
                <?php endif ?>

            <?php endwhile; ?>

        </ul>

    <?php endif; ?>

</div>
