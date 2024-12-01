@extends('layouts.admin')

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin - Poli <small></small>
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

        @include('partials.admin-message')

        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />

        <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/jquery.form.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
        <script
            src="/assets/grocery_crud/themes/flexigrid/js/flexigrid-add.js"></script>
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
        <div class="flexigrid crud-form" style='width: 100%;' data-unique-hash="7ea6df50001cbab5b75c30b63e038530">
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Add Poli </div>
                    <div class='clear'></div>
                </div>
                <div title="Minimize/Maximize" class="ptogtitle">
                    <span></span>
                </div>
            </div>
            <div id='main-table-box'>
                <form action="/admin/poli" method="POST" accept-charset="utf-8">
                    @csrf
                    <div class='form-div'>
                        <div class='form-field-box odd' id="kode_poli_field_box">
                            <div class='form-display-as-box' id="kode_poli_display_as_box">
                                Kode poli :
                            </div>
                            <div class='form-input-box' id="kode_poli_input_box">
                                <input id='field-kode_poli' class='form-control' name='kode_poli' type='text' value="{{ old('kode_poli') }}"
                                    maxlength='5' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="nama_poli_field_box">
                            <div class='form-display-as-box' id="nama_poli_display_as_box">
                                Nama poli :
                            </div>
                            <div class='form-input-box' id="nama_poli_input_box">
                                <input id='field-nama_poli' class='form-control' name='nama_poli' type='text' value="{{ old('nama_poli') }}"
                                    maxlength='100' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="jumlah_maksimal_field_box">
                            <div class='form-display-as-box' id="jumlah_maksimal_display_as_box">
                                Jumlah maksimal :
                            </div>
                            <div class='form-input-box' id="jumlah_maksimal_input_box">
                                <input id='field-jumlah_maksimal' class='form-control' name='jumlah' type='number' value="{{ old('jumlah') }}" />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <!-- Start of hidden inputs -->
                        <!-- End of hidden inputs -->

                        <div id='report-error' class='report-div error'></div>
                        <div id='report-success' class='report-div success'></div>
                    </div>
                    <div class="pDiv">
                        <div class='form-button-box' style="margin-bottom: 20px">
                            <button id="form-button-save" type='submit' value='save' class="btn btn-large" name="action">Save</button>
                        </div>
                        <div class='form-button-box'>
                            <button type='submit' value='go-back' id="save-and-go-back-button"
                                class="btn btn-large" name="action">Save and go back to list</button>
                        </div>
                        <div class='form-button-box'>
                            <a type='button' href="/admin/poli" class="btn btn-large" style="text-decoration: none; color:black;">Cancel</a>
                        </div>
                        <div class='form-button-box'>
                            <div class='small-loading' id='FormLoading'>Loading, saving data...</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                </form>
            </div>
        </div>
        <script>
            var validation_url = '/index.php/admin/poli/index/insert_validation';
            var list_url = '/index.php/admin/poli/index/';

            var message_alert_add_form = "The data you had insert may not be saved.\nAre you sure you want to go back to list?";
            var message_insert_error = "An error has occurred on insert.";
        </script>
        <script type="text/javascript">
            var js_date_format = 'dd/mm/yy';
        </script>
        <script type="text/javascript">
            var default_javascript_path = '/assets/grocery_crud/js';
            var default_css_path = '/assets/grocery_crud/css';
            var default_texteditor_path = '/assets/grocery_crud/texteditor';
            var default_theme_path = '/assets/grocery_crud/themes';
            var base_url = '/';

        </script>
        <div style="min-height: 100px;"></div>
    </div>
    <!-- /.container-fluid -->
@endsection