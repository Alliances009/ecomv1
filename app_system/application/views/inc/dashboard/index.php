
    <!--c3chart-->
    <link href="<?php echo config_item('url_prj') ?>assets/vendor/c3chart/c3.min.css" rel="stylesheet">


     <!--date picker-->
    <link href="<?php echo config_item('url_prj') ?>assets/vendor/date-picker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--datetime & time picker-->
    <link href="<?php echo config_item('url_prj') ?>assets/vendor/datetime-picker/css/datetimepicker.css" rel="stylesheet">

    <!--custom styles-->
    <link href="<?php echo config_item('url_prj') ?>assets/css/main.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="<?php echo config_item('url_css') ?>daterangepicker.css" />

    <script type="text/javascript" src="<?php echo config_item('url_js') ?>moment.min.js"></script>

    <script type="text/javascript" src="<?php echo config_item('url_js') ?>daterangepicker.js"></script>

    <style type="text/css">
        .table td, .table th {
                 padding: .35rem; 
    vertical-align: top;
    border-top: 1px solid #dee2e6;
        }

    </style>

<div class='background-background' style="block:none;" >
    <div  class='background-black' > </div>
    <div   class='loader1' > </div>
</div>

<!--creative states-->
        <div class="creative-state-area">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h4 class="creative-state-title">Dashboard</h4>
                </div>
                <div class="col-lg-8  col-12 text-lg-right">
                    <div class="row short-states mb-lg-0 mb-4">
          
            
                        <div class="col-2"></div>
                        <div class="col-md-8">
                            
                            <div class="form-group ">       
                                <div id="reportrange" style="color:black !important;background: #fff; cursor: pointer; padding: 4px 10px; border: 1px solid #ccc; width: 100%;height:42px;font-size: 17px;">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span style='text-align:left;color:black !important;font-size: 17px;' ></span>
                                <i class="fa fa-caret-down"></i>
                                </div>      
                            </div>
                
                        </div>
            
        
            
                        <div class="col-md-2 col-sm-12">
                            
                            <button style="width:100%;"  data-toggle="modal" data-target="#filter"  type="button" class="btn btn-primary">FILTER</button>
                
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-danger text-center pull-left">
                        <i class="vl_clip-board"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left" style='text-align:center;' >
          
            
              <div style='margin-left:-40px;padding-top:20px;padding-left:50px;'>
              
                <div class="text-danger weight700" style='position:relative;float:left;width:10%;' id='indicator_jml_transaksi' > 
                  <i style='font-size:30px;' class="fa fa-long-arrow-down"></i> 
                </div>
                
                <div class="text-danger weight700" style='padding-top:4px;position:relative;float:left;width:90%;' > 
                  <span style='top:-20px;font-size:12px;' id='compare_transaksi' ></span>
                </div>
              </div> 
            
             <h3 class="mt-4" id='transaksi_diterima' >0</h3>
                        <p class="mb-0">Transaksi Diterima</p>
                       

                       <br/>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-warning text-center pull-left">
                        <i class="vl_cart-full"></i>
                    </div>
                    <div class="creative-state-info text-center pull-left">
            
            <div style='margin-left:-40px;padding-top:20px;padding-left:50px;'>
              
                <div class="text-success weight700" style='position:relative;float:left;width:10%;' id='indicator_uang_masuk' > 
                  <i style='font-size:30px;' class="fa fa-long-arrow-up" ></i> 
                </div>
                
                <div class="text-success weight700" style='padding-top:4px;position:relative;float:left;width:90%;text-align:center;' > 
                  <span style='top:-20px;font-size:12px;' id='compare_uang_masuk' ><br/></span>
                </div>
              </div> 
              
                        <h3 class="mt-4" id='uang_masuk' ></h3>
                        <p class="mb-0">Total Penjualan</p>
                       <br/>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="creative-state-icon bg-purple text-center pull-left">
                        <i class="vl_dollar-on-hand"></i>
                    </div>
          
                    <div class="creative-state-info text-center pull-left">
          
            <div style='margin-left:-40px;padding-top:20px;padding-left:50px;'>
              
                <div class="text-success weight700" style='position:relative;float:left;width:10%;' id='indicator_uang_profit' > 
                  <i style='font-size:30px;' class="fa fa-long-arrow-up" ></i> 
                </div>
                
                <div class="text-success weight700" style='padding-top:4px;position:relative;float:left;width:90%;text-align:center;' > 
                  <span style='top:-20px;font-size:12px;'  id='compare_uang_profit' ></span>
                </div>
            </div> 
            
                        <h3 class="mt-4" id='uang_profit' ></h3>
                        <p class="mb-0">total profit</p>
                        <br/>
                        
                    </div>
          
                </div>
            </div>
        </div>
        <!--/creative states-->

        <div class="container-fluid">

            <!--sales report & active user-->
            <div class="row">
                <div class="col-xl-8 col-md-7">
                    <div class="card card-shadow mb-4">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-primary">
                                <div class="custom-title">GRAFIK PENJUALAN</div>
                                <div class=" widget-action-link">
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-transparent text-secondary dropdown-hover p-0" data-toggle="dropdown">
                                            <i class=" vl_ellipsis-fill-h"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                            <a class="dropdown-item" href="#"> Edit</a>
                                            <a class="dropdown-item" href="#"> Delete</a>
                                            <a class="dropdown-item" href="#"> Settings</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row text-center mb-4">
                                <div class="col-4">
                                    <h4 class="mb-0" id='hari_ini' >  <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">Penjualan Hari ini</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0" id='minggu_ini' >  <i class="fa fa-long-arrow-down text-danger f14"></i></h4>
                                    <small class="text-muted text-uppercase">Penjualan Minggu ini</small>
                                </div>
                                <div class="col-4">
                                    <h4 class="mb-0" id='bulan_ini' >  <i class="fa fa-long-arrow-up text-success f14"></i></h4>
                                    <small class="text-muted text-uppercase">Penjualan Bulan ini</small>
                                </div>
                            </div>
                            <div>
                                <canvas id="grafik-penjualan" height="320"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-5">
                    <div class="card text-light mb-4 basic-gradient bubble-shadow">
                        <div class="widget-action-link">
                            <div class="dropdown">
                                <a href="#" class="btn btn-transparent text-white dropdown-hover p-0" data-toggle="dropdown">
                                    <i class=" vl_ellipsis-fill-h"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right vl-dropdown">
                                    <a class="dropdown-item" href="#"> Detail</a>
                                    <a class="dropdown-item" href="#"> Cetak</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="widget-active-user">
                                <h5 class="mt-3 b-b1 mb-4">JUMLAH TRANSAKSI</h5>
                                <h1 class="mb-4" id='transaksi_jumlah' >0</h1>
                              <br/>
                                <h5 class="mt-3 b-b1 mb-5" id='satuan_waktu'></h5>
                                <h5 class="mt-5 mb-0">Transaksi Tertinggi Mediasale</h5>
                                <ul id='mediasale' class="list-unstyled active-page-link">
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/sales report & active user-->

            <!--member performance & support ticket-->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">
                                    PENJUALAN PRODUK TERTINGGI
                                   
                                   

                                </div>
                            </div>
                        </div>
                        
            <div class="card-body text-center" style='height:380px;'>
                            <canvas id="area_chart" height="150"></canvas>
                        </div>
            
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-warning">
                                <div class="custom-title">PENJUALAN KATEGORI TERTINGGI</div>
                                
                            </div>
                        </div>
            
            <div class="card-body text-center" style='height:380px;'>
                             <canvas id="area_chart2" height="150"></canvas>
                        </div>
            
          </div>
                </div>
            </div>
            <!--/member performance & support ticket-->

       <!--member performance & support ticket-->
            <div class="row">
                <div class="col-xl-6">
                    <div class="card card-shadow mb-4 ">
                        <div class="card-header border-0">
                            <div class="custom-title-wrap bar-danger">
                                <div class="custom-title">
                                    PENGINGAT STOK
                                   
                                   

                                </div>
                            </div>
                        </div>
                        
            <div class="card-body text-center" style='height:100px;'>
              TIDAK ADA PRODUK YANG AKAN HABIS
                        </div>
            
                    </div>
                </div>
            </div>
            <!--/member performance & support ticket-->

      
        </div>


  <!--basic scripts-->
   
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/popper.min.js"></script>
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?php echo config_item('url_prj') ?>assets/vendor/jquery-dropdown-master/jquery.dropdown.js"></script>

    <script src="<?php echo config_item('url_prj') ?>assets/vendor/m-custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--sparkline-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/sparkline/jquery.sparkline.js"></script>
    <!--sparkline initialization-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/js-init/sparkline/init-sparkline.js"></script>

    <!--c3chart-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/c3chart/d3.min.js"></script>
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/c3chart/c3.min.js"></script>
    <!--c3chart initialization-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/js-init/c3chart/init-c3chart.js"></script>

    <!--chartjs-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <!--chartjs initialization-->
    <script src="<?php echo config_item('url_app') ?>js/modules/dashboard/init-grafik-tertinggi.js"></script>
    
    <script type="text/javascript" src="<?php echo config_item('url_app') ?>js/modules/dashboard/init-grafik-penjualan.js"></script>
    
   
    <!--[if lt IE 9]>
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/modernizr.js"></script>
    <![endif]-->

     <!--date picker-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/date-picker/js/bootstrap-datepicker.min.js"></script>
    <!--init date picker-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/js-init/pickers/init-date-picker.js"></script>

    <!--datetime picker-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/datetime-picker/js/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/timepicker/js/bootstrap-timepicker.js"></script>
    <!--init datetime picker-->
    <script src="<?php echo config_item('url_prj') ?>assets/vendor/js-init/pickers/init-datetime-picker.js"></script>

    <script type="text/javascript">

        // Correct
        function addDays(date, days) {
            var result = new Date(date);
            result.setDate(date.getDate() + days);
            return result;
        }

        $('.filter_waktu').click(function(){
            var text  = $(this).text().toLowerCase().trim();
           
            if ( text == 'hari ini') {
                
                $('#inline-datepicker').datepicker("setDate", new Date() );
                $('#inline-datepicker2').datepicker("setDate", new Date() );
            
            } else if ( text == 'kemarin' ) {
                var date = new Date();
                kemarin = addDays(date, -1);

                $('#inline-datepicker').datepicker("setDate", kemarin );
                $('#inline-datepicker2').datepicker("setDate", kemarin );
            
            } else if ( text == '7 hari terakhir' ) {

                var date = new Date();
                d1 = addDays(date, -7);
                d2 = addDays(date, 0);

                $('#inline-datepicker').datepicker("setDate", d1 );
                $('#inline-datepicker2').datepicker("setDate", d2 );

            } else if ( text == '30 hari terakhir' ) {

            } else if ( text == 'minggu ini' ) {

            } else if ( text == 'minggu lalu' ) {

            } else if ( text == 'bulan ini' ) {

            } else if ( text == 'bulan lalu' ) {

            } else if ( text == 'bulan ini' ) {

            } else if ( text == 'bulan lalu' ) {

            } else if ( text == 'rentang waktu' ) {

            } else if ( text == 'Kemarin' ) {

            }


        });

        $('#date1-filter').focus(function() {
            $('#filter').modal('show');
            setTimeout(function(){$(".modal-backdrop").hide();},100);
        });

        $('#date2-filter').focus(function() {
            $('#filter').modal('show');
            setTimeout(function(){$(".modal-backdrop").hide();},100);
        });
        
        var date1 = $('#inline-datepicker').datepicker({
            todayHighlight: true,
            autoclose: true,
            orientation: "bottom",
            templates: {
                leftArrow: '<i class="fa fa-angle-left"></i>',
                rightArrow: '<i class="fa fa-angle-right"></i>'
            }
        }).on('changeDate', function(ev) {
            var newDate = new Date(ev.date);
            var date = newDate.format("dd-mm-yyyy");
            $('#date1-filter').val(date);
        }).data('datepicker');

          $('#inline-datepicker2').datepicker({
            todayHighlight: true,
            autoclose: true,
            orientation: "bottom",
            templates: {
                leftArrow: '<i class="fa fa-angle-left"></i>',
                rightArrow: '<i class="fa fa-angle-right"></i>'
            }
        }).on('changeDate', function(ev) {
            var newDate = new Date(ev.date);
            var date = newDate.format("dd-mm-yyyy");
            $('#date2-filter').val(date);
        }).data('datepicker');
    </script>
