<div class="content-wrapper">

    <!-- end menu -->


    <!-- Content Header (Page header) -->
    <section class="content-header " style="opacity: 0.8; ">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4><?php echo ucfirst($this->uri->segment(1)); ?></h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo $this->uri->segment(2); ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?php echo ucfirst($this->uri->segment(1)); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- page-wrapper -->

    <!-- Main content -->
    <!-- <section class="content"> -->
    <div class="container-fluid">


        <div class="row">
            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
            <script type="text/javascript">
                google.charts.load('current', {
                    'packages': ['bar']
                });
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['Year', 'Jumlah Kapal Per Pelabuhan Pangkalan', 'Jumlah Kapal Per Alat Tangkap', 'Jumlah Kapal dengan Izin Aktif'],
                        ['2017', 1000, 400, 200],
                        ['2018', 1170, 460, 250],
                        ['2019', 660, 1120, 300],
                        ['2020', 1030, 540, 350]
                    ]);

                    var options = {
                        chart: {
                            title: 'Satistik Layanan',
                            subtitle: '2017 - 2020',
                        }
                    };

                    var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                    chart.draw(data, google.charts.Bar.convertOptions(options));
                }
            </script>

            <div id="columnchart_material" style="width: 100%; height:100%; margin: 10px 10px 10px 10px;"></div>


        </div>

    </div>
    </section>

</div>
<!-- </section> -->
<!-- /# end page-wrapper -->
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- /#wrapper -->