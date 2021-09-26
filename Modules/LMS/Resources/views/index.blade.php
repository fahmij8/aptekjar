@extends('adminlte::page')

@section('title', 'Dashboard - LMS')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12 pb-2">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-bullhorn mr-2"></i>
                        Callouts
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="callout callout-danger">
                        <h5>I am a danger callout!</h5>

                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire
                            soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                    <div class="callout callout-info">
                        <h5>I am an info callout!</h5>

                        <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout callout-warning">
                        <h5>I am a warning callout!</h5>

                        <p>This is a yellow callout.</p>
                    </div>
                    <div class="callout callout-success">
                        <h5>I am a success callout!</h5>

                        <p>This is a green callout.</p>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>
@stop

@section('footer')
<div class="float-right d-none d-sm-block">
    Projek <strong>Aplikasi Teknologi Jaringan</strong> - 2021
</div>
Made with 💙 by Fahmi Jabbar
@stop