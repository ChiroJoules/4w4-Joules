<?php get_header() ?>

<h1>FRONT PAGE</h1>
<div id="entete" class="global">
    <header class="entete__header">
        <h1>Thème Joules (h1)</h1>
        <h2>4w4-Conception d'interface <span>et développement Web</span></h2>
        <h3>TIM-Collège de Maisonneuve</h3>
        <button>Événement</button>
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
            <?php
                /*if(have_posts()){
                    while(have_posts()){
                        the_post();
                        the_title("<h3>" , "</h3>");
                        echo wp_trim_words(get_the_content(), 30);
                    }
                } */

                if(have_posts()):
                    
                    while(have_posts()): the_post();
                    $titre = get_the_title();

                    ?>
                    <div class="carte">
                        <h5><?= $titre; ?></h5>
                        <p><?= wp_trim_words(get_the_content(), 10); ?></p>
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
<div id="footer" class="global">
    <section>
        <h2>Footer</h2>
        <p>Mauris augue neque gravida in fermentum et sollicitudin ac orci. Aenean euismod elementum nisi quis eleifend quam. Sem fringilla ut morbi tincidunt augue interdum velit euismod. Nisl suscipit adipiscing bibendum est ultricies integer quis auctor elit. Urna duis convallis convallis tellus id interdum velit laoreet id. Ut ornare lectus sit amet est. Interdum varius sit amet mattis. Adipiscing bibendum est ultricies integer. Sit amet massa vitae tortor condimentum lacinia quis vel eros. Pulvinar elementum integer enim neque volutpat ac tincidunt. Penatibus et magnis dis parturient montes nascetur. Sed cras ornare arcu dui vivamus arcu felis. Elementum curabitur vitae nunc sed velit dignissim sodales ut. Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque eu. Odio ut enim blandit volutpat maecenas. Vulputate ut pharetra sit amet aliquam id diam. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Ultrices tincidunt arcu non sodales neque sodales ut.</p>
    </section>
</div>
</body>
</html>