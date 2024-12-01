@extends('layouts.admin')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard <small>Selamat Datang | {{ auth()->user()->nama }}</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>

            </ol>
        </div>
    </div>
    <!-- /.row -->

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <div class="row">
    @foreach ($polis as $poli)
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa-solid fa-notes-medical" style="font-size: 60px"></i>
                        {{-- <i class="fa fa-comments fa-5x"></i> --}}
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $poli->antrians->count() }}</div>
                        <div>{{ $poli->nama_poli }}</div>
                    </div>
                </div>
            </div>
            {{-- <a href="/admin/poli"> --}}
                <div class="panel-footer">
                    {{-- <span class="pull-left">View Details</span>
    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div> --}}
                </div>
            {{-- </a> --}}
        </div>
    </div>
    @endforeach

        {{-- <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <!-- <i class="fa fa-comments fa-5x"></i> -->
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                            <div>Poli Umum</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <!-- <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <!-- <i class="fa fa-tasks fa-5x"></i> -->
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">2</div>
                            <div>Poli Gigi</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <!-- <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <!--  <i class="fa fa-shopping-cart fa-5x"></i> -->
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">1</div>
                            <div>Poli Imunisasi</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <!--  <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <!-- <i class="fa fa-support fa-5x"></i> -->
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">0</div>
                            <div>Poli Tubercolusis</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <!-- <span class="pull-left">View Details</span>
        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span> -->
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div> --}}
    </div>
    <!-- /.row -->

    <script src="js/jquery.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</div>
<!-- /.container-fluid -->
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dash').addClass('active');
        });
    </script>
@endsection