@extends('layouts.template')
@section('content')
<style>

.text-dark {
    
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
    margin-left: 50px;
}
    </style>


<div class="row justify-content-center"  style="max-width: 80rem;">
<div class="container-fluid">
                    <h3 class="text-dark mb-4">Data</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xl-4">
                            <div class="card mb-3"></div>
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Student- Get Job</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span>{{$getJob}}</span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">{{$getJob}}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-chart-bar fa-2x text-black-300" style="color: rgb(0,0,0);background: rgba(0,0,0,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters" style="color: rgb(0,0,0);">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Student- Still Waiting</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span></span></div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar bg-info" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span class="visually-hidden">{{$notJob}}</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-auto"><i class="fas fa-chart-line fa-2x text-black-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-7 col-xl-7 mb-4" style="margin: 2px 2px 2px ;padding: 6px 12px;">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Users Registered</span></div>
                                            <div class="text-dark fw-bold h5 mb-0"><span></span></div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-user-alt fa-2x text-black-300" style="color: rgb(0,0,0);background: rgba(0,0,0,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Total Students Registered</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-black-300" style="color: rgb(0,0,0);background: rgba(0,0,0,0);"></i></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="card shadow border-start-info py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters" style="color: rgb(0,0,0);">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-info fw-bold text-xs mb-1"><span>Total Employers Registered</span></div>
                                            <div class="row g-0 align-items-center">
                                                <div class="col-auto">
                                                    <div class="text-dark fw-bold h5 mb-0 me-3"><span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-clipboard-list fa-2x text-black-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mb-5"></div>
                </div>
            </div>
            @endsection