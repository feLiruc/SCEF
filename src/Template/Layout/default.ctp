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
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            SCEF - Sistema de Cadastro de Entidades Filantrópicas | 
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('bootstrap.min.css') ?>
        
        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
        <?= $this->Html->script('popper.min.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <header>
            <div class="row bg-primary">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                      <a class="navbar-brand" href="#">SCEF</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item <?php if ($this->request->getAttribute('params')['pass'][0]==='index'){ echo 'active'; } ?>">
                            <a class="nav-link" href="inicio">Início<span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item <?php if ($this->request->getAttribute('params')['pass'][0]==='sobre'){ echo 'active'; } ?>">
                            <a class="nav-link" href="sobre">Sobre</a>
                          </li>
                          <li class="nav-item <?php if ($this->request->getAttribute('params')['pass'][0]==='lista'){ echo 'active'; } ?>">
                            <a class="nav-link" href="lista">Lista</a>
                          </li>
                          <li class="nav-item <?php if ($this->request->getAttribute('params')['pass'][0]==='contato'){ echo 'active'; } ?>">
                            <a class="nav-link" href="contato">Contato</a>
                          </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                          <input class="form-control mr-sm-2" type="text" placeholder="Instituição">
                          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                      </div>
                    </nav>
                <?= $this->Flash->render() ?>
                    
                </div>
            </div>
        </header>

        <section>
            <?= $this->fetch('content') ?>
        </section>

        <footer>

        </footer>
    </body>
</html>
