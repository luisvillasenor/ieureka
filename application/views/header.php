<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/gif" href="<?php echo base_url();?>favicon.ico">
  <title>iEureka eCommerce Plataform</title>   
  <meta name="description" content="iEureka eCommerce Plataform">
  <meta name="author" content="Luis G. Villaseñor">    
    <!-- Latest compiled and minified CSS 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> 
    Optional theme
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
     -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap-3.3.4-dist/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <link href="<?php echo base_url();?>bootstrap-3.3.4-dist/css/simple-sidebar.css" rel="stylesheet">
  <script src="<?php echo base_url();?>bootstrap-3.3.4-dist/js/ie-emulation-modes-warning.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>jquery-ui-1.11.4/jquery-ui.css">
  <style type="text/css">
  body{
    font: 13px Arial;
  }
  #products{
    text-align: center; float: left;
  }
  #products ul {
    list-style-type: none; margin: 0px;
  }
  #products li {
    width: 150px; padding: 4px; margin: 8px;
    border: 1px solid #ddd; background-color: #eee;
    -moz-border-radius: 4px; -webkit-border-radius: 4px;
  }
  #products .name {
    font-size: 15px; margin: 5px;
  }
  #products .price{
    margin: 5px;
  }
  #product .option {
    margin: 5px;
  }

  #cart{

    padding: 4px; margin: 8px; float: left;
    border: 1px solid #ddd; background-color: #eee;
    -moz-border-radius: 4px; -webkit-border-radius: 4px;
  }

  #cart table {

    width: 320px; border-collapse: collapse;
    text-align: left;
  }

  #cart th {
    border-bottom: 1px solid #aaa;
  }

  #cart caption {

    font-size: 15px; height: 30px; text-align: left;
  }
  #cart .total {
    font-size: 40px;
  }
  #cart .remove a {
    color: red;
  }


  </style>
<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  </style>
</head>
<body>