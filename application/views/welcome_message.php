<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to CodeIgniter</title>

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
            <h1>Welcome to Practice!</h1>
            <div class="wrapper">
                <form  action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">
                    <div class="row form-group">
                        <input class="form-control" type="text" name="ans1"/>
                    </div>
                    <div class="row form-group">
                        <input class="form-control" type="text" name="ans2"/>
                    </div>
                    <div class="row form-group">
                        <input class="form-control" type="text" name="ans3"/>
                    </div>
                    <div class="row form-group">
                        <input class="form-control" type="text" name="ans4"/>
                    </div>

                    <div class="row form-group">
                        <input class="" type="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>