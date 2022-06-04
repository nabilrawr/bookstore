@extends('layouts.master')

@section('content')

       <!--start content-->
       <main class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Select2</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h6 class="mb-0 text-uppercase">Select2 Controls</h6>
                <hr/>
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <div class="mb-3">
                                <label class="form-label">Select2 Text Control</label>
                                <select class="single-select">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                </select>
                            </div>
                            <div class="mb-3 select2-sm">
                                <label class="form-label">Select2 Small Text Control</label>
                                <select class="single-select">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select2 Multiple Control</label>
                                <select class="multiple-select" data-placeholder="Choose anything" multiple="multiple">
                                    <option value="United States" selected>United States</option>
                                    <option value="United Kingdom" selected>United Kingdom</option>
                                    <option value="Afghanistan" selected>Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>

                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select2 Input Group Apend</label>
                                <div class="input-group">
                                    <select class="single-select form-select" >
                                        <option selected>Last Visit</option>
                                        <option value="1">Dashboard</option>
                                        <option value="2">Control</option>
                                        <option value="3">KPI</option>
                                        <option value="3">Map</option>
                                        <option value="3">Billing Product</option>
                                    </select>
                                    <button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select2 Input Group Prepend</label>
                                <div class="input-group">
                                    <button class="btn btn-outline-secondary" type="button"><i class='bx bx-search'></i>
                                    </button>
                                    <select class="form-select single-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                        <option selected>Last Visit</option>
                                        <option value="1">Dashboard</option>
                                        <option value="2">Control</option>
                                        <option value="3">KPI</option>
                                        <option value="3">Map</option>
                                        <option value="3">Billing Product</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </main>
<!--end page main-->

@endsection
