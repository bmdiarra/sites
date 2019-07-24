<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>uiKit</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/uikit.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.css" />
        <script src="<?php echo base_url(); ?>js/uikit.min.js"></script>
        <script src="<?php echo base_url(); ?>js/uikit-icons.min.js"></script>
 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
            <style>
                    body
                    {
                        background-image: url('<?php echo base_url(); ?>images/im9.jpg');
                    }

                    img{
                        height:300px;
                    }
                    #im_footer{
                        width: 100%;
                    }

                    .uk-navbar-container
                    {
                        height: 150px;
                        background-color: blue;
                    }
                    .im_publi
                    {
                        width: 100%;
                        height: 100px;
                    }
                    li{
                        list-style: none;
                        margin-left: 10px;
                    }
                    ._footer
                    {
                        width: 100%;
                        left: 0px;
                        right: 0px;
                    }
                </style>


                <nav class="uk-navbar-container" uk-navbar>
                        <div class="uk-navbar-left">
                    
                            <a class="uk-navbar-item uk-logo" href="#">Logo Moussa</a>
                    
                            <ul class="uk-navbar-nav">
                                <li>
                                    <a href="#">
                                        <span class="uk-icon uk-margin-small-right" uk-icon="icon: star"></span>
                                        Favory
                                    </a>
                                </li>
                            </ul>

                        </div>

                        
                        
                        
                    <div class="uk-navbar-right">

                        <ul class="uk-navbar-nav">
                                <li>
                                    <a href="#">Les Categories</a>
                                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                                                <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Processeur</a></li>
                                                            <li><a href="#">Processeur1</a></li>
                                                            <li><a href="#">Processeur2</a></li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                                            <li class="uk-active"><a href="#">Ecran</a></li>
                                                            <li><a href="#">Ecran1</a></li>
                                                            <li><a href="#">Ecran2</a></li>
                                                        </ul>
                                                    </div>
                                            
                                            
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-active"><a href="#">Ram</a></li>
                                                    <li><a href="#">Ram1</a></li>
                                                    <li><a href="#">Ram2</a></li>
                                                </ul>
                                            </div>
                                            <div>
                                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                                    <li class="uk-active"><a href="#">clavier</a></li>
                                                    <li><a href="#">clavier1</a></li>
                                                    <li><a href="#">clavier2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul> 

                            <form class="uk-search uk-search-large">
                                    <span uk-search-icon></span>
                                    <input class="uk-search-input" type="search" placeholder="Rechercher...">
                            </form>
                    </div>
                        
                </nav>


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li><a class="navbar-brand" href="#">Publier une Annonce</a></li>
        
        <li>
            <h4>BIENVENUE <?php echo $_SESSION['username']; ?></h4>
        </li>
        <li>
            <a href="<?php echo site_url('U_Controller/logout'); ?>" class="btn btn-warning">Deconnexion</a>        
        </li>
        
      </ul>
      <li>
          
      <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #modal-example">Ajouter Article</Article></button>

    </li>
    </div>
  </nav>


                    <!-- This is a button toggling the modal -->


<!-- This is an anchor toggling the modal -->
<a href="#modal-example" uk-toggle></a>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Entrer des composants</h2>
        <form method="post" action="<?php echo site_url('U_Controller/create'); ?>">
            <?php //echo $error; ?>
            <? echo form_open_multipart('U_Controller/upload');?>
            <div class="uk-margin" uk-margin>
                <div uk-form-custom="target: true">
                    <input type="file" name="userfile">
                    <input class="uk-input uk-form-width-medium" type="text" placeholder="Click pour ajouter image" disabled>
                </div>
            </div>

            <div class="uk-margin">        
            <input class="uk-input uk-width-1-2" type="text" placeholder="Donner le composant:" name="composant" id="composant">
            </div>
            <div class="uk-margin">        
            <input class="uk-input uk-width-1-2" type="text" placeholder="Donner le prix:" name="prix" id="prix">
            </div>
            <div class="uk-margin">        
            <textarea class="uk-textarea" rows="5" placeholder="Donner la description de l'element" name="description" id="description"></textarea>
            </div>
                    
            <button type="submit" class="uk-button uk-button-default" value="save">Valider</button>
                        
        </form>
        
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Annuler</button>
        </p>
    </div>
</div>


                <br/>

                <?php if(isset($_SESSION['success'])) {?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
    <?php } ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
        

        <div class="uk-container-small uk-align-center">
        <?php foreach($result as $row) { ?>
                                <div class="uk-child-width-1-3@m uk-card uk-card-default uk-card-body" uk-grid>
                                        
                                        <div>
                                            <img class="uk-align-center im_publi" src="<?php echo base_url(); ?>images/<?php echo $row->image; ?>" alt="">
                                        </div>

                                        <div>
                                                <h4><?php echo $row->composant; ?></h4>
                                                <p><?php echo $row->prix; ?></p>
                                        </div>
                                        
                                        <div>
                                                <h3 class="uk-card-title">Description</h3>
                                                <p><?php echo $row->description; ?></p>
                                        </div>
                                </div>
        <?php } ?>    
        </div>
            
    </body>
<div class="card text-center uk-container-large _footer">
        <div class="card-header _footer">
          Pied de page
        </div>
        <div class="card-body">
          <h5 class="card-title">Un special traitement</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Retour a l'entete</a>
        </div>
        <div class="card-footer text-muted">
          bmd@copyright - 2019
        </div>
      </div>
    
    
</html>