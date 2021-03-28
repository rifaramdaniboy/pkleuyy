@extends('layouts.master')

@section('content')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    <div class="row">

                        {{-- <div class="small-box bg-danger">
                            <div class="inner">
                                <p>Jumlah Sembuh</p>
                                <span> {{ $sembuh }}</b></span>
                                <p>Orang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-ios-pulse-strong"></i>
                            </div>
                        </div> --}}

                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-warning">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Sembuh</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart3" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="text-value-lg">9.823</div>
                                        <div>Meningggal</div>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-transparent dropdown-toggle p-0" type="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg class="c-icon">
                                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings">
                                                </use>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a
                                                class="dropdown-item" href="#">Something else here</a></div>
                                    </div>
                                </div>
                                <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                    <canvas class="chart" id="card-chart4" height="70"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.col-->
                    </div>

                    <footer class="c-footer">
                        <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
                        <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
                    </footer>
                </div>
            @endsection
