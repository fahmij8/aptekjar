@extends('adminlte::page')

@section('title', 'Page 2 (Sample) - LMS')

@section('content_header')
<h1>Page 2 (Sample)</h1>
@stop

@section('content')
<div class="container-fluid">

    <!-- Timelime example  -->
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">
                        <i class="far fa-calendar mr-2"></i>
                        Timeline
                    </h3>
                </div>
                <div class="card-body">
                    <!-- The time line -->
                    <div class="timeline">
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-red">31 Aug. 2021</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> A few moments ago</span>
                                <h3 class="timeline-header"><a href="javascript:void(0)">Admin UPI</a> sent you a
                                    broadcast</h3>

                                <div class="timeline-body">
                                    Don't forget to visit student.upi.edu to renew your semester study plan. Click the
                                    button
                                    below to proceed.
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-sm">Read more</a>
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <div class="time-label">
                            <span class="bg-green">6 Sept. 2021</span>
                        </div>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <div>
                            <i class="fas fa-video bg-maroon"></i>

                            <div class="timeline-item">
                                <span class="time"><i class="fas fa-clock"></i> A few moments ago</span>

                                <h3 class="timeline-header"><a href="javascript:void(0)">Mr. Didin</a> shared a video
                                </h3>

                                <div class="timeline-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/9ioWttYQRyM" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END timeline item -->
                        <div>
                            <i class="fas fa-clock bg-gray"></i>
                        </div>
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