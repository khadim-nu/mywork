<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Poker-With-Friends</title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/sweetalert2.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/sweetalert2.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>
    </head>
    <body>

        <div class="wrapper">
            <div class="header">
                <h1 class="title">Poker-With-Friends™</h1>
                <h4 class="title">Easy to Play – Hard to Master</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="left-block col-md-6">
                        <img id="logo" class="img-responsive" src="<?= base_url(); ?>assets/images/poker2.jpg" alt="Logo" />
                    </div>
                    <div class="right-block col-md-6">
                        <p>
                            Free Beta version poker game:
                        </p>
                        <p>
                        <stong> Poker-With-Friends™ </stong>
                        </p>
                        <li> Play poker with 1, 2, 3, or 4 friends.</li>
                        <li> No ads!  No in-app fees!</li>
                        <li> Not just luck.  </li>
                        <li> Play offense and defense.</li>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 ">
                        <p> We are developing a new version of five-card poker.  Played by placing cards on board layout.</p>
                        <p> First release will be PC/Laptop based, followed by mobile app.</p>
                        <p> If you would like information as it becomes available, or a free down load when it is ready,</p>
                        <p> send us your email address, which we will not share with anyone.</p>
                    </div>
                    <div class="col-md-3">
                        <img id="logo-2" src="<?= base_url(); ?>assets/images/poker-img.jpg" alt="Logo" />
                    </div>
                </div>
                <form id="servey" data-parsley-validate  class="form-horizontal" action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">

                    
                    <div class="row">
                        <label for="inputType" class="col-sm-3   control-label">Your email address: </label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="email" name="email" data-parsley-trigger="change" required="required" data-parsley-type="email" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 ">
                            <p class=" pull-right text-info"><?= (!empty($this->session->flashdata('message')) ? $this->session->flashdata('message') : "") ?></p> 
                        </div>
                        <div class="col-md-2">
                            <p class="pull-right">Thank you!</p>
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