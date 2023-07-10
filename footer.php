<footer class="pb-4">
  <div class="container-fluid px-4">
    <span class="d-block lh-sm small text-muted text-end">&copy;
      <script>
        document.write(new Date().getFullYear())
      </script>. Copyright
    </span>
  </div>
</footer>
<!--/.Page Footer End-->

</main>
<!--///////////Page content wrapper End///////////////-->
</div>
</div>

<!--////////////Theme Core scripts Start/////////////////-->

<script src="assets/js/theme.bundle.js"></script>
<script src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<!--////////////Theme Core scripts End/////////////////-->


<!--Charts-->
<script src="assets/vendor/apexcharts.min.js"></script>
<!--Dashboard duration calendar-->
<script src="assets/vendor/moment.min.js"></script>
<script src="assets/vendor/daterangepicker.js"></script>
<script>
  $(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
      $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    // $('#reportrange').daterangepicker({
    //     startDate: start,
    //     endDate: end,
    //     ranges: {
    //         'Today': [moment(), moment()],
    //         'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
    //         'Last 7 Days': [moment().subtract(6, 'days'), moment()],
    //         'Last 30 Days': [moment().subtract(29, 'days'), moment()],
    //         'This Month': [moment().startOf('month'), moment().endOf('month')],
    //         'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    //     }
    // }, cb);

    // cb(start, end);

  });

  var cPrimary = "var(--bs-primary)";
  var cWarning = "var(--bs-warning)";
  var cSecondary = "var(--bs-info)";
  var cSuccess = "var(--bs-success)";
  var cMuted = "var(--bs-gray-500)";
  var cBodycolor = "var(--bs-gray-600)";
  var cLight = "var(--bs-border-color)";
  var cGray = "var(--bs-gray-400)";
  var cFont = "$font-family-base";

  //-----------------------Bar Chart------------------
  new ApexCharts(document.querySelector('#chart-earnings'), {
    chart: {
      fontFamily: cFont,
      type: 'bar',
      height: 350,
      toolbar: {
        show: false,
      }
    },
    colors: [cPrimary, cWarning],
    grid: {
      borderColor: cGray,
      strokeDashArray: 6,
      padding: {
        top: 0,
        right: 20,
        bottom: 0,
        left: 20
      },
      xaxis: {
        lines: {
          show: true
        }
      },
      yaxis: {
        lines: {
          show: false
        }
      },
    },
    series: [{
        name: 'Earnings',
        data: [5717, 6432, 4214, 5214, 5021, 4212, 6247]
      },
      {
        name: 'Orders',
        data: [700, 365, 604, 394, 538, 789, 861]
      },
    ],
    xaxis: {
      labels: {
        style: {
          colors: cMuted,
          fontFamily: cFont
        }
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      tooltip: {
        enabled: false
      },
      categories: ['Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat', 'Sun'],
      crosshairs: {
        show: false,
        fill: {
          type: 'solid',
          color: cPrimary
        },
        stroke: {
          color: cLight,
          width: 1,
          dashArray: 6,
        },
      }
    },
    yaxis: {
      labels: {
        style: {
          colors: cMuted,
          fontFamily: cFont
        }
      },
      crosshairs: {
        show: false,
      }
    },
    plotOptions: {
      bar: {
        columnWidth: '40%',
        borderRadius: 0,
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: false,
    },
    tooltip: {
      shared: true,
      intersect: false,
      labels: {
        radius: 0,
      },
      y: [{
          formatter: function(y) {
            if (typeof y !== "undefined") {
              return " $" + y.toFixed(0);
            }
            return y;
          }
        },
        {
          formatter: function(y) {
            if (typeof y !== "undefined") {
              return y.toFixed(0) + " Items";
            }
            return y;
          }
        }
      ]
    },
    legend: {
      position: 'top',
      fontFamily: cFont,
      labels: {
        colors: cMuted
      },
      markers: {
        width: 12,
        height: 12,
        radius: 0
      }
    },
  }).render()

  //-----------------------Radial Bar Chart------------------

  new ApexCharts(document.querySelector('#chart-traffic'), {
    series: [{
        name: ["Organic"],
        data: [27, 26, 22, 20, 18, 15, 12]
      },
      {
        name: ["Direct"],
        data: [23, 22, 18, 16, 14, 9, 8]
      },
      {
        name: ["Referral"],
        data: [12, 10, 8, 7, 5, 3, 2]
      },
    ],
    chart: {
      fontFamily: cFont,
      height: 300,
      type: 'line',
      toolbar: {
        show: false
      },
      zoom: {
        enabled: false
      }
    },
    stroke: {
      width: 3,
      curve: 'smooth'
    },
    colors: [cWarning, cPrimary, cSecondary],
    grid: {
      borderColor: cGray,
      strokeDashArray: 6,
      padding: {
        top: 0,
        right: 30,
        bottom: 0,
        left: 20
      },
      xaxis: {
        lines: {
          show: false
        }
      },
      yaxis: {
        lines: {
          show: true
        }
      },
    },
    xaxis: {
      categories: ['Mon', 'Tue', 'Wed', 'Thr', 'Fri', 'Sat', 'Sun'],
      crosshairs: {
        show: false
      },
      labels: {
        style: {
          colors: cMuted,
          offsetX: -65,
        },
      },
      axisTicks: {
        show: false,
      },
      axisBorder: {
        show: false,
      },
      tooltip: {
        enabled: true
      },
    },
    yaxis: {
      labels: {
        formatter: function(y) {
          return y + "k"
        },
        style: {
          offsetX: 15,
          colors: cMuted,
        },
      },

    },
    legend: {
      show: false
    }
  }).render()
</script>

<!-- <script>
$(document).ready($function(){
    $('.table-datatable').DataTable();
});
</script> -->