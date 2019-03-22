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
            <img src="img/cadastro.png" alt="Cadastro" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block">O SCEF é um sistema para cadastro de entidades filantrópicas com o intuito de unir estas entidades a pessoas de bom coração para a realização de filantropias.</span>
        </div>
        <div class="col-4 text-center">
            <img src="img/calendario.png" alt="Eventos e atividades mensais" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block">Aqui você ira encontrar das necessidades mensais até eventos que estas entidades realizam, podendo assim contribuir diretamente junto a entidade com dinheiro, itens ou até mesmo sua participação.</span>
        </div>
        <div class="col-4 text-center">
            <img src="img/felicidade.png" alt="Venha ser feliz, ajude ao próximo" style="width:200px;display: inline-block;margin:0 auto;">
            <span class="d-block">Venha você também fazer parte da SCEF, e veja como ajudar ao próximo faz bem a você e ao mundo todo.</span>
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
</div>