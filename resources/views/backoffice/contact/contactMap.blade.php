@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="mb-5">Contact Map</h1>
                    
                    <div class="row">
                        <div class="col-9">
                            <div class="mapouter"><div class="gmap_canvas"><iframe width="1000px" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q={{$maps->address}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org/%22%3Efmovies"</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net/%22%3Egoogle map iframe generator"</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
                        </div>
                                    
                        <div class="col-3">
                            <a href="/contactMap/{{$maps->id}}/edit" class="btn py-2 px-3" style="background-color: #F7D3BB">EDIT</a>
                        </div>
                    </div>
                               
            </div>
        </div>
    </div>
@endsection