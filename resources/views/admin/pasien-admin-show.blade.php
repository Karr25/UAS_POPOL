@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Pasien <small></small>
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

        <!--            <div class="row">-->
        <!--                <div class="col-lg-12">-->
        <!--                    <div class="alert alert-info alert-dismissable">-->
        <!--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>-->
        <!--                        <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!-->
        <!--                    </div>-->
        <!--                </div>-->
        <!--            </div>-->
        <!-- /.row -->

        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />

        <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/jquery.form.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/flexigrid-edit.js"></script>
        <script src="/assets/grocery_crud/js/jquery_plugins/jquery.noty.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"></script>
        <style type='text/css'>
            body {
                font-family: Arial;
                font-size: 14px;
            }

            a {
                text-decoration: none;
                font-size: 14px;
            }

            a:hover {
                text-decoration: underline;
            }

            input,
            option,
            select {
                min-height: 30px;
            }
        </style>
        <div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="cd9bbe3e5b7499c1866f9fe1b9b0fa82">
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Record Pasien </div>
                    <div class='clear'></div>
                </div>
            </div>
            <div id='main-table-box'>
                <div class='form-div'>
                    <div class='form-field-box odd' id="no_identitas_field_box">
                        <div class='form-display-as-box' id="no_identitas_display_as_box">
                            No identitas :
                        </div>
                        <div class='form-input-box' id="no_identitas_input_box">
                            <div id="field-no_identitas" class="readonly_label">{{ $pasien->no_identitas }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box even' id="nama_field_box">
                        <div class='form-display-as-box' id="nama_display_as_box">
                            Nama :
                        </div>
                        <div class='form-input-box' id="nama_input_box">
                            <div id="field-nama" class="readonly_label">{{ $pasien->nama }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box odd' id="jenis_kelamin_field_box">
                        <div class='form-display-as-box' id="jenis_kelamin_display_as_box">
                            Jenis kelamin :
                        </div>
                        <div class='form-input-box' id="jenis_kelamin_input_box">
                            <div id="field-jenis_kelamin" class="readonly_label">{{ $pasien->jenis_kelamin }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box even' id="tgl_lahir_field_box">
                        <div class='form-display-as-box' id="tgl_lahir_display_as_box">
                            Tgl lahir :
                        </div>
                        <div class='form-input-box' id="tgl_lahir_input_box">
                            <div id="field-tgl_lahir" class="readonly_label">{{ $pasien->tgl_lahir }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box odd' id="alamat_field_box">
                        <div class='form-display-as-box' id="alamat_display_as_box">
                            Alamat :
                        </div>
                        <div class='form-input-box' id="alamat_input_box">
                            <div id="field-alamat" class="readonly_label">
                                <p>
                                    {{ $pasien->alamat }}</p>
                            </div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box even' id="no_telp_field_box">
                        <div class='form-display-as-box' id="no_telp_display_as_box">
                            No telp :
                        </div>
                        <div class='form-input-box' id="no_telp_input_box">
                            <div id="field-no_telp" class="readonly_label">{{ $pasien->no_telp }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                    <div class='form-field-box odd' id="username_field_box">
                        <div class='form-display-as-box' id="username_display_as_box">
                            Username :
                        </div>
                        <div class='form-input-box' id="username_input_box">
                            <div id="field-username" class="readonly_label">{{ $pasien->username }}</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                </div>
                <div class="pDiv">
                    <div class='form-button-box'>
                        <a href="/admin/pasien" class="btn btn-large back-to-list" style="text-decoration: none; color: black; margin-bottom: 10px;">Back to list</a>
                    </div>
                    <div class='form-button-box'>
                        <div class='small-loading' id='FormLoading'>Loading, updating changes...</div>
                    </div>
                    <div class='clear'></div>
                </div>
            </div>
        </div>
        <div style="min-height: 100px;"></div>
    </div>
    <!-- /.container-fluid -->
@endsection