<div class="block-scroll block-inner block-two-col block-locked">
    <div class="overlay">
        <div class="inner">
            <div class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/lock-icon.svg" alt="" /></div>

            <?php if ($field = get_field('link_results_basic', 'option')): ?>
                <div class="btn-wrapper">
                    <a href="<?= $field['url'] ?>" class="btn btn-blue"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                </div>
            <?php endif ?>

        </div>
    </div>
    <div class="wrapper">
        <div class="col">
            <div class="col-inner">
                <h3>Strengths parties:</h3>
                <ul>
                    <li>Vibrant sexual expression and attractiveness</li>
                    <li>The ability to make choices in favor of your desires and follow them in practice</li>
                    <li>The ability to passionately experience the moment and lead others in the direction of enjoyment</li>
                </ul>
            </div>
        </div>
        <div class="col">
            <div class="col-inner">
                <h3>Vulnerable parties:</h3>
                <ul>
                    <li>Feeling exhausted or suddenly losing energy during your sexual adventures and/or work projects`</li>
                    <li>There may be uncertainty about the significance of your role in relationships with partners, often the need for their leading role in order to complete the enterprises initiated by you and even achieve orgasm</li>
                    <li>Reduced ability to self-regulate, manage resources of health, money and time</li>
                </ul>
            </div>
        </div>
    </div>
</div>