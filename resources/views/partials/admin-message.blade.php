{{-- Update Data --}}
@if (session()->has('updated'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{session('updated')}}
        </div>
    </div>
</div>
@endif

{{-- Error Input --}}
@if($errors->all())
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            @foreach ($errors->all() as $error) {{$error}}<br> @endforeach
        </div>
    </div>
</div>
@endif

{{-- Error --}}
@if (session()->has('error'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{session('error')}}
        </div>
    </div>
</div>
@endif

{{-- Success --}}
@if (session()->has('success'))
<div class="row">
    <div class="col-lg-12">
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{session('success')}}
        </div>
    </div>
</div>
@endif