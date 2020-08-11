<?php
get_header();
?>
<main>
    <div role="slider" class="container-fluid" id="section1" aria-valuenow="4" aria-valuemin="1" aria-valuemax="10">
        <div class="row">
            <div class="no-padding col-lg-12  col-md-12 col-sm-12 col-xs-12">
                <div id="carousel-example-generic" class="carousel slide">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active skyblue">
                            <div class="container">
                                <div class="personagem">
                                    <img src="assets/img/boneco2.gif" width="196" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3 data-animation="animated bounceInLeft">
                                    JÁ BAIXOU O NOSSO APLICATIVO?
                                </h3>
                                <h3 data-animation="animated bounceInRight">
                                    EU <img src="assets/img/me-ligo.png" alt="" /> NO RU
                                </h3>
                                <h3 data-animation="animated bounceInRight">
                                    <a href="https://play.google.com/store/apps/details?id=br.ufrn.ru">
                                        <img id="googleplay" src="assets/img/googleplay.png" alt="" class="googleplay" />
                                    </a>
                                </h3>
                            </div>
                        </div>

                        <!-- First slide -->
                        <div class="item deepskyblue">

                            <div class="container">
                                <div class="personagem">
                                    <img src="assets/img/mestre-cuca.gif" alt="">
                                </div>
                            </div>

                            <div class="carousel-caption">
                                <h3 data-animation="animated bounceInLeft">
                                    ESTAMOS AGUARDANDO VOCÊ NO SEU RESTAURANTE
                                </h3>
                                <h3 data-animation="animated bounceInRight" class="color-aux">
                                    EU <img src="assets/img/faco.png" alt="" /> O RU
                                </h3>
                            </div>
                        </div> <!-- /.item -->

                        <!-- Second slide -->
                        <!-- /.item -->

                        <!-- Third slide -->
                        <div class="item darkerskyblue">
                            <div class="container">
                                <div class="personagem3">
                                    <img src="assets/img/boneco3.gif" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3 data-animation="animated bounceInLeft">
                                    JÁ VIU QUAL É O CARDÁPIO DE HOJE?
                                </h3>
                                <h3 data-animation="animated bounceInRight">
                                    EU <img src="assets/img/amo.png" alt="" /> O RU
                                </h3>
                            </div>
                        </div><!-- /.item -->

                        <!-- four slide -->
                        <div class="item slide-four">
                            <div class="container">
                                <div class="personagem3">
                                    <img src="assets/img/boneco4.gif" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3 data-animation="animated bounceInLeft">
                                    VERIFIQUE O SALDO DO SEU CARTÃO EM NOSSOS
                                    <br>
                                    TERMINAIS E EM BREVE EM NOSSO APP
                                </h3>
                                <h3 data-animation="animated bounceInRight" class="color-aux">
                                    EU <img src="assets/img/como.png" alt="" /> NO RU
                                </h3>
                            </div>
                        </div><!-- /.item -->

                        <!-- five slide -->
                        <div class="item slide-five">
                            <div class="container">
                                <div class="personagem">
                                    <img src="assets/img/boneco5.gif" alt="">
                                </div>
                            </div>
                            <div class="carousel-caption">
                                <h3 data-animation="animated bounceInLeft">
                                    NO CAFÉ DA MANHÃ, NO ALMOÇO E NO JANTAR,
                                    <br>
                                    ESTAMOS ESPERANDO VOCÊ
                                </h3>
                                <h3 data-animation="animated bounceInRight">
                                    EU <img src="assets/img/sou.png" alt="" /> O RU
                                </h3>
                            </div>
                        </div><!-- /.item -->

                    </div><!-- /.carousel-inner -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div><!-- /.carousel -->
            </div>
        </div>
    </div>
    <section class="container-fluid confira" id="cardapio">
        <div class="container">
            <div class="row espacamento">
                <div class="col-md-8">
                    <h1>
                        Confira o<br /> cardápio de hoje
                    </h1>
                </div>
                <div class="col-md-4">
                    <!-- <label for="unidade" class="legenda-select">Cardápio do dia</label>
                <select id="unidade" class="form-control">
                  <option>Campus Central / Centro de Saúde - NATAL</option>
                </select> -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="box-ingredientes proteinas">
                        <img src="assets/img/top-proteinas.jpg" class="top-ribbon" alt="">

                        <div class="ingredientes">
                            <h4>Almoço</h4>
                            <hr>
                            <ul class="wow bounceInLeft almoco">

                            </ul>
                            <h4>Jantar</h4>
                            <hr>
                            <ul class="wow bounceInLeft jantar">

                            </ul>
                        </div>

                        <a class="btn-sugira" data-toggle="modal" data-target="#myModalNorm">
                            <img src="assets/img/bottom-proteinas.jpg" class="bottom-ribbon" alt="Link para sugerir uma nova proteina">
                        </a>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="box-ingredientes acompanhamentos">
                        <img src="assets/img/top-acompanhamento.jpg" class="top-ribbon" alt="">

                        <div class="ingredientes">
                            <h4>Almoço</h4>
                            <hr>
                            <ul class="wow bounceInUp almoco">

                            </ul>
                            <h4>Jantar</h4>
                            <hr>
                            <ul class="wow bounceInUp jantar">

                            </ul>

                        </div>

                        <a class="btn-sugira" data-toggle="modal" data-target="#myModalNorm">
                            <img src="assets/img/bottom-acompanhamento.jpg" class="bottom-ribbon" alt="Link para sugerir acompanhamento">
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box-ingredientes vegetariano">
                        <img src="assets/img/top-vegetariano.jpg" class="top-ribbon" alt="">

                        <div class="ingredientes">
                            <h4>Almoço</h4>
                            <hr>
                            <ul class="wow bounceInRight almoco">

                            </ul>
                            <h4>Jantar</h4>
                            <hr>

                            <ul class="wow bounceInRight jantar">

                            </ul>
                        </div>

                        <a class="btn-sugira" data-toggle="modal" data-target="#myModalNorm">
                            <img src="assets/img/bottom-vegetariano.jpg" class="bottom-ribbon" alt="Link para sugerir um alimento vegetariano">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--/container-->
    </section>
    <section id="destaques">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="confira-h1">
                        Destaques
                    </h1>
                </div>
            </div>
        </div>

        <?php
                    $args = array(
                      'post_type' => 'post',
                      'posts_per_page'  => 3,
                      'order' => 'ASC',
                    );
                    $the_query = new WP_Query($args);
                    ?>
                     <?php if ($the_query->have_posts()) : ?>
                      <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                      <section class="container-fluid noticias">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="wow bounceInLeft">
                                        <a href="#" data-toggle="modal" data-target="#nutricionista-do-ru-da-dicas-de-higiene-de-alimentos-e-alimentacao-saudavel-durante-a-pandemia-da-covid-19">
                                            <?php the_title() ?>
                                        </a>
                                    </h1>
                                    <p>
                                        <p>
                                        <?php the_excerpt() ?>
                                        </p>
                                </div>
                                <div class="col-md-6 remove-padding mask">
                                    <img src="http://www.ru.ufrn.br/imagens_destaques" class="pull-right img-responsive" alt="" width="622" height="350">
                                </div>
                            </div>
                        </div>
                    </section>
                      
                      <?php wp_reset_postdata(); ?>
                      <?php endwhile; ?>
                    <?php else :  ?>
                      <p><?php _e('Houve um erro! Desculpe!'); ?></p>
                    <?php endif; ?>



    </section>
    <section class="container-fluid historia" id="funcionamento">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        <a href="#" data-toggle="modal" data-target="#modal-funcionamento">
                            Saiba tudo sobre o <br />
                            funcionamento do RU!
                        </a>
                    </h1>
                    <a href="#" data-toggle="modal" data-target="#modal-funcionamento">
                        <p class="wow bounceInLeft">
                            Olá, se você está navegando no site do RU é por quê tem interesse em conhecer melhor os nossos serviços. Clique aqui para saber mais.
                        </p>
                    </a>
                </div>
                <div class="col-md-6 remove-padding">
                    <img src="assets/img/bg-func.jpg" class="pull-right img-sobre" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid dica-nutricionista" id="equipe">

        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="wow bounceInLeft">
                        <a href="#" data-toggle="modal" data-target="#modal-nutri">
                            A sua comida é escolhida<br />
                            e elaborada por quem<br />
                            entende.
                            Saiba mais!
                        </a>
                    </h1>
                </div>
                <div class="col-md-4">
                    <img src="assets/img/nutricionista.png" class="pull-right nutricionista" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid historia" id="sobre">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        <a href="#" data-toggle="modal" data-target="#modal-historia">
                            Já conhece<br />
                            a história<br />
                            do RU da UFRN?
                        </a>
                    </h1>
                </div>
                <div class="col-md-6 remove-padding">
                    <img src="assets/img/bg-sobre.jpg" class="pull-right img-sobre" alt="">
                </div>
            </div>
        </div>

    </section>
    <section class="container-fluid digai" id="digai">
        <div class="container">

            <img src="assets/img/bg-contato.png" class="bg-contato" alt="">

            <img src="assets/img/personagens.png" class="personagens" alt="">


            <div class="row">
                <div class="col-md-6">
                    <h1 class="wow bounceInLeft">
                        Diga aí!
                    </h1>
                    <p class="wow bounceInLeft">
                        A sua opinião é fundamental<br />
                        para que possamos melhorar<br />
                        cada vez mais o RU!
                    </p>
                </div>
                <div class="col-md-6">
                    <form role="form" class="form-digai" action="http://www.ru.ufrn.br/contato" method="POST">
                        <input type="hidden" name="_token" value="we1DIqlx0FPtHfYZo4SVKRzQYmqa1Hpq9jAz7qDt" />
                        <div class="form-group">
                            <input type="text" name="nome" placeholder="nome" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <select name="assunto" class="form-control">
                                <optgroup label="Assunto">
                                    <option>Sugestão de refeição</option>
                                    <option>Coordenação</option>
                                    <option>Nutricionista</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" placeholder="e-mail" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <textarea placeholder="mensagem" name="mensagem" rows="4" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="telefone" data-inputmask="'mask': ['(99) 9999-9999', '(99) 99999-9999']" placeholder="telefone" id="telefone" class="form-control">
                        </div>



                        <button class="btn btn-primary botao-enviar">

                        </button>

                        <div class="clearfix"></div>

                    </form>
                </div>

            </div>
        </div>

    </section>
    <footer class="container-fluid">
        <div class="container text-center">

            <ul>
                <li>
                    <a href="http://www.sistemas.ufrn.br/portal/PT/" target="_blank">
                        <img src="assets/img/ufrn.png" alt="UFRN">
                    </a>

                </li>
                <li>
                    <a href="http://www.sedis.ufrn.br/" target="_blank">
                        <img src="assets/img/sedis.png" alt="SEDIS">
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/ufrnru" target="_blank">
                        <img src="assets/img/facebook.png" alt="FACEBOOK">
                    </a>
                </li>
            </ul>
        </div>
        <!--//container-->
    </footer>
    <footer id="creditos">
        <div class="container text-center wow bounceInLeft animated">
            <p>
                <a href="#" data-toggle="modal" data-target="#modal-creditos">
                    Confira quem participou na criação deste projeto!
                </a>
            </p>
        </div>
    </footer> <!-- Modais -->

    <!-- Modal sugestao de alimento -->
    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Fechar</span>
                    </button>
                    <h2>Insira sua sugestão</h2>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <form role="form" id="form1" style="background:none;margin-top:-5px;" action="http://www.ru.ufrn.br/contato" method="POST">
                        <input type="hidden" name="_token" value="we1DIqlx0FPtHfYZo4SVKRzQYmqa1Hpq9jAz7qDt" />
                        <input type="hidden" name="assunto" value="Sugestão de refeição" />
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="nome1">Nome</label>
                            <input type="text" class="form-control" id="nome1" placeholder="nome" name="nome" required>
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="email1">Email</label>
                            <input type="email" class="form-control" id="email1" placeholder="Email" name="email" required>
                            <i class="fa fa-envelope form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback">
                            <label class="sr-only" for="message1">Mensagem</label>
                            <textarea class="form-control" rows="9" id="message1" placeholder="Mensagem" name="mensagem" required></textarea>
                            <i class="fa fa-pencil form-control-feedback"></i>
                        </div>
                        <div class="form-group has-feedback" style="float:left">
                            <label class="sr-only" for="telefone1">Telefone</label>
                            <input type="text" class="form-control" id="telefone1" data-inputmask="'mask': ['(99) 9999-9999', '(99) 99999-9999']" placeholder="Telefone" name="telefone">
                            <i class="fa fa-user form-control-feedback"></i>
                        </div>
                        <input type="submit" value="" class="btn btn-primary botao-enviar">
                    </form>

                    <div class="clearfix"></div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <!-- ./Modal notícias -->
    <div class="modal fade modal-historia" id="nutricionista-do-ru-da-dicas-de-higiene-de-alimentos-e-alimentacao-saudavel-durante-a-pandemia-da-covid-19" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>NUTRICIONISTA DO RU D&Aacute; DICAS DE HIGIENE DE ALIMENTOS E ALIMENTA&Ccedil;&Atilde;O SAUD&Aacute;VEL DURANTE A PANDEMIA DA COVID-19</h3>

                    <h4></h4>

                    <hr>
                    <p>
                        <p>A suspens&atilde;o das aulas da Universidade Federal do Rio Grande do Norte, por conta da pandemia da COVID-19, j&aacute; ultrapassou o per&iacute;odo de 30 dias. E, de acordo com especialistas, &eacute; normal que durante o distanciamento social, orientado pelos &oacute;rg&atilde;os de sa&uacute;de, a ansiedade se manifeste com mais frequ&ecirc;ncia e muitas pessoas procurem nos alimentos uma compensa&ccedil;&atilde;o para os momentos de ociosidade.</p>
                    </p>
                    <p>
                        <p>Para entender melhor nossa rela&ccedil;&atilde;o com a alimenta&ccedil;&atilde;o diante de situa&ccedil;&otilde;es de estresse emocional e buscar orienta&ccedil;&otilde;es de cuidados preventivos para manusear os g&ecirc;neros aliment&iacute;cios, n&oacute;s conversamos com a nutricionista do Restaurante Universit&aacute;rio da UFRN, Rosa S&aacute;, que tamb&eacute;m &eacute; Mestre em Sa&uacute;de Coletiva. Ela reuniu algumas dicas &uacute;teis para o momento que estamos vivendo.</p>
                    </p>
                    <p>
                        <p><strong>Higiene dos alimentos e utens&iacute;lios</strong></p>
                    </p>
                    <p>
                        <p>Para Rosa S&aacute;, mesmo durante o isolamento social, &eacute; preciso manter uma alimenta&ccedil;&atilde;o saud&aacute;vel, evitando a ingest&atilde;o em excesso de alimentos, principalmente, aqueles considerados n&atilde;o saud&aacute;veis, como os ricos em s&oacute;dio e gordura saturada. Ainda de acordo com a nutricionista, alguns cuidados devem ser adotados, antes, durante e ap&oacute;s o preparo dos alimentos.</p>
                    </p>
                    <p>
                        <p>Ela ressalta que temos de manter as m&atilde;os higienizadas, lavando-as com &aacute;gua e sab&atilde;o para evitar qualquer tipo de contamina&ccedil;&atilde;o. A nutricionista faz mais um alerta: &ldquo;n&atilde;o devemos compartilhar copos, pratos e utens&iacute;lios sem que esses sejam higienizados&rdquo;. Ela destaca tamb&eacute;m algumas dicas para a hora da compra dos alimentos. No caso dos alimentos comprados a granel (castanhas, amendoins ou granola, por exemplo) que podem ser consumidos crus, eles devem passar por algum tipo de coc&ccedil;&atilde;o, antes da ingest&atilde;o.</p>
                    </p>
                    <p>
                        <p><strong>Cuidados dentro e fora de casa</strong></p>
                    </p>
                    <p>
                        <p>Mesmo com algumas restri&ccedil;&otilde;es de hor&aacute;rio de funcionamento de mercados e de supermercados e de circula&ccedil;&atilde;o de pessoas nesses estabelecimentos, os consumidores precisam redobrar a aten&ccedil;&atilde;o. A nutricionista do RU esclarece que n&atilde;o se deve experimentar frutas ou verduras em feiras livres e supermercados devido &agrave; grande exposi&ccedil;&atilde;o ao p&uacute;blico.</p>
                    </p>
                    <p>
                        <p>E ela prossegue com as orienta&ccedil;&otilde;es: &ldquo;antes de ir ao supermercado, &eacute; interessante fazer uma lista de compras, prevendo sempre o que ir&aacute; consumir para reduzir a ida desnecess&aacute;ria a esses locais; ao sair de casa, devemos procurar nos proteger com o uso de m&aacute;scara e, ao retornar das compras, fazermos a higieniza&ccedil;&atilde;o completa das embalagens com &aacute;gua e sab&atilde;o ou &aacute;lcool gel 70% antes de guard&aacute;-las&rdquo;, complementa nossa entrevistada.</p>
                    </p>
                    <p>
                        <p>Rosa S&aacute; chama a aten&ccedil;&atilde;o para evitar o consumo de comida japonesa com pescado cru, pois n&atilde;o sabemos ao certo os cuidados que foram empregados no preparo desse produto. Ela encerra a conversa ressaltando a necessidade de que as pessoas fa&ccedil;am um planejamento alimentar, com card&aacute;pio e hor&aacute;rios predefinidos.</p>
                    </p>
                    <p>
                        <p><strong>Fonte:</strong> Bruno C&aacute;ssio - Setor de M&iacute;dias da SEDIS/UFRN.</p>
                    </p>

                </div>
            </div>
        </div>
    </div><!-- ./Modal notícias -->
    <div class="modal fade modal-historia" id="ru-central-reabre-ao-publico-nesta-segunda-feira-17" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>RU CENTRAL REABRE AO P&Uacute;BLICO NESTA SEGUNDA-FEIRA (17)</h3>

                    <h4></h4>

                    <hr>
                    <p>
                        <p>O Restaurante Universit&aacute;rio (RU) do campus central da Universidade Federal do Rio Grande do Norte (UFRN) retoma o atendimento ao p&uacute;blico nesta segunda-feira, 17, ap&oacute;s passar por reforma para adequa&ccedil;&atilde;o &agrave;s condi&ccedil;&otilde;es de acessibilidade &agrave;s pessoas com necessidades especiais de locomo&ccedil;&atilde;o.</p>
                    </p>
                    <p>
                        <p>A diretora do RU, Michelle Medeiros, detalha que a obra incluiu a&nbsp;instala&ccedil;&atilde;o de barras de apoio na entrada e nos banheiros, de rampas de acesso para cadeirantes e de piso t&aacute;til para auxiliar pessoas com defici&ecirc;ncia visual.&nbsp;O sistema hidr&aacute;ulico e as instala&ccedil;&otilde;es da copa&nbsp;tamb&eacute;m foram readequados, a fim de melhorar&nbsp;as condi&ccedil;&otilde;es de trabalho e&nbsp;os servi&ccedil;os prestados &agrave; comunidade universit&aacute;ria.</p>
                    </p>
                    <p>
                        <p>As refei&ccedil;&otilde;es oferecidas pelo Restaurante Universit&aacute;rio t&ecirc;m todo o processo de produ&ccedil;&atilde;o acompanhado por uma equipe de nutricionistas, que elaboram card&aacute;pios semanais para caf&eacute;, almo&ccedil;o e jantar, com o objetivo de agradar os paladares e priorizar o uso de alimentos saud&aacute;veis. H&aacute; inclusive op&ccedil;&otilde;es vegetarianas diariamente e refei&ccedil;&otilde;es voltadas ao p&uacute;blico vegano &agrave;s sextas-feiras.</p>
                    </p>
                    <p>
                        <p>O servi&ccedil;o &eacute; destinado a todos os alunos, professores e servidores t&eacute;cnico-administrativos da UFRN, no almo&ccedil;o e jantar. As refei&ccedil;&otilde;es custam R$ 8,00&nbsp;para usu&aacute;rios sem subs&iacute;dio (servidores e alunos n&atilde;o priorit&aacute;rios) e R$ 4,00 para alunos subsidiados pela Assist&ecirc;ncia Estudantil.&nbsp;Do total de estudantes atendidos no RU, aproximadamente 90% recebem alimenta&ccedil;&atilde;o gratuita.</p>
                    </p>
                    <p>
                        <p><strong>Acesso ao RU</strong></p>
                    </p>
                    <p>
                        <p>No m&ecirc;s passado, o RU implantou um novo sistema de acesso aos seus refeit&oacute;rios. Desde ent&atilde;o, o usu&aacute;rio que possui qualquer cart&atilde;o RFID &ndash; identifica&ccedil;&atilde;o por radiofrequ&ecirc;ncia, que funciona por aproxima&ccedil;&atilde;o &ndash; pode utiliz&aacute;-lo para a entrada nos refeit&oacute;rios. No caso dos estudantes calouros, a diretora do RU esclarece que eles devem procurar a Central de Atendimento ao Discente (Cadis), no Rel&oacute;gio do Sol, no campus central, para solicitar o Cart&atilde;o do RU, sem custos, e, em seguida, fazer a migra&ccedil;&atilde;o para o novo sistema.</p>
                    </p>
                    <p>
                        <p><strong>Unidades do RU</strong></p>
                    </p>
                    <p>
                        <p>O novo refeit&oacute;rio do RU, localizado entre os setores de aulas&nbsp;3 e 4, passa a funcionar apenas para almo&ccedil;o, das&nbsp;11h &agrave;s&nbsp;13h,&nbsp;e com o limite de mil refei&ccedil;&otilde;es, em virtude da capacidade de atendimento do local. O RU Central e o Refeit&oacute;rio da Biom&eacute;dica, no Centro de Ci&ecirc;ncias da Sa&uacute;de (CCS), voltam a atender o p&uacute;blico para almo&ccedil;o e jantar, normalmente. A limita&ccedil;&atilde;o de usu&aacute;rio, no caso do novo refeit&oacute;rio, &eacute; para evitar a forma&ccedil;&atilde;o de filas e darmais comodidade aos usu&aacute;rios, enfatiza&nbsp;Michelle Medeiros.</p>
                    </p>
                    <p>
                        <p><strong>Fonte:</strong> Ascom Reitoria/Setor de M&iacute;dias da SEDIS/UFRN.</p>
                    </p>

                    <div id="carousel-ru-central-reabre-ao-publico-nesta-segunda-feira-17" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item  active ">
                                <img class="img-responsive" src="http://www.ru.ufrn.br/imagens_destaques/3497ee2c4926c4d153402d1b880fc36d.jpeg" alt="Barras de apoio de apoio, rampa de acessibilidade e piso t&aacute;til foram instalados.">
                                <div class="carousel-caption">
                                    Barras de apoio de apoio, rampa de acessibilidade e piso t&aacute;til foram instalados.
                                </div>
                            </div>
                            <div class="item ">
                                <img class="img-responsive" src="http://www.ru.ufrn.br/imagens_destaques/d152b0d804e55838ebe6b849b375be93.jpeg" alt="Balc&atilde;o para entrega de pratos foi adaptado.">
                                <div class="carousel-caption">
                                    Balc&atilde;o para entrega de pratos foi adaptado.
                                </div>
                            </div>
                            <div class="item ">
                                <img class="img-responsive" src="http://www.ru.ufrn.br/imagens_destaques/8fb6d5d43911a8eaba678d3942b750d5.jpeg" alt="Banheiro feminino recebeu barras de apoio.">
                                <div class="carousel-caption">
                                    Banheiro feminino recebeu barras de apoio.
                                </div>
                            </div>
                            <div class="item ">
                                <img class="img-responsive" src="http://www.ru.ufrn.br/imagens_destaques/1c2dbe2d7abb9865a8ea8d8bb0c617e9.jpeg" alt="Balc&atilde;o para higieniza&ccedil;&atilde;o das m&atilde;os foi adaptado.">
                                <div class="carousel-caption">
                                    Balc&atilde;o para higieniza&ccedil;&atilde;o das m&atilde;os foi adaptado.
                                </div>
                            </div>
                            <div class="item ">
                                <img class="img-responsive" src="http://www.ru.ufrn.br/imagens_destaques/919db54edc6ae18bec08563b9abb0bea.jpeg" alt="Diretora do RU, Michelle Medeiros, fala sobre as obras de reforma.">
                                <div class="carousel-caption">
                                    Diretora do RU, Michelle Medeiros, fala sobre as obras de reforma.
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-ru-central-reabre-ao-publico-nesta-segunda-feira-17" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-ru-central-reabre-ao-publico-nesta-segunda-feira-17" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./Modal notícias -->
    <!-- Modal sugestao de alimento -->
    <div class="modal fade modal-historia" id="modal-historia" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>RU: DESDE O INÍCIO, UMA CONQUISTA DE TODOS</h3>

                    <h4>O Restaurante Universitário da UFRN tem uma longa história, sempre unida aos avanços da
                        universidade. </h4>

                    <hr>
                    <p>
                        Brasília era a nova capital do país. A seleção canarinho havia conquistado o bicampeonato
                        mundial de futebol. A TV a cores invadia a casa dos brasileiros. E a juventude cada vez mais se
                        organizava, lutando pelos seus direitos e por mudanças no comportamento da sociedade. Em meio a
                        esse contexto é que nasce o nosso conhecido RU.
                    </p>
                    <p>
                        O Restaurante Universitário foi criado a partir da conquista dos estudantes universitários e do
                        DCE da época. Em 1963, na gestão do presidente Francisco Ginani, então estudante da Faculdade de
                        Medicina da UFRN, foi reivindicado um restaurante que atendesse às necessidades da classe
                        estudantil. Esse fato aconteceu durante o reitorado do Dr. Onofre Lopes, num período em que os
                        alunos secundaristas faziam as suas refeições na Casa do Estudante e precisavam de melhores
                        condições de alimentação.
                    </p>

                    <p>
                        Reconhecendo essa necessidade, o então prefeito de Natal Djalma Maranhão cedeu um terreno no
                        bairro de Petrópolis para a implantação do RU, com a condição de que fosse construído dentro de
                        um determinado prazo. Devido à escassez de recursos e à resistência do reitor da época em
                        aceitar edificar uma instalação provisória o prazo expirou, o que fez com que o terreno voltasse
                        a pertencer à prefeitura. Hoje, neste local, está o Palácio dos Esportes da capital do estado.
                    </p>

                    <p>
                        A luta continuou por parte dos estudantes, culminando na Resolução nº 58/63-U. Com ela, o
                        Conselho Universitário da UFRN aprovou, em reunião no dia 16 de dezembro de 1963, a liberação da
                        quantia de Cr$ 150.000 mensais para o aluguel de um local destinado a funcionar como Restaurante
                        Universitário. O RU foi inaugurado em março de 1964, na Av. Deodoro, próximo ao Instituto
                        Infantil Varela Santiago, com capacidade para oferecer café, almoço e jantar a cerca de 200
                        universitários.
                    </p>

                    <p>
                        Nessa época não existia o campus central da UFRN. Os cursos funcionavam em prédios distintos,
                        mas todos próximos à região do Centro da cidade, Petrópolis e Tirol. Durante a década de 1970
                        foi iniciada a construção do Campus Central no bairro de Lagoa Nova e, com isso, o CONSUNI,
                        através da Resolução 70/72 – em 13 de novembro de 1972 – homologou o contrato entre a UFRN e uma
                        empresa de construção civil, no valor de Cr$ 624.877,50, para construir o Restaurante
                        Universitário no Campus Central. Em março de 1973, o Reitor Genário Alves da Fonseca proclamou a
                        conclusão da obra perante assembleia universitária, em seu relatório, e o RU permanece no mesmo
                        local até hoje.
                    </p>

                    <p>
                        Com a saída do Restaurante Universitário do Centro da cidade, os estudantes da área médica que
                        assistiam aulas na Escola de Saúde e necessitavam do apoio das estruturas do refeitório seguiam
                        para o RU do campus central no ônibus da própria Universidade. Esse transporte ficou conhecido
                        como “Upa neguinho”, apelido que veio da música homônima composta por Gianfrancesco Guarnieri e
                        Edu Lobo para a peça “Arena conta Zumbi” e gravada por Elis Regina em 1966 (Upa neguinho na
                        estrada / Upa pra lá e pra cá).
                    </p>

                    <p>
                        Com a crescente demanda dos estudantes de saúde, houve a necessidade da instalação de um
                        refeitório que atendesse à região. Por isso, foi criado um refeitório no Hospital Universitário
                        Onofre Lopes que alimenta cerca de 300 pessoas.
                    </p>

                    <p>
                        Hoje existem planos de construção de um novo restaurante, além da expansão de novas unidades em
                        todos os polos da UFRN. O RU procura sempre acompanhar a crescente demanda de alunos e oferecer
                        o máximo em suporte e atenção a cada estudante.
                    </p>


                    <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive" src="assets/img/slide1-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    O Reitor Dr. Genário Alves da Fonseca visita o campo de obras da UFRN. Ao fundo, o
                                    atual Setor I.<br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="assets/img/slide2-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    Um dos primeiros prédios da Residência Universitária da UFRN.<br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="assets/img/slide3-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    Antes da construção do campus central, os setores de aula se espalhavam por prédios
                                    diferentes no Centro da cidade. Na foto, o prédio do CRUTAC (Centro Rural
                                    Universitário de Ação Comunitária), onde hoje funciona a Câmara Municipal de
                                    Natal.<br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="assets/img/slide4-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    Restaurante do Centro de Ciências da Saúde, inaugurado em 27 de maio de 1991.
                                    <br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="assets/img/slide5-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    Restaurante do Centro de Ciências da Saúde, inaugurado em 27 de maio de 1991.
                                    <br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive" src="assets/img/slide6-inner.jpg" alt="...">
                                <div class="carousel-caption">
                                    Restaurante do Centro de Ciências da Saúde, inaugurado em 27 de maio de 1991.
                                    <br />
                                    Fonte: Acervo fotográfico da AGECOM/UFRN
                                </div>
                            </div>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic1" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic1" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <h4>
                        FONTES:
                    </h4>

                    <p>
                        ACERVO FOTOGRÁFICO DA AGECOM/UFRN.
                    </p>

                    <p>
                        CAMPOS, Paulo Roberto Paiva. <strong>Entrevista sobre a história do RU</strong>. Entrevista
                        concedida a Mauricio da Silva Oliveira Junior.
                    </p>
                    <p>
                        MELO, Veríssimo de; CALADO, Carmen Lúcia de Araújo. <strong>Síntese Cronológica da UFRN</strong>:
                        1958/2010. Natal: EDUFRN, 2011. 594 p.
                    </p>
                    <p>
                        SILVA, Justina Iva de Araújo. <strong>Estudantes e Política</strong>: Estudo de um movimento (RN
                        1960-1969). São Paulo: Cortez, 1989.
                    </p>
                </div>
            </div>
        </div>
    </div><!-- ./Modal sugestao de alimento -->

    <!-- Modal -->



    <!-- Modal galeria de vídeo -->
    <div class="modal fade" id="modal-nutri" tabindex="-1" role="dialog" aria-labelledby="myModalNorm" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3>Vídeos</h3>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                            <a class="thumbnail" data-toggle="modal" href="#video2">
                                <img class="img-responsive" src="assets/video/videocap17.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                            <a class="thumbnail" data-toggle="modal" href="#video4">
                                <img class="img-responsive" src="assets/video/videocap19.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                            <a class="thumbnail" data-toggle="modal" href="#video5">
                                <img class="img-responsive" src="assets/video/videocap20.png" alt="">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-6 thumb">
                            <a class="thumbnail" data-toggle="modal" href="#video6">
                                <img class="img-responsive" src="assets/video/videocap21.png" alt="">
                            </a>
                        </div>

                    </div>


                </div>


            </div>
        </div>
    </div><!-- ./ -->

    <!-- Modal -->




    <div id="video2" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao17.mp4" type='video/mp4'>
                        <source src="assets/video/animacao17.webm" type='video/webm'>
                        <source src="assets/video/animacao17.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->








    <div id="video4" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao19.mp4" type='video/mp4'>
                        <source src="assets/video/animacao19.webm" type='video/webm'>
                        <source src="assets/video/animacao19.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <div id="video5" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao20.mp4" type='video/mp4'>
                        <source src="assets/video/animacao20.webm" type='video/webm'>
                        <source src="assets/video/animacao20.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <div id="video6" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">

                    <video controls class="img img-responsive">
                        <source src="assets/video/animacao21.mp4" type='video/mp4'>
                        <source src="assets/video/animacao21.webm" type='video/webm'>
                        <source src="assets/video/animacao21.ogv" type='video/ogg'>
                        Seu navegador está desatualizado. Atualize-o para uma melhor experiência.
                    </video>

                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div><!-- ./ -->

    <!-- Modal -->
    <div class="modal fade modal-historia" id="modal-creditos" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>Créditos</h3>

                    <hr>

                    <dl>
                        <dt>Universidade Federal do Rio Grande do Norte</dt>
                        <dd>Reitora: Angela Maria Paiva Cruz</dd>
                        <dd>Vice-reitor: José Daniel Diniz Melo</dd>

                        <dt>Pró-Reitoria de Assuntos Estudantis - PROAE</dt>
                        <dd>Pró-Reitor: Edmilson Lopes Júnior</dd>
                        <dd>Pró-Reitor Adjunto: Paulo Roberto Paiva Campos</dd>

                        <dt>Secretaria de Educação a Distância - SEDIS</dt>
                        <dd>Secretária de Educação a Distância: Maria Carmem Freire Diógenes Rêgo</dd>
                        <dd>Secretária Adjunta de Educação a Distância: Ione Rodrigues Diniz Morais</dd>

                        <dt>Superintendência de Informática - SINFO</dt>
                        <dd>Superintendente: Apuena Vieira Gomes</dd>
                        <dd>Superintendente substituto: Marcos Cesar Madruga Alves Pinheiro</dd>

                        <dt>Restaurante Universitário - RU</dt>
                        <dd>Diretora: Kátia Maria Bezerra da Silva</dd>

                        <dt>Coordenação geral da campanha</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>

                        <dt>Concepção gráfica e visual</dt>
                        <dd>Amanda Duarte (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>

                        <dt>Ilustrações</dt>
                        <dd>Amanda Duarte (SEDIS)</dd>
                        <dd>Carolina Costa (SEDIS)</dd>
                        <dd>Lyézio Lima (SEDIS)</dd>

                        <dt>Roteiros</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>
                        <dd>Mauricio Oliveira Junior (SEDIS)</dd>
                        <dd>Priscilla Xavier de Macedo (SEDIS)</dd>

                        <dt>Revisão</dt>
                        <dd>Kaline Sampaio de Araújo (SEDIS)</dd>

                        <dt>Animações e Edição de vídeo</dt>
                        <dd>Alessandro de Oliveira Paula (SEDIS)</dd>
                        <dd>Lyézio Lima (SEDIS)</dd>

                        <dt>Desenvolvimento WEB e aplicativo móvel</dt>
                        <dd>Elionai Augusto Silva de Melo (SEDIS)</dd>
                        <dd>Mike Job Santos Pereira da Silva (SEDIS)</dd>

                        <dt>Mídias sociais</dt>
                        <dd>André Soares (SEDIS)</dd>
                        <dd>Natália Noronha (SEDIS)</dd>

                        <dt>Suporte Tecnológico</dt>
                        <dd>Gibeon Soares De Aquino Junior (SINFO)</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade modal-historia" id="modal-funcionamento" tabindex="-1" role="dialog" aria-labelledby="myModalHistoria">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <h3>Saiba tudo sobre o funcionamento do RU</h3>

                    <hr>

                    <p>Olá, se você está navegando no site do RU é por quê tem interesse em
                        conhecer melhor os nossos serviços. Então preparamos algumas perguntas e
                        respostas com informações importantes para o bom uso do nosso espaço.
                        Agradecemos sua atenção e parceria.</p>

                    <h4>Quem são os usuários do RU?</h4>

                    <p>São usuários do Restaurante Universitário os integrantes do corpo discente
                        (ensino básico, técnico e tecnológico, graduação e pós-graduação), regularmente
                        matriculados na UFRN, servidores técnico-administrativos e docentes na Universidade
                        Federal do Rio Grande do Norte em atividade institucional.</p>

                    <h4>Como adquirir o cartão do RU?</h4>

                    <p>Para adquirir o cartão de acesso ao RU da UFRN, os usuários devem
                        comparecer na Pró-reitoria de Assuntos Estudantis (PROAE) no Campus Central e
                        apresentar o atestado de matrícula e documento com foto, comprovando assim o
                        vínculo com a UFRN.</p>

                    <h4>Onde recarregar o cartão do RU?</h4>

                    <p>Os usuários devem efetuar a recarga do cartão do Restaurante Universitário da UFRN
                        com a geração da GRU (Guia de Recolhimento da União), no SIGAA.</p>

                    <p>Para emitir uma GRU é fácil, basta acessar o <strong>SIGAA &gt; Menu Discente &gt; Outros &gt;
                            Compra de Créditos</strong> e dar prosseguimento ao pagamento. Em até 48 horas os
                        créditos estarão disponíveis para uso.</p>

                    <p>O valor da GRU deve ser pago, exclusivamente, em agências do Banco do Brasil.</p>

                    <h4>Qual o horário de funcionamento do RU?</h4>

                    <h5><i class="glyphicon glyphicon-chevron-right"></i> Café da manhã (exclusivo para estudantes residentes)</h5>

                    <p>Segunda à sexta das 6h30 às 7h30. Aos sábados, domingos e feriados das 7h30 às 8h30</p>

                    <h5><i class="glyphicon glyphicon-chevron-right"></i> Almoço</h5>

                    <p>Segunda à sexta das 10h30 às 13h30. Aos sábados, domingos e feriados das 11h às 13h.</p>

                    <h5><i class="glyphicon glyphicon-chevron-right"></i> Jantar</h5>

                    <p>Segunda à sexta das 17h até às 19h. Aos sábados, domingos e feriados das 17h às 18h.</p>

                    <h4>Dicas importantes</h4>

                    <p>O cartão do RU é de uso exclusivo da pessoa credenciada, ou seja, não pode
                        ser utilizado por terceiros, sendo assim intransferível e inalienável.
                        Só tem acesso às refeições do RU quem está com o cartão em mãos, por isso
                        cuidado para não esquecer o cartão em outro lugar.</p>


                </div>
                <div class="modal-footer">
                    <h4>FONTE:</h4>

                    <p>Direção RU / UFRN</p>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
