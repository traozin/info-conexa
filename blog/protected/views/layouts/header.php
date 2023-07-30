<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="pt-br">
    
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- BOOTSTRAP CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- BOOTSTRAP Javascript -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">

    <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->request->baseUrl; ?>/images/favicon.png">
    <title>
        <?php echo CHtml::encode($this->pageTitle); ?>
    </title>
</head>

<body>
    <header class="p-3 bg-light bg-gradient sticky-top border-bottom shadow-sm">
        <div class="d-flex flex-wrap align-items-center justify-content-around container">
            <a href="/<?php echo Yii::app()->request->baseUrl; ?>">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/conexa.png" class="bi me-2">
            </a>
            <nav class="navbar navbar-expand-lg ">
                <!-- <button class="navbar-toggler" type="button"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> -->
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-5">
                        <li class="styled-button">
                            <a href="<?= Yii::app()->request->baseUrl; ?>/" class="nav-link px-2 text-black">Home</a>
                        </li>
                        <li class="styled-button">
                            <a href="<?= Yii::app()->request->baseUrl; ?>/index.php?r=post/listposts"
                                class="nav-link px-2 text-black">Postagens</a>
                        </li>
                        <li class="styled-button">
                            <a href="https://conexa.app/" class="nav-link px-2 text-black">Site Oficial</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>