<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="first-slide" src="img/bemvindo1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption d-md-block text-left">
                    <h3 class="text-light new-bg-opacity p-3 mb-2">Seja bem vindo</h1>
                    <p class="text-light new-bg-opacity p-3 mb-2">O SCEF surgiu da necessidade de um de seus fundadores, quando próximo a uma data festiva e diante da necessidade de fazer caridade se viu sem ideias de que instituições ajudar.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Cadastre-se agora como apoiador</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="img/entidade1.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-md-block">
                    <h3 class="text-light new-bg-opacity p-3 mb-2">Para você, entidade</h1>
                    <p class="text-light new-bg-opacity p-3 mb-2">O SCEF é um sistema para você manter sua instituição como uma instituição filantropica, e através deste, você possa cadastrar não apenas suas necessidades mensais mas também eventos aos quais você precisa de apoio da sociedade.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Cadastre-se como entidade</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="img/eventos.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-md-block text-right">
                    <h3 class="text-light new-bg-opacity p-3 mb-2">Eventos</h1>
                    <p class="text-light new-bg-opacity p-3 mb-2"><b>CEI Menino Jesus</b></br>No mês de Abril, a CEI Menino Jesus realizará uma páscoa solidária para seus 120 alunos, e com isso gostariamos de convidar a sociedade e a todos que estiverem disponíveis a nos apoiar...</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Informações sobre o evento</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
</div>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class=" marketing container">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="rounded-circle" src="img/cadastro.png" alt="Sobre o SCEF" width="140" height="140">
            <h2>SCEF</h2>
            <p>O SCEF é um sistema para cadastro de entidades filantrópicas com o intuito de unir estas entidades a pessoas de bom coração para a realização de filantropias.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Leia mais »</a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="img/calendario.png" alt="Eventos e Atividades" width="140" height="140">
            <h2>Eventos e Atividades</h2>
            <p>Aqui você ira encontrar das necessidades mensais até eventos que estas entidades realizam, podendo assim contribuir diretamente junto a entidade com dinheiro, itens ou até mesmo sua participação.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Veja a lista »</a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="rounded-circle" src="img/felicidade.png" alt="Venha proporcionar a felicidade do próximo." width="140" height="140">
            <h2>Seja bem vindo</h2>
            <p>Venha você também fazer parte da SCEF, e veja como ajudar ao próximo faz bem a você e ao mundo todo.</p>
            <p><a class="btn btn-secondary" href="#" role="button">Cadastre-se »</a></p>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Páscoa Solidária do CEI Jurema Neves. <span class="text-muted">20/04/2018.</span></h2>
            <p class="lead">O CEI Jurema Neves vai organizar no dia 20 de Abril de 2019 sua primeira páscoa solidária. Com 60 alunos, o CEI conta apenas com o apoio da sociedade e trabalha exclusivamente para apoio as famílias que moram no bairro ASDF. Com o seu apoio poderemos fazer mais por estas crianças.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/entidades/entidade1.jpg" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Páscoa Solidária do CEI Jurema Neves. <span class="text-muted">20/04/2018.</span></h2>
            <p class="lead">O CEI Jurema Neves vai organizar no dia 20 de Abril de 2019 sua primeira páscoa solidária. Com 60 alunos, o CEI conta apenas com o apoio da sociedade e trabalha exclusivamente para apoio as famílias que moram no bairro ASDF. Com o seu apoio poderemos fazer mais por estas crianças.</p>
        </div>
        <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="img/entidades/entidade2.jpg" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Páscoa Solidária do CEI Jurema Neves. <span class="text-muted">20/04/2018.</span></h2>
            <p class="lead">O CEI Jurema Neves vai organizar no dia 20 de Abril de 2019 sua primeira páscoa solidária. Com 60 alunos, o CEI conta apenas com o apoio da sociedade e trabalha exclusivamente para apoio as famílias que moram no bairro ASDF. Com o seu apoio poderemos fazer mais por estas crianças.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="img/entidades/entidade3.jpg" data-holder-rendered="true">
        </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->
    
</div>

<!-- 
<div class="container">
    <div class="jumbotron my-2">
      <h1 class="display-3">Seja bem vindo!</h1>
      <p class="lead">O SCEF surgiu da necessidade de um de seus fundadores, fazer o bem.</p>
      <hr class="my-4">
      <p>Com uma pitada de sonho e um pouco de conhecimento em computação trazemos para você um portal onde você pode verificar todas as possibilidades de participação em eventos ou entidades filantrópicas próximas a você.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="sobre" role="button">Saiba mais</a>
      </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-4 text-center">
            <img src="" alt="Cadastro" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block"></span>
        </div>
        <div class="col-4 text-center">
            <img src="" alt="Eventos e atividades mensais" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block"></span>
        </div>
        <div class="col-4 text-center">
            <img src="" alt="Venha ser feliz, ajude ao próximo" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block"></span>
        </div>
    </div>
</div>

<div class="container my-2 position-relative">
  <div class="row">
    <img class='img-fluid w-100' style="max-height:600px;height:100%;" src="img/edmund_burke.jpg" alt="" />
    <span class="centered-left text-light" style="width:60%;">
        Para o triunfo do mal só é preciso que os bons homens não façam nada.<br>
        <p class="text-warning">Edmund Burke</p>
    </span>
  </div>
</div> -->