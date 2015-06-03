<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Poker-With-Friends</title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
            <div class="header">
                <h1 class="title">Poker-With-Friends™</h1>
                <h4 class="title">Easy to Play – Hard to Master</h4>
            </div>
            <div class="container ">
                <div class="row" align-center>
                    <div class="left-block col-md-6">
                        <img id="logo" class="img-responsive" src="<?= base_url(); ?>assets/images/board.png" alt="Logo" />
                    </div>
                    <div class="right-block col-md-6">
                        <li><stong class="heading">Poker-With-Friends™ </stong></li>
                        <li>Free Beta version poker game.</li>
                        <li>Play poker with 1, 2, 3, or 4 friends.</li>
                        <li>No ads!  No in-app fees!</li>
                        <li>"One Card Discard" to speed up the game.</li>
                        <li>Play offense and defense.</li>
                        <div class="col-md-3">
                            <img id="logo-2" src="<?= base_url(); ?>assets/images/poker-img.jpg" alt="Logo" />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <p> We are developing a new version of five-card poker, played by placing cards on a board layout. If you would like information as it becomes available, or a free download when it is ready, please send your e-mail address, which we will not share with anyone.</p>
                </div>
                <form id="servey" data-parsley-validate  class="form-horizontal" action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">


                    <div class="row">
                        <label for="inputType" class="col-sm-3   control-label">Your email address: </label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="email" name="email" data-parsley-trigger="change" required="required" data-parsley-type="email" />
                        </div>
                        <p class="thank">Thank you!</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6 ">
                            <p class=" pull-right text-info"><?= (!empty($this->session->flashdata('message')) ? $this->session->flashdata('message') : "") ?></p> 
                        </div>
                    </div>
                    <div class="row btn-margin">
                        <div class="col-md-10  ">
                            <div class="align-center">
                                <input class=" btn btn-info custom-btn" type="submit" value="Submit"/>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>