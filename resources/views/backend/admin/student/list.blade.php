

@extends('backend.layout.app')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css')}}">
@section('content')

<section class="content contact">
    <div class="container-fluid">

        @include('backend.layout.header')

        <div class="row clearfix">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <div class="body">

                        <div class="alert alert-success" role="alert" style="display: none">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="zmdi zmdi-thumb-up"></i>
                                </div>
                                <strong id="success"></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                        <i class="zmdi zmdi-close"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="alert alert-danger" role="alert" style="display: none">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="zmdi zmdi-block"></i>
                                </div>
                                <strong id="error"></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">
                                        <i class="zmdi zmdi-close"></i>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div id="getView">
                            <img src="{{ asset('assets/loader.svg') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Registration </h4><strong class="text-danger float-right">Required *</strong>
            </div><br>
            <div class="modal-body">

                <form id="form" onsubmit="save(event)" enctype="form-data/multipart">
                    @csrf
                    <input type="hidden" class="form-control" id="hidden_id" name="hidden_id" >
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <label for="fname">First name <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="fname" name="fname" class="form-control" placeholder="Enter first name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="mname">Middle name</label>
                            <div class="form-group">
                                <input type="text" id="mname" name="mname" class="form-control" placeholder="Enter middle name">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="lname">Last name <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" id="lname" name="lname" class="form-control" placeholder="Enter last name" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="phone">Phone <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="number" id="phone" name="phone" class="form-control" placeholder="Enter phone number" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="image">Image </label>
                            <div class="form-group">
                                <input type="file" id="image" name="image" class="form-control" placeholder="image">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="admission_date">Admission Date <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="date" class="form-control" name="admission_date" value="" placeholder="2023-04-23" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="admission_date">Admission No. <span class="text-danger">*</span></label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="admission_no" value="" placeholder="2023-04-00001" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="form-label">Gender <span class="text-danger">*</span></label>
                            <select name="gender" id="gender" class="form-control show-tick">
                                <option value="" disable="disabled">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="form-label">Class <span class="text-danger">*</span></label>
                            <select name="class_id" id="class_id" class="form-control show-tick" required>
                                <option value="" disable="disabled">Select</option>
                                <?php foreach ($class as $item) { ?>
                                <option value="<?= $item->id ?>"><?= $item->name ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="religion">Religion <span class="text-danger">*</span></label>
                            <select name="religion" id="religion" required  class="form-control show-tick">
                                <option value="" disable="disabled">Select</option>
                                <option value="Christian">Christian</option>
                                <option value="Muslim">Muslim</option>
                                <option value="Budhah">Budhah</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label class="form-label">Status <span class="text-danger">*</span></label>
                            <select name="status1" id="status1" class="form-control show-tick">
                                <option>Select</option>
                                <option value="0">Active</option>
                                <option value="1">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="submitBtn" class="btn btn-raised btn-primary btn-round waves-effect">SAVE</button>
                        <button type="button" onclick="closeModel()" class="btn btn-danger btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function () {
    getView();
});


function getView() {
    jQuery.ajax({
        type: "GET",
        url: "{{ url('admin/student/list_view')}}",
        dataType: 'html',
        cache: false,
        success: function (data) {
            $("#getView").html(data)
        }
    });
}

function closeModel(){
    $('#largeModal').modal('hide');
}

function clear_input() {
    document.getElementById('form').reset();
    $("#hidden_id").val("")
    getView()
}

function deleteStudent(id){
    var conf = confirm("Are you sure you want to delete this record ?");
    if (!conf) {
            return;
    }

    jQuery.ajax({
            type: "GET",
            url: "/admin/student/delete/"+id,
            dataType: 'json',
            success: function (data) {
                if (data.status == 200) {
                    $('.alert-danger').show();
                    $('#error').text(data.message);
                    clear_input();
                    getView();
                }
            }
    });
}

function editStudent(id){
    document.getElementById('form').reset();
    $("#hidden_id").val("")

    $("#submitBtn").html("Update");
    $('#largeModal').modal('show');

    jQuery.ajax({
            type: "GET",
            url: "/admin/student/edit/"+id,
            dataType: 'json',
            success: function (data) {
                $("#hidden_id").val(data.id)

                var rowData=data.data;

                $("#fname").val(rowData.fname);
                $("#mname").val(rowData.mname);
                $("#lname").val(rowData.lname);
                $("#phone").val(rowData.phone);
                $("#email").val(rowData.email);
                $("#admission_no").val(rowData.admission_no);
                $("#admission_date").val(rowData.admission_date);
                $("#class_id").val(rowData.class_id);
                $("#religion").val(rowData.religion);
                $("#gender").val(rowData.gender);
                $("#status1").val(rowData.status);
            }
    });
}


function save(e) {
    e.preventDefault();

    var form = document.getElementById('form');
    var formData = new FormData(form);

    jQuery.ajax({
        type: "POST",
        url: "{{ url('admin/student/add')}}",
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
            if (data.status == 200) {
                $('.alert-success').show();
                $('#success').text(data.message);
                clear_input();
                getView();
            }
        }
    });
}
</script>
@endsection
