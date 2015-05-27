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
            <h1 class="title">Welcome to Practice!</h1>
            <h3 class="title">Welcome to Practice!</h3>
            <div class="container">
                <div class="row">
                    <div class="left-block col-md-6">
                        <img id="logo" src="" alt="Logo" />
                    </div>
                    <div class="right-block col-md-6">
                        <p>aaaaaaaaaaaaaaa</p>
                        <p>aaaaaaaaaaaaaaa</p> 
                        <p>aaaaaaaaaaaaaaa</p>
                        <p>aaaaaaaaaaaaaaa</p>
                        <p>aaaaaaaaaaaaaaa</p>
                    </div>
                </div>
                <form id="servey"  class="form-horizontal" action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">

                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:1</label>
                        <div class="col-sm-4">
                            <!--<input class="form-control custom" type="text" name="ans2" data-trigger="change" data-parsley-required/>-->
                            <label class="radio-inline">
                                <input type="radio" name="ans1" id="inlineRadio1" value="Yes"> Yes
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="ans1" id="inlineRadio2" value="No"> No
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:2</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans2" data-trigger="change" data-parsley-required/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:3</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans3" data-trigger="change" data-parsley-required/>

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:4</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans4" data-trigger="change" data-parsley-required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:5</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans5" data-trigger="change" data-parsley-required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:6</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans6" data-trigger="change" data-parsley-required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputType" class="col-sm-1 control-label">Question:7</label>
                        <div class="col-sm-4">
                            <input class="form-control custom" type="text" name="ans7" data-trigger="change" data-parsley-required/>
                        </div>
                    </div>


                    <div class="form-group ">
                        <div class="col-sm-2 control-label">
                            <input class=" btn btn-info" type="submit" value="Submit"/>
                        </div>
                    </div>
                </form>
                <div class=" row  col-md-9 form-group">
                    <div class="col-sm-3 pull-right">
                        <img id="logo-2" src="" alt="Logo" />
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>