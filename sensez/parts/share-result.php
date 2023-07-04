<?php if (get_field('share_results', 'option')): ?>
    <section class="section res-screen-08">
        <div class="container">

            <?php if ($field = get_field('share_results', 'option')['title']): ?>
                <h2><?= $field ?></h2>
            <?php endif ?>

            <div class="wrapper">

                <?php if (get_field('share_results', 'option')['copy']): ?>
                    <a href="#" onclick="copyText()" class="btn-share share-copy">
                        <div class="inner">
                            <svg width="259" height="259" viewBox="0 0 259 259" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M129.5 0L146.922 19.5011L169.518 6.33818L180.061 30.2686L205.618 24.7323L208.25 50.7495L234.268 53.3818L228.731 78.9391L252.662 89.4823L239.499 112.078L259 129.5L239.499 146.922L252.662 169.518L228.731 180.061L234.268 205.618L208.25 208.25L205.618 234.268L180.061 228.731L169.518 252.662L146.922 239.499L129.5 259L112.078 239.499L89.4823 252.662L78.9391 228.731L53.3818 234.268L50.7495 208.25L24.7323 205.618L30.2686 180.061L6.33818 169.518L19.5011 146.922L0 129.5L19.5011 112.078L6.33818 89.4823L30.2686 78.9391L24.7323 53.3818L50.7495 50.7495L53.3818 24.7323L78.9391 30.2686L89.4823 6.33818L112.078 19.5011L129.5 0Z" fill="#0A0517" />
                            </svg>
                            <span class="text"><?php _e('copy', 'Sensez') ?></span>
                        </div>
                    </a>
                    <script>
                        function copyText() {navigator.clipboard.writeText("<?php the_permalink() ?>");}
                    </script>
                <?php endif ?>

                <?php if (get_field('share_results', 'option')['instagram']): ?>
                    <a href="#" class="btn-share share-inst" target="_blank"><?php _e('Instagram', 'Sensez') ?></a>
                <?php endif ?>

                <?php if (get_field('share_results', 'option')['reddit']): ?>
                    <a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>" class="btn-share share-reddit" target="_blank"><?php _e('reddit', 'Sensez') ?></a>
                <?php endif ?>

                <?php if (get_field('share_results', 'option')['snapchat']): ?>
                    <a href="https://www.snapchat.com/scan?attachmentUrl=<?php the_permalink() ?>" class="btn-share share-snapchat" target="_blank"><?php _e('snapchat', 'Sensez') ?></a>
                <?php endif ?>


                <?php if (get_field('share_results', 'option')['twitter']): ?>
                    <a href="https://twitter.com/intent/tweet?url=<?php the_permalink() ?>" class="btn-share share-twitter" target="_blank">
                        <div class="inner">
                          <svg width="315" height="315" viewBox="0 0 315 315" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M157.5 0L178.689 23.7176L206.17 7.7086L218.993 36.8132L250.076 30.0798L253.278 61.7224L284.92 64.9238L278.187 96.007L307.291 108.83L291.282 136.311L315 157.5L291.282 178.689L307.291 206.17L278.187 218.993L284.92 250.076L253.278 253.278L250.076 284.92L218.993 278.187L206.17 307.291L178.689 291.282L157.5 315L136.311 291.282L108.83 307.291L96.007 278.187L64.9238 284.92L61.7224 253.278L30.0798 250.076L36.8132 218.993L7.7086 206.17L23.7176 178.689L0 157.5L23.7176 136.311L7.7086 108.83L36.8132 96.007L30.0798 64.9238L61.7224 61.7224L64.9238 30.0798L96.007 36.8132L108.83 7.7086L136.311 23.7176L157.5 0Z" fill="#CBC7F7" />
                        </svg>
                        <span class="text"><?php _e('twitter', 'Sensez') ?></span>
                    </div>
                </a>
            <?php endif ?>

            <?php if (get_field('share_results', 'option')['facebook']): ?>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink() ?>" class="btn-share share-facebook" target="_blank"><?php _e('facebook', 'Sensez') ?></a>
            <?php endif ?>

        </div>
    </div>
</section>
<?php endif ?>