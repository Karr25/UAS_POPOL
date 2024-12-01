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

        @include('partials.admin-message')

        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/css/jquery_plugins/chosen/chosen.css" />
        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />
        <link type="text/css" rel="stylesheet"
            href="/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" />

        <script src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/jquery.chosen.min.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/config/jquery.chosen.config.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/config/jquery.datepicker.config.js"></script>
        <script src="/assets/grocery_crud/texteditor/ckeditor/ckeditor.js"></script>
        <script
            src="/assets/grocery_crud/texteditor/ckeditor/adapters/jquery.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/config/jquery.ckeditor.config.js"></script>
        <script
            src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
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
        <div class="flexigrid crud-form" style='width: 100%;'>
            <div class="mDiv">
                <div class="ftitle">
                    <div class='ftitle-left'>
                        Edit Pasien </div>
                    <div class='clear'></div>
                </div>
            </div>
            <div id='main-table-box'>
                <form action="/admin/pasien/{{$pasien->id}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class='form-div'>
                        <div class='form-field-box odd' id="no_identitas_field_box">
                            <div class='form-display-as-box' id="no_identitas_display_as_box">
                                No identitas :
                            </div>
                            <div class='form-input-box' id="no_identitas_input_box">
                                <input id='field-no_identitas' class='form-control' name='no_identitas' type='text'
                                    value="{{ $pasien->no_identitas }}" maxlength='25' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="nama_field_box">
                            <div class='form-display-as-box' id="nama_display_as_box">
                                Nama :
                            </div>
                            <div class='form-input-box' id="nama_input_box">
                                <input id='field-nama' class='form-control' name='nama' type='text' value="{{ $pasien->nama }}"
                                    maxlength='150' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="jenis_kelamin_field_box">
                            <div class='form-display-as-box' id="jenis_kelamin_display_as_box">
                                Jenis kelamin :
                            </div>
                            <div class='form-input-box' id="jenis_kelamin_input_box">
                                <select id='field-jenis_kelamin' name='jenis_kelamin' class='form-select'>
                                    <option value='Perempuan' {{ $pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    <option value='Laki-laki' {{ $pasien->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                                </select>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="tgl_lahir_field_box">
                            <div class='form-display-as-box' id="tgl_lahir_display_as_box">
                                Tgl lahir :
                            </div>
                            <div class='form-input-box' id="tgl_lahir_input_box">
                                <input id='field-tgl_lahir' name='tgl_lahir' type='date' value='{{ $pasien->tgl_lahir }}' class='form-control' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="alamat_field_box">
                            <div class='form-display-as-box' id="alamat_display_as_box">
                                Alamat :
                            </div>
                            <div class='form-input-box' id="alamat_input_box">
                                <textarea id='field-alamat' name='alamat' style="resize: none;">{{ $pasien->alamat }}</textarea>
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="no_telp_field_box">
                            <div class='form-display-as-box' id="no_telp_display_as_box">
                                No telp :
                            </div>
                            <div class='form-input-box' id="no_telp_input_box">
                                <input id='field-no_telp' class='form-control' name='no_telp' type='tel'
                                    value="{{ $pasien->no_telp }}" maxlength='15' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box odd' id="username_field_box">
                            <div class='form-display-as-box' id="username_display_as_box">
                                Username :
                            </div>
                            <div class='form-input-box' id="username_input_box">
                                <input id='field-username' class='form-control' name='username' type='text' value="{{ $pasien->username }}"
                                    maxlength='50' />
                            </div>
                            <div class='clear'></div>
                        </div>
                        <div class='form-field-box even' id="password_field_box">
                            <div class='form-display-as-box' id="password_display_as_box">
                                Password :
                            </div>
                            <div class='form-input-box' id="password_input_box">
                                <input id='field-password' class='form-control' name='password' type='password' value="" />
                            </div>
                            <div class='clear'></div>
                        </div>
                    </div>
                    <div class="pDiv">
                        <div class='form-button-box' style="margin-bottom: 20px">
                            <button id="form-button-save" type='submit' value='save' class="btn btn-large" name="action">Update changes</button>
                        </div>
                        <div class='form-button-box'>
                            <button id="save-and-go-back-button" type='submit' value='go-back' class="btn btn-large" name="action">Update and go back to list</button>
                        </div>
                        <div class='form-button-box'>
                            <a href="/admin/pasien" class="btn btn-large" style="text-decoration: none; color:black;">Cancel</a>
                        </div>
                        <div class='form-button-box'>
                            <div class='small-loading' id='FormLoading'>Loading, updating changes...</div>
                        </div>
                        <div class='clear'></div>
                    </div>
                </form>
            </div>
        </div>
        <div style="min-height: 100px;"></div>
    </div>
    <!-- /.container-fluid -->
@endsection