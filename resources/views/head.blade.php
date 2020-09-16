<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PiBas MLM SYSTEM</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- Bootstrap core CSS -->
        <link href="{{  asset('css/bootstrap.min.css ') }}" rel="stylesheet">

        <!-- Animation CSS -->
        <link href="{{  asset('css/animate.css') }}" rel="stylesheet">
        <link href="{{  asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{  asset('css/style.css') }}" rel="stylesheet">
    </head>



