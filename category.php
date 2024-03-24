<?php get_header() ?>

<div id="accueil" class="global clr-agencement-primaire">
    <section>
        <?php
            $category = single_cat_title('', false);
            echo "<h2>Destination arrange par: $category</h2>";
        ?>
        <div class="destinations">
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>
                    <div class="carte bck-primaire-300">
                        <h5><?= get_the_title() ?></h5>
                        <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                        <?= the_category();  ?>
                        <button class="bouton-carte bck-primaire-200"><a href="<?php the_permalink(); ?>">Voir l'article -></a></button>
                    </div>
                    <?php endwhile; ?> 
                <?php endif; ?>     
        </div>
    </section>
</div>
<div id="galerie" class="global bck-primaire-200">
    <section>
        <h2>Galerie</h2>
        <p>Malesuada fames ac turpis egestas integer eget aliquet nibh. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio. Scelerisque varius morbi enim nunc faucibus a pellentesque. Orci a scelerisque purus semper eget duis. Pharetra et ultrices neque ornare. Consectetur adipiscing elit pellentesque habitant. Non odio euismod lacinia at quis. A cras semper auctor neque vitae tempus quam.</p>
        <button>Voir la galérie</button>
    </section>
    <?php get_template_part('gabarits/vague.php'); ?>
</div>
<?php get_footer(); ?>