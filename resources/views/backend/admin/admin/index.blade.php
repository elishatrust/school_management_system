

@extends('backend.layout.app')

@section('content')

<section class="content contact">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Contact</h2>
                    <ul class="breadcrumb ">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">App</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0 c_list">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th data-breakpoints="xs">Phone</th>
                                        <th data-breakpoints="xs sm md">Address</th>
                                        <th data-breakpoints="xs">Action</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>
                                            <img src="{{ asset('assets/images/xs/avatar1.jpg') }}" class="rounded-circle avatar" alt="">
                                            <p class="c_name">John Smith <span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                        </td>
                                        <td>
                                            <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                        </td>
                                        <td>
                                            <address><i class="zmdi zmdi-pin"></i>123 6th St. Melbourne, FL 32904</address>
                                        </td>
                                        <td>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>
                                            <img src="{{ asset('assets/images/xs/avatar3.jpg') }}" class="rounded-circle avatar" alt="">
                                            <p class="c_name">Hossein Shams <span class="badge badge-info m-l-10 hidden-sm-down">Google</span></p>
                                        </td>
                                        <td>
                                            <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-5689</span>
                                        </td>
                                        <td>
                                            <address><i class="zmdi zmdi-pin"></i>44 Shirley Ave. West Chicago, IL 60185</address>
                                        </td>
                                        <td>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-edit"></i></button>
                                            <button class="btn btn-icon btn-neutral btn-icon-mini"><i class="zmdi zmdi-delete"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
