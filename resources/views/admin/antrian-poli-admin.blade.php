@extends('layouts.admin')

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
                    <a href="/admin/dashboard"><i
                            class="fa fa-dashboard"></i> Dashboard</a>
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
    <link type="text/css" rel="stylesheet"
        href="/assets/grocery_crud/css/jquery_plugins/fancybox/jquery.fancybox.css" />
    <link type="text/css" rel="stylesheet"
        href="/assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css" />

    <script
        src="/assets/grocery_crud/js/jquery-1.11.1.min.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/jquery.noty.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js"></script>
    <script
        src="/assets/grocery_crud/js/common/lazyload-min.js"></script>
    <script src="/assets/grocery_crud/js/common/list.js"></script>
    <script
        src="/assets/grocery_crud/themes/flexigrid/js/cookies.js"></script>
    <script
        src="/assets/grocery_crud/themes/flexigrid/js/flexigrid.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/jquery.form.min.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/jquery.numeric.min.js"></script>
    <script
        src="/assets/grocery_crud/themes/flexigrid/js/jquery.printElement.min.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/jquery.fancybox-1.3.4.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js"></script>
    <script
        src="/assets/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js"></script>
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

        .page-link{
            font-size: 12px;
        }
    </style>
    <script type='text/javascript'>
        var unique_hash = 'dcd11edfb9b36d4b41c7880fc840a282';
    </script>
    <div class="flexigrid" style='width: 100%;' data-unique-hash="dcd11edfb9b36d4b41c7880fc840a282">

        <div id="hidden-operations" class="hidden-operations"></div>
        <div class="mDiv">
            <div class="ftitle">
                &nbsp;
            </div>
        </div>
        <div id='main-table-box' class="main-table-box">

            <div class="tDiv">
                <div class="tDiv2">
                    <a href='/admin/antrian-poli/create'
                        title='Add Antrian poli' class='add-anchor add_button'>
                        <div class="fbutton">
                            <div>
                                <span class="add">Add Antrian poli</span>
                            </div>
                        </div>
                    </a>
                    <div class="btnseparator">
                    </div>
                </div>

                <div class='clear'></div>
            </div>

            <div id='ajax_list' class="ajax_list">
                <div class="bDiv">
                    <table cellspacing="0" cellpadding="0" border="0" id="flex1">
                        <thead>
                            <tr class='hDiv'>
                                <th width='20%'>
                                    <div class="text-left field-sorting " rel='se6203c30'>
                                        Poli </div>
                                </th>
                                <th width='20%'>
                                    <div class="text-left field-sorting " rel='s5f9427e3'>
                                        Nama Pasien </div>
                                </th>
                                <th width='20%'>
                                    <div class="text-left field-sorting " rel='tgl_antrian_poli'>
                                        Tgl antrian poli </div>
                                </th>
                                <th width='20%'>
                                    <div class="text-left field-sorting " rel='no_antrian_poli'>
                                        No antrian poli </div>
                                </th>
                                <th align="left" abbr="tools" axis="col1" class="" width='20%'>
                                    <div class="text-right">
                                        Actions </div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($antrians as $index=>$antrian)
                            <tr class="{{ ($index)%2 == 1 ? 'erow' : ''}}">
                                <td width='20%'>
                                    <div class='text-left'>{{ $antrian->poli->nama_poli }}</div>
                                </td>
                                <td width='20%'>
                                    <div class='text-left'>{{ $antrian->pasien->nama }}</div>
                                </td>
                                <td width='20%'>
                                    <div class='text-left'>{{ \Carbon\Carbon::parse($antrian->created_at)->translatedFormat('d F Y') }}</div>
                                </td>
                                <td width='20%'>
                                    <div class='text-left'>{{ $antrian->no_antrian }}</div>
                                </td>
                                <td align="left" width='20%'>
                                    <div class='tools'>
                                        <a href='/admin/antrian-poli/{{ $antrian->id }}'
                                            title='View Antrian poli' class="edit_button"><span
                                                class='read-icon'></span></a>

                                        <div class='clear'></div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <div>
                {{ $antrians->links() }}
            </div>
        </div>
    </div>
    <div style="min-height: 100px;"></div>
</div>
<!-- /.container-fluid -->
@endsection