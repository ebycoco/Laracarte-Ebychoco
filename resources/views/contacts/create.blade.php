@extends('layouts.default',['title '=>' Contact '])

@section('content')
    <div class="container">
    .<div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
            <h2>Get In Touch</h2>
            <p class="text-muted">If you having trouble with this service,please <a href="mailto:ebydeve2018@gmail.com"> ask for help</a>.</p>
            <form action="#" method="post">
                <div class="form-group">
                    <label for="name" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="message" class="control-label">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10"class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Envoyer &raquo;</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@stop
