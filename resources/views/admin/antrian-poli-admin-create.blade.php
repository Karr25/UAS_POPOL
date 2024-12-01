@extends('layouts.admin')

@section('styles')
    <style type="text/css">
        .row {
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Antrian poli <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="/admin/dashboard"><i class="fa fa-dashboard"></i>
                            Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-users"></i> Admin
                    </li>

                </ol>
            </div>
        </div>
        <!-- /.row -->

        <livewire:antrian-poli-form>

        <script type="text/javascript" src="/assets/admin/sb_admin/js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </div>
    <!-- /.container-fluid -->
@endsection