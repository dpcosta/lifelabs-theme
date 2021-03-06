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
                            <h1 class="sr-only">Life Labs</h1>
                            <img class="img-responsive" src="img/logo-home.png">
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
                <p>A Life Labs é uma empresa criada com o intuito de modelar e replicar as melhores experiências de desenvolvimento humano. Acreditamos que podemos mudar o foco de nossas vidas e ressignificar crenças e conceitos, nos fortalecendo e aumentando nossos níveis de bem estar e felicidade.</p>
                <p>Fazemos ações e treinamentos de impactos extremamente positivos em sua vida, que o levará para outro nível e o fará criar a melhor versão de si mesmo.</p>
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
            <div class="col-lg-4 item-depoimento">
                <img src="img/jordana.png">
                <h4>Jordana</h4>
                <p>"...sou muito grata pela oportunidade de ter passado por profissionais tão dedicados (...), pois 
conseguiram externar a minha auto-confiança e auto-estima."</p>
            </div>
            <div class="col-lg-4 item-depoimento">
                <img src="img/wanderley.png">
                <h4>Wander Rocha</h4>
                <p>"As técnicas e dicas me fizeram acreditar mais no meu potencial, arriscasse mais e seguisse em frente. Hoje posso dizer q a fotografia é uma realidade em minha vida."</p>
            </div>
            <div class="col-lg-4 item-depoimento">
                <img src="img/jonathan.png">
                <h4>Jonathan</h4>
                <p>"Através do coaching eu soube o que eu precisava (...) pra tocar meus sonhos e desejos. (...) me fez acreditar que eu sou capaz e alertar isso dentro de mim."</p>
            </div>
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

    <!-- Seção Dia de Coach -->
    <section id="dia-de-coach" class="container content-section text-center">
        <div class="row">
            <h2>Dia de Coach</h2>
            <p>Tirinhas bem humoradas sobre o cotidiano dos coaches.</p>
            <img id="tirinha" src="img/dia-de-coach-tirinha1.jpg" class="img-responsive" />

            <p class="call-to-action">Inscreva-se para receber novas tirinhas</p>
            <form id="registration-form" action="https://lifelabs.us14.list-manage.com/subscribe/post">
                <input name="u" value="06c340b04f5216f8d941d86d3" type="hidden">
                <input name="id" value="57781f8f09" type="hidden">
                <input type="email" class="form-control input-lg" name="MERGE0" required  placeholder="Seu melhor email"/>
                <input type="submit" name="ok" value="Inscrever" class="btn btn-default btn-lg">
            </form>

        </div>   
    </section>

    <!-- Faixa com citação 3 -->
    <section class="content-section text-center">
        <div id="faixa3" class="faixa">
            <div class="container">
                <p class="citacao-texto">Um desejo não muda nada. Uma <span class="brand-first">decisão</span> muda tudo.</p>
                <p class="citacao-autor">Autor desconhecido</p>
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
                <form id="message-form" action="mailto:contato@lifelabs.com.br">
                    <div class="input-group">
                        <label class="sr-only" for="nome-contato">Nome</label>
                        <div class="input-group-addon"><span class="fa fa-user"></span></div>
                        <input id="nome-contato" class="form-control input-lg" name="name" required  placeholder="Nome"/>    
                    </div>
                    
                    <div class="input-group">
                        <label class="sr-only" for="email-contato">Email</label>
                        <div class="input-group-addon"><span class="fa fa-envelope"></span></div>
                        <input type="email" id="email-contato" class="form-control input-lg" name="mail" required  placeholder="Email"/>    
                    </div>

                    <textarea class="form-control" rows="4" required></textarea>
                    
                    <input type="submit" name="ok" value="Enviar Mensagem" class="btn btn-default btn-lg">
                    
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();
