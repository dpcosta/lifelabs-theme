<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lifelabs
 */

get_header(); ?>

	<!-- Introdução -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="brand-heading">
                            <h1 class="sr-only"><?php bloginfo('name');?></h1>
                            <img class="img-responsive" src="<?php echo( get_template_directory_uri() ); ?>/img/logo-home.png">
                        </div>
                        <p class="intro-text">Nós acreditamos no poder do <span class="brand-first">#autoconhecimento</span>.<br/>E você? Venha construir a melhor versão de si mesmo!</p>
                        <a href="#quem-somos" class="btn btn-circle btn-intro page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Seção Quem Somos -->
    <section id="quem-somos" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Sobre a Life Labs</h2>
                <p><?php echo( get_option( 'quem-somos-name' )); ?></p>
                <p class="call-to-action">Conheça o que alguns de nossos clientes têm a dizer sobre nós.</p>
                <a href="#depoimentos" class="btn btn-circle page-scroll">
                    <i class="fa fa-angle-double-down animated"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Faixa com citação 1 -->
    <section class="content-section text-center">
        <div id="faixa1" class="faixa">
            <div class="container">
                <p class="citacao-texto">Uma longa caminhada começa com o <span class="brand-first">primeiro passo</span>.</p>
                <p class="citacao-autor">Lao-Tsé</p>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section id="depoimentos" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Depoimentos</h2>
            </div>
        </div>
        <div class="row">
            <?php 
            $args = array( 
                'post_type' => 'depoimento', /* apenas depoimentos - testar cadastrando posts... (ok)  */
                'posts_per_page' => 3 /* apenas 3 depoimentos - testar cadastrando mais um... (ok) */
            );
            $loop = new WP_Query( $args );
            if( $loop->have_posts() ) { 
                while( $loop->have_posts() ) {
                    $loop->the_post();
                ?>
                    <div class="col-lg-4 item-depoimento">
                        <img src="<?php the_post_thumbnail_url(); ?>">
                        <h4><?php the_title(); ?></h4>
                        <p><?php the_content(); ?></p>                    
                    </div>
                    <!--.item-depoimento-->
                <?php 
                }
            } ?>
        </div>
    </section>

    <!-- Faixa com citação 2 -->
    <section class="content-section text-center">
        <div id="faixa2" class="faixa">
            <div class="container">
                <p class="citacao-texto">Não existe caminho para a felicidade. Felicidade é o próprio <span class="brand-first">caminho</span>.</p>
                <p class="citacao-autor">Mahatma Gandhi</p>
            </div>
        </div>
    </section>  

    <!-- Seção Contato -->
    <section id="contato" class="container content-section ">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Entre em contato conosco!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <p>Quer tirar alguma dúvida ou enviar uma sugestão para a gente? Preencha os campos do formulário a seguir para enviar a sua mensagem. Ficaremos felizes em te atender.</p>
                <p>Curta e compartilhe nossa <a href="http://fb.com/lifelabsbrasil">página no facebook</a>!</p>
            </div>
            <div class="col-lg-6">
                <form id="message-form" method="post">
                    <div class="input-group">
                        <label class="sr-only" for="nome-contato">Nome</label>
                        <div class="input-group-addon"><span class="fa fa-user"></span></div>
                        <input id="nome-contato" class="form-control input-lg" name="toname" required  placeholder="Nome"/>    
                    </div>
                    
                    <div class="input-group">
                        <label class="sr-only" for="email-contato">Email</label>
                        <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                        <input type="email" id="email-contato" class="form-control input-lg" name="toemail" required  placeholder="Email"/>    
                    </div>

                    <textarea class="form-control" rows="4" required name="mensagem" id="mensagem-contato"></textarea>
                    
                    <button class="btn btn-default btn-lg">Enviar Mensagem</button>
                    
                </form>
            </div>
        </div>
    </section>

<span id="my_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>
<?php
get_footer();
