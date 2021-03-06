<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Laravel SEO - by Think201</title>
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Custom Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bitter:400,700|Open+Sans:300,400,600,700,800" rel="stylesheet">
        <!--Fontawesome Icons -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Custom CSS -->
        <style type="text/css">
        html,body{
        font-family: 'Open Sans', sans-serif;
        }
        .main-wrapper {
        width: 1400px;
        max-width: 100%;
        margin: auto;
        }
        header{
        background-color: #f2f2f2;
        }
        .global-sidebar ul li {
        list-style: none;
        display: inline-block;
        }
        .global-sidebar ul li a {
        color:#d63025;
        width: 100%;
        transition: all 300ms linear;
        font-size: 16px;
        font-weight: 400;
        text-transform: uppercase;
        transition: all 300ms linear;
        font-family: 'Bitter', serif;
        letter-spacing: 2px;

        transition: all 300ms linear;
        }
        .global-sidebar ul li a:hover, .global-sidebar ul li a:active, .global-sidebar ul li a:focus {
        transition: all 300ms linear;
        text-decoration: underline;
        }
        .main-content {
        position: relative;
        }
        h1{
        font-size: 32px;
        font-weight: 200;
        color: #3fac36;
        margin-top: 6px;
        font-weight: 900;
        }
        h2,h3{
        font-size: 24px;
        font-weight: 400;
        margin-bottom: 10px;
        color: #140f33;
        font-family: 'Bitter', serif;
        font-size: 1.5rem;
        line-height: 20px;
        margin-top: 0;
        font-weight: 700;
        }
        p{
        font-size: 14px;
        color: #140f33;
        }
        .form-group label{
        font-size: 14px;
        color: #140f33;
        font-weight: 600;
        text-transform: uppercase;
        }
        .form-group{
        margin-bottom: 1.75rem;
        }
        .form-control{
        border: 1px solid #c8c8c8;
        color: #140f33;
        font-size: 14px;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        height: 42px;
        font-weight: 300;
        }
        .form-control:hover, .form-control:active, .form-control:focus {
        outline: none;
        box-shadow: none;
        }
        textarea{
        resize:none;
        border-radius: 0px;
        border: 1px solid #c8c8c8;
        color: #140f33;
        font-size: 14px;
        -webkit-border-radius: 0;
        border-radius: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        font-weight: 300;
        }
        .btn-theme{
        background-color: #d63025;
        background-image: none;
        color: #ffffff;
        padding: .5rem 1.75rem;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 400;
        font-family: 'Bitter', serif;
        transition: all 300ms linear;
        }
        .btn-theme:hover, .btn-theme:active, .btn-theme:focus {
        transition: all 300ms linear;
        outline: none;
        box-shadow: none;
        color:#fff;
        background-color: darken(#d63025, 15%);
        }
        table thead tr th{
        letter-spacing: 1px;
        font-weight: 400;
        font-family: 'Bitter', serif;
        font-size:14px;
        text-transform: uppercase;
        font-weight: 700;
        background-color: #efefef;
        color:#140f33;
        }
        table tbody tr td{
        font-weight: 400;
        font-size:14px;
        color: #140f33;
        }
        .btn-edit{
        background-color: #3fac36;
        color:#fff;
        margin-right: 10px;
        transition: all 300ms linear;
        }
        .btn-edit:hover, .btn-edit:active, .btn-edit:focus {
        transition: all 300ms linear;
        outline: none;
        box-shadow: none;color:#fff;
        }
        .btn-delete{
        background-color: #f2f2f2;
        color:#ababab;
        margin-right: 10px;
        transition: all 300ms linear;
        }
        .btn-delete:hover, .btn-delete:active, .btn-delete:focus {
        transition: all 300ms linear;
        outline: none;
        box-shadow: none;
        }
        </style>
    </head>
    <body id="page-top">