<div class="block-header">
    <div class="row clearfix">
        <div class="col-lg-5 col-md-5 col-sm-12">
            <h2>{{ $data['header' ]}}</h2>
            <ul class="breadcrumb ">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="zmdi zmdi-home"></i></a></li>
                <li class="breadcrumb-item"><a href="javascript:">App</a></li>
                <li class="breadcrumb-item active">{{ $data['header' ]}}</li>
            </ul>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 justify-content-end">
            <a  href="#largeModal" onclick="clear_input()" data-toggle="modal" data-target="#largeModal" title="Add New" class="btn btn-round btn-primary float-right">Add New</a>
        </div>
    </div>
</div>
