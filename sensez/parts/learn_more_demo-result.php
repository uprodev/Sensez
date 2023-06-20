<section class="section screen res-screen-02 fp-auto-height" data-bg="#949AF6">
    <div class="container">
        <div class="block-inner block-locked">
            <div class="overlay">
                <div class="inner">
                    <div class="icon"><img src="<?= get_stylesheet_directory_uri() ?>/assets/img/lock-icon.svg" alt="" /></div>

                    <?php if ($field = get_field('link_results_demo', 'option')): ?>
                        <div class="btn-wrapper">
                            <a href="<?= $field['url'] ?>" class="btn btn-blue"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
                        </div>
                    <?php endif ?>

                </div>
            </div>
            <div class="wrapper">
                <div class="image">
                    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/strength.svg" alt="" />
                </div>
                <div class="text">
                    <h3>Meet your primary strength</h3>
                    <p>Sexuality is the main source of your strength and energy, emotional uplift and mental clarity. Your natural creativity is charged with erotic dreams and fantasies, and develops through their implementation in practice.</p>
                    <p>You are at the peak of your sexual activity and need to freely express your desires with partners, sexual experimentation and admiration from others.</p>
                    <p>Perhaps the sexual context is the main thing that attracts you to life now. Only something completely new and unexplored that flirts with your imagination in other realms — a journey, a spectacular social achievement or public recognition...</p>
                </div>
            </div>
        </div>
    </div>
</section>