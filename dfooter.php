 </div> <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
                    <strong>Copyright &copy;2018 <a href="index.html#">Health Assist</a>.</strong> All rights reserved.
                </footer>
        	</div> <!-- ./wrapper -->
        <!-- ./wrapper -->
         <!-- Start Core Plugins
        =====================================================================-->
        <!-- jQuery -->
        <script src="assets/admin_page/plugins/jQuery/jquery-3.2.1.min.js" type="text/javascript"></script>
        <!-- jquery-ui --> 
        <script src="assets/admin_page/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="assets/admin_page/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- lobipanel -->
        <script src="assets/admin_page/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
        <!-- Pace js -->
        <script src="assets/admin_page/plugins/pace/pace.min.js" type="text/javascript"></script>
        <!-- SlimScroll -->
        <script src="assets/admin_page/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <!-- FastClick -->
        <script src="assets/admin_page/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
        <!-- Hadmin frame -->
        <script src="assets/admin_page/dist/js/custom1.js" type="text/javascript"></script>
        <!-- End Core Plugins
        =====================================================================-->
        <!-- Start Page Lavel Plugins
        =====================================================================-->
        <!-- Toastr js -->
        <script src="assets/admin_page/plugins/toastr/toastr.min.js" type="text/javascript"></script>
        <!-- Sparkline js -->
        <script src="assets/admin_page/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
        <!-- Data maps js -->
        <script src="assets/admin_page/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
        <!-- Counter js -->
        <script src="assets/admin_page/plugins/counterup/waypoints.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <!-- ChartJs JavaScript -->
        <script src="assets/admin_page/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
        <!-- Monthly js -->
        <script src="assets/admin_page/plugins/monthly/monthly.js" type="text/javascript"></script>
        <!-- Data maps -->
        <script src="assets/admin_page/plugins/datamaps/d3.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
        <script src="assets/admin_page/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
      
        <!-- End Page Lavel Plugins
        =====================================================================-->
        <!-- Start Theme label Script
        =====================================================================-->
        <!-- Dashboard js -->
        <script src="assets/admin_page/dist/js/custom.js" type="text/javascript"></script>

        <!-- End Theme label Script
        =====================================================================-->
         <script>
                "use strict"; // Start of use strict
                // notification
                setTimeout(function () {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 1000
                    };
                    toastr.success('Hi Everyone !', 'Welcome to Health Assist');

                }, 1300);

                //counter
                $('.count-number').counterUp({
                    delay: 10,
                    time: 5000
                });

                //data maps
                var basic_choropleth = new Datamap({
                    element: document.getElementById("map1"),
                    projection: 'mercator',
                    fills: {
                        defaultFill: "#009688",
                        authorHasTraveledTo: "#fa0fa0"
                    },
                    data: {
                        USA: {fillKey: "authorHasTraveledTo"},
                        JPN: {fillKey: "authorHasTraveledTo"},
                        ITA: {fillKey: "authorHasTraveledTo"},
                        CRI: {fillKey: "authorHasTraveledTo"},
                        KOR: {fillKey: "authorHasTraveledTo"},
                        DEU: {fillKey: "authorHasTraveledTo"}
                    }
                });

                var colors = d3.scale.category10();

                window.setInterval(function () {
                    basic_choropleth.updateChoropleth({
                        USA: colors(Math.random() * 10),
                        RUS: colors(Math.random() * 100),
                        AUS: {fillKey: 'authorHasTraveledTo'},
                        BRA: colors(Math.random() * 50),
                        CAN: colors(Math.random() * 50),
                        ZAF: colors(Math.random() * 50),
                        IND: colors(Math.random() * 50)
                    });
                }, 2000);

        //bar chart
                var ctx = document.getElementById("barChart");
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 80, 81, 56, 55, 40, 25, 35, 51, 94, 16],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 48, 40, 19, 86, 27, 90, 91, 41, 25, 34, 47],
                                borderColor: "#009688",
                                borderWidth: "0",
                                backgroundColor: "#009688"
                            }
                        ]
                    },
                    options: {
                        scales: {
                            yAxes: [{
                                    ticks: {
                                        beginAtZero: true
                                    }
                                }]
                        }
                    }
                });
                      //radar chart
                var ctx = document.getElementById("radarChart");
                var myChart = new Chart(ctx, {
                    type: 'radar',
                    data: {
                        labels: [["Eating", "Dinner"], ["Drinking", "Water"], "Sleeping", ["Designing", "Graphics"], "Coding", "Cycling", "Running"],
                        datasets: [
                            {
                                label: "My First dataset",
                                data: [65, 59, 66, 45, 56, 55, 40],
                                borderColor: "#00968866",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            },
                            {
                                label: "My Second dataset",
                                data: [28, 12, 40, 19, 63, 27, 87],
                                borderColor: "rgba(55, 160, 0, 0.7",
                                borderWidth: "1",
                                backgroundColor: "rgba(0, 150, 136, 0.35)"
                            }
                        ]
                    },
                    options: {
                        legend: {
                            position: 'top'
                        },
                        scale: {
                            ticks: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Message
                $('.message_inner').slimScroll({
                    size: '3px',
                    height: '320px'
                });

                //emojionearea
                $(".emojionearea").emojioneArea({
                    pickerPosition: "top",
                    tonesStyle: "radio"
                });

                //monthly calender
                $('#m_calendar').monthly({
                    mode: 'event',
                    //jsonUrl: 'events.json',
                    //dataType: 'json'
                    xmlUrl: 'events.xml'
                });
            
            
             //line chart
                var ctx = document.getElementById("lineChart");
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        datasets: [
                            {
                                label: "My First dataset",
                                borderColor: "rgba(0,0,0,.09)",
                                borderWidth: "1",
                                backgroundColor: "rgba(0,0,0,.07)",
                                data: [22, 44, 67, 43, 76, 45, 12, 45, 65, 55, 42, 61, 73]
                            },
                            {
                                label: "My Second dataset",
                                borderColor: "#009688",
                                borderWidth: "1",
                                backgroundColor: "#009688",
                                pointHighlightStroke: "#009688",
                                data: [16, 32, 18, 26, 42, 33, 44, 24, 19, 16, 67, 71, 65]
                            }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                });


        </script>

    </body>
</html>