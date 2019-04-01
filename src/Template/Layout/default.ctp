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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SCEF - Sistema de Cadastro de Entidades Filantrópicas | 
            <?= $this->fetch('title') ?></title>


        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        <?= $this->Html->css('carousel.css') ?>
        <?= $this->Html->css('font-awesome.min.css') ?>
        
        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('popper.min.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>


        <!-- Bootstrap core CSS -->
        <!-- <link href="bootstrap/css/bootstrap.css" rel="stylesheet"> -->
        <!-- Custom styles for this template -->
        <!-- <link href="carousel.css" rel="stylesheet"> -->
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">SCEF</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $this->request->params['pass'][0] === 'index' ? 'active' : '' ?>">
                        <a class="nav-link" href="inicio">Início<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item <?= $this->request->params['pass'][0] === 'sobre' ? 'active' : '' ?>">
                        <a class="nav-link" href="sobre">Sobre</a>
                    </li>
                    <li class="nav-item <?= $this->request->params['pass'][0] === 'lista' ? 'active' : '' ?>">
                        <a class="nav-link" href="lista">Lista</a>
                    </li>
                    <li class="nav-item <?= $this->request->params['pass'][0] === 'contato' ? 'active' : '' ?>">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Instituição" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </div>
        </nav>
        <?= $this->Flash->render() ?>
        
        <?= $this->fetch('content') ?>
        
        <div class="row bg-dark">
            <div class="container">
                <footer class="pt-4 my-md-5 pt-md-5">
                    <div class="row">
                        <div class="col-12 col-md">
                            <img class="mb-2" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                            <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Features</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Cool stuff</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Random feature</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Team feature</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Stuff for developers</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Another one</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Last time</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>Resources</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Resource</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Resource name</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Another resource</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Final resource</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md">
                            <h5>About</h5>
                            <ul class="list-unstyled text-small">
                                <li>
                                    <a class="text-muted" href="#">Team</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Locations</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Privacy</a>
                                </li>
                                <li>
                                    <a class="text-muted" href="#">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>
