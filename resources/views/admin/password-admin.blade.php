@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Dashboard <small>Selamat Datang</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="alert alert-info alert-dismissable">-->
        <!--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
        <!--                        <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!-- /.row -->

        <!-- Morris Charts CSS -->
        <link href="css/plugins/morris.css" rel="stylesheet" />
        @include('partials.admin-message')
        <div class="row" style="padding-bottom: 20px;">
            <div class="col-lg-9 col-md-6">
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="password">Password Saat Ini</label>
                        <input type="password" class="form-control is-invalid" name="password" id="password" placeholder="Password Sekarang" required />
                    </div>
                    <div class="form-group">
                        <label for="new_password">Password Baru</label>
                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Password Baru" required />
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Konfirmasi Password Baru</label>
                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Password Baru" required />
                    </div>
                    <button type="submit" class="btn btn-default">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.row -->

        <script src="js/jquery.js"></script>
    </div>
    <!-- /.container-fluid -->
@endsection