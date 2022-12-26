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

.button {
    border: none;
    color: white;
    padding: 5px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    margin-top: 0px;
    margin-left: 110px;
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: #ffffff;
    color: black;
    border: 2px solid #bfc1ff;
}


.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}
.button1:hover {
  background-color: #4CAF50;
  color: white;
}

    </style>


<!-- ! Main -->
<main class="main users chart-page" id="skip-target">
                <div class="container">
                    <h2 class="main-title">Statistics</h2>


                    <div >
          
          <br></br>

                    <div class="row stat-cards">
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon primary">
                                    <i data-feather="monitor" aria-hidden="true"></i>
                                </div>
                                
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Desktop</p>
                                    <p class="stat-cards-info__num">{{$totalDesk}}</p>
                                    <a class="button button1" href="{{ route('desktops.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('osdesktops.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('aiodesktops.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('imageviewers.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('tablets.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('laptops.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('printers.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('tvsharps.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('cardReaders.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('biometrics.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('encoremeds.index') }}"> <span>View </span></a>
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
                                    <a class="button button1" href="{{ route('mposs.index') }}"> <span>View </span></a>
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
                                    <p class="stat-cards-info__num">{{$totalPower}}</p>
                                    <a class="button button1" href="{{ route('powers.index') }}"> <span>View </span></a>
                                </div>
                            </article>
                        </div>


                          
                        <div class="col-md-6 col-xl-3">
                            <article class="stat-cards-item">
                                <div class="stat-cards-icon purple">
                                <i data-feather="users" aria-hidden="true"></i>
                                </div>
                                <div class="stat-cards-info">
                                <p class="stat-cards">Total Vendor</p>
                                    <p class="stat-cards-info__num">{{$totalVendor}}</p>
                                    <a class="button button1" href="{{ route('vendors.index') }}"> <span>View </span></a>
                                </div>
                            </article>
                        </div>


                    </div>
                  
                        </div>
                    </div>
                </div>
            </main>
            @endsection