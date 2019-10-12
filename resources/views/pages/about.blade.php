@extends('layouts.default',['title'=>'About '])

@section('content')
    <div class="container">
        <h2>What is Laracarte?</h2>
        <p>Laracarte is a clone app of <a href="https://Laramap.com" target="_blank">Laramap.com</a>.</p>
        <div class="row">
            <div class="col-md-6">
                <p class="alert alert-warning">
                    <strong><i class="fa fa-exclamation-triangle"></i>This app has been built by<a href="https://twitter.com/yao">@yao</a> for learning purposes.</strong>
                </p>
            </div>
        </div>
        <p>Feel free to helpto improve the <a href="https://github.com/ebycoco/Laracarte-Ebychoco">souce code</a>.</p>
        <hr>
        <h2>what is Laramap?</h2>
        <p>Laramap is the website by which Laracarte was inspire :).</p>
        <p>More info<a href="https://Laramap.com/p/about" target="_blank"> here</a>..</p>
        <hr>
        <h2>which tools and services are used in Laracarte?</h2>
        <p>Basically it's built on laravel &amp; Bootstrap. But there's a bunch of services used for email and other sections.</p>
        <ul>
            <li>Laravel</li>
            <li>Bootstrap</li>
            <li>Amazone S3</li>
            <li>Mandril</li>
            <li>Google Maps</li>
            <li>Gravatar</li>
            <li>Antony Martin's Geolocation Package</li>
            <li>Michel fortin's Markdown Parser Package</li>
            <li>Heroku</li>
        </ul>
    </div>
@stop
