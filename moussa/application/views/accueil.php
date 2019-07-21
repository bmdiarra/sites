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
        <li class="nav-item active">
          <a class="nav-link" href="#">Recente Publication<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
      </ul>
      <li>
          <a href="<?php echo base_url();?>index.php/M_Controller/connexion">
      <button type="button" class="btn btn-success" >se connecter</button>
            </a>
    </li>
    <li>
        <a href="inscription.html">
      <button type="button" class="btn btn-success" >s'inscrire</button>
        </a>
    </li>
    </div>
  </nav>

                <br/>

                    <div class="uk-container-large" uk-slider="center: true">

                            <div class="uk-position-relative uk-visible-toggle uk-dark" tabindex="-1">
                        
                                <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img class="uk-align-center" src="<?php echo base_url(); ?>images/im1.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">Caracteristique du Piece</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img class="uk-align-center" src="<?php echo base_url(); ?>images/im2.png" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">Caracteristique du Piece</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img class="uk-align-center" src="<?php echo base_url(); ?>images/im3.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">Caracteristique du Piece</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img class="uk-align-center" src="<?php echo base_url(); ?>images/im5.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">Caracteristique du Piece</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="uk-card uk-card-default">
                                            <div class="uk-card-media-top">
                                                <img class="uk-align-center" src="<?php echo base_url(); ?>images/im6.jpg" alt="">
                                            </div>
                                            <div class="uk-card-body">
                                                <h3 class="uk-card-title">Caracteristique du Piece</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                        
                                <a class="uk-position-center-left uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small uk-hidden-hover uk-slidenav-large" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        
                            </div>
                            <br/>
                            
                            <div class="uk-container-small uk-align-center">
                            <div class="uk-child-width-1-3@m" uk-grid>
                                <?php foreach($result as $row) { ?>
                                        <div class="uk-animation-toggle" tabindex="0">
                                            <div class="uk-transform-origin-bottom-right uk-card uk-card-default uk-card-body uk-animation-scale-up">
                                                <img class="uk-align-center im_publi" src="<?php echo base_url(); ?>images/<?php echo $row->image; ?>" alt="">
                                                <a type="button" href="details.html" class="uk-button uk-button-primary uk-align-center">Details et Achat</a>
                                            </div>
                                        </div>
                                        
                                        <?php } ?>
                                    </div>
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