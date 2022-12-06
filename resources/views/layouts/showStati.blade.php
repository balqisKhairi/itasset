@extends('layouts.template')
@section('content')
<style>

.text-dark {
    
    color: rgba(var(--bs-dark-rgb), var(--bs-text-opacity)) !important;
    margin-left: 50px;
}
.stat-cards {
    margin-right: -10px;
    margin-left: 10px;
    margin-bottom: 10px;
}

.stat-cards-info__num {
    font-weight: 600;
    font-size: 18px;
    line-height: 1.22;
    color: #171717;
    margin-bottom: 4px;
    margin-left: 50px;
}
    </style>


<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Statistics</h2>
                    <div class="row stat-cards">
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon primary">
                                    <i data-feather="monitor" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Desktop</p>
                                    <p class="stat-cards-info__num">{{$totalDesk}}</p>
                                  
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon primary">
                                <i data-feather="monitor" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Outsource Desktop</p>
                                    <p class="stat-cards-info__num">{{$totalOsdesk}}</p>
                                  
                                </div>
                            </article>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon primary">
                                <i data-feather="monitor" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total All in One Desktop</p>
                                    <p class="stat-cards-info__num">{{$totalAiodesk}}</p>
                                  
                                </div>
                            </article>
                        </div>



                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon primary">
                                <i data-feather="image" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Image Viewer</p>
                                    <p class="stat-cards-info__num">{{$totalImageViewer}}</p>
                                  
                                </div>
                            </article>
                        </div>

                      
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon success">
                                <i data-feather="tablet" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Tablet</p>
                                    <p class="stat-cards-info__num">{{$totalTablet}}</p>
                                  
                                </div>
                            </article>
                        </div>

                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon success">
                                <i class="fa fa-laptop" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Laptop</p>
                                    <p class="stat-cards-info__num">{{$totalLaptop}}</p>
                                  
                                </div>
                            </article>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon success">
                                <i data-feather="printer" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Printer</p>
                                    <p class="stat-cards-info__num">{{$totalPrinter}}</p>
                                  
                                </div>
                            </article>
                        </div>



                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon success">
                                <i data-feather="tv" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total TV Sharp</p>
                                    <p class="stat-cards-info__num">{{$totalTvsharp}}</p>
                                  
                                </div>
                            </article>
                        </div>




                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon warning">
                                    <i data-feather="credit-card" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Card Reader</p>
                                    <p class="stat-cards-info__num">{{$totalCardreader}}</p>
                                  
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon warning">
                                <i data-feather="eye" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Biometric</p>
                                    <p class="stat-cards-info__num">{{$totalBiometric}}</p>
                                  
                                </div>
                            </article>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon warning">
                                <i class="fa fa-medkit" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Encoremed</p>
                                    <p class="stat-cards-info__num">{{$totalEncoremed}}</p>
                                  
                                </div>
                            </article>
                        </div>



                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon warning">
                                <i data-feather="dollar-sign" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total MPOS</p>
                                    <p class="stat-cards-info__num">{{$totalMpos}}</p>
                                  
                                </div>
                            </article>
                        </div>

                        
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon purple">
                                <i data-feather="battery-charging" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total UPS</p>
                                    <p class="stat-cards-info__num">0</p>
                                  
                                </div>
                            </article>
                        </div>


                    </div>
                  
                        </div>
                    </div>
                </div>
            </main>
            @endsection