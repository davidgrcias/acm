@php
    $viewData = \App\Models\View::first(); // You can adjust this to get the correct view data
@endphp

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $viewData->title }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('storage/' . $viewData->favicon_logo) }}" type="image/png">

    <link href="{{ asset('templateUSER/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{  asset('templateUSER/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{  asset('templateUSER/css/templatemo-kind-heart-charity.css') }}" rel="stylesheet">

</head>
