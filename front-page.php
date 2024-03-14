<?php get_header() ?>

<div id="entete" class="global">
    <header class="entete__header">
        <h1><?= get_bloginfo("name") ?></h1>
        <h2><?= get_bloginfo("description") ?></h2>
        <h3>TIM-Collège de Maisonneuve</h3>
        <button>Événements</button>
    </header>
    <div class="vague">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
        </svg>
    </div>
</div>
<div id="accueil" class="global">
    <section>
        <h2>Accueil (h2)</h2>
        <div class="cours">
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>
                    <div class="carte">
                        <h5><?= get_the_title() ?></h5>
                        <p><?= wp_trim_words(get_the_content(), 10); ?></p>
                        <a href="<?php the_permalink(); ?>">Voir l'article -></a>
                    </div>
                    <?php endwhile; ?> 
                <?php endif; ?>     
        </div>
    </section>
</div>
<div id="evenement" class="global diagonal">
    <section>
        <h2>Événement</h2>
        <p>Turpis tincidunt id aliquet risus. In est ante in nibh mauris cursus mattis molestie a. Augue lacus viverra vitae congue eu consequat ac felis donec. Mi bibendum neque egestas congue quisque egestas. Ut lectus arcu bibendum at varius. Aenean pharetra magna ac placerat vestibulum lectus. A scelerisque purus semper eget. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Habitant morbi tristique senectus et netus et malesuada. Sollicitudin tempor id eu nisl nunc. Volutpat consequat mauris nunc congue nisi vitae suscipit tellus. Nec nam aliquam sem et tortor consequat.</p>
    </section>
</div>
<div id="galerie" class="global">
    <section>
        <h2>Galerie</h2>
        <p>Malesuada fames ac turpis egestas integer eget aliquet nibh. Magna etiam tempor orci eu lobortis elementum nibh tellus molestie. Sit amet consectetur adipiscing elit pellentesque habitant morbi. Tempor commodo ullamcorper a lacus vestibulum sed arcu non odio. Scelerisque varius morbi enim nunc faucibus a pellentesque. Orci a scelerisque purus semper eget duis. Pharetra et ultrices neque ornare. Consectetur adipiscing elit pellentesque habitant. Non odio euismod lacinia at quis. A cras semper auctor neque vitae tempus quam.</p>
        <button>Voir la galérie</button>
    </section>
    <?php get_template_part('gabarits/vague.php'); ?>
</div>
<?php get_footer(); ?>