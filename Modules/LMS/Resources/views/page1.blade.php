@extends('adminlte::page')

@section('title', 'Page 1 (Sample) - LMS')

@section('content_header')
<h1>Page 1 (Sample)</h1>
@stop

@section('css')
@livewireStyles
@stop

@section('content')

<div class="container-fluid">

    <!-- Timelime example  -->
    <div class="row">
        <div class="col-md-12">
            <livewire:offline />
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="fas fa-newspaper mr-2"></i>
                        Card Tabs
                    </h3>
                </div>
                <div class="card-body">
                    <div class="card card-primary card-outline card-tabs">
                        <div class="card-header p-0 pt-1 border-bottom-0">
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                        href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                        aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                        href="#custom-tabs-three-profile" role="tab"
                                        aria-controls="custom-tabs-three-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-messages-tab" data-toggle="pill"
                                        href="#custom-tabs-three-messages" role="tab"
                                        aria-controls="custom-tabs-three-messages" aria-selected="false">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-tabs-three-settings-tab" data-toggle="pill"
                                        href="#custom-tabs-three-settings" role="tab"
                                        aria-controls="custom-tabs-three-settings" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content" id="custom-tabs-three-tabContent">
                                <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-home-tab">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin malesuada lacus
                                    ullamcorper dui molestie, sit amet congue quam finibus. Etiam ultricies nunc non
                                    magna feugiat commodo. Etiam odio magna, mollis auctor felis vitae, ullamcorper
                                    ornare ligula. Proin pellentesque tincidunt nisi, vitae ullamcorper felis aliquam
                                    id. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac
                                    turpis egestas. Proin id orci eu lectus blandit suscipit. Phasellus porta, ante et
                                    varius ornare, sem enim sollicitudin eros, at commodo leo est vitae lacus. Etiam ut
                                    porta sem. Proin porttitor porta nisl, id tempor risus rhoncus quis. In in quam a
                                    nibh cursus pulvinar non consequat neque. Mauris lacus elit, condimentum ac
                                    condimentum at, semper vitae lectus. Cras lacinia erat eget sapien porta
                                    consectetur.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra
                                    purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et
                                    ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl
                                    ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus,
                                    elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum.
                                    Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec
                                    augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc.
                                    Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus
                                    efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum.
                                    Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum
                                    metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare
                                    magna.
                                </div>
                                <div class="tab-pane fade" id="custom-tabs-three-settings" role="tabpanel"
                                    aria-labelledby="custom-tabs-three-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis
                                    tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque
                                    tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum
                                    consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra.
                                    Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut
                                    nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet
                                    accumsan ex sit amet facilisis.
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>
</div>
@stop

@section('footer')
<div class="float-right d-none d-sm-block">
    Projek <strong>Aplikasi Teknologi Jaringan</strong> - 2021
</div>
Made with 💙 by Fahmi Jabbar
@stop

@section('js')
@livewireScripts
@stop