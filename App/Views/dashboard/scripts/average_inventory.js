var apexwc9 = {
    series: [{
      name: "Begining",
      data: [45, 52, 38, 24, 33, 26, 44, 55, 45, 48, 35, 61]
    }, {
      name: "Average",
      data: [33, 42, 25, 20, 30, 38, 29, 47, 44, 56, 18, 47]
    }, {
      name: 'Ending',
      data: [13, 22, 28, 20, 13, 18, 29, 15, 24, 31, 9, 27]
    }],
    chart: {
      height: 285,
      type: 'area', // line, bar, area
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: false
      },
    },
    colors: ['var(--chart-color1)', 'var(--bs-warning)', 'var(--bs-success)'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [2, 2, 2],
      curve: 'smooth', // straight, smooth
      dashArray: [0, 8, 2]
    },
    legend: {
      tooltipHoverFormatter: function(val, opts) {
        return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
      }
    },
    markers: {
      size: 0,
      hover: {
        sizeOffset: 6
      }
    },
    xaxis: {
      categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
    },
    tooltip: {
      y: [{
        title: {
          formatter: function(val) {
            return val + " (USD)"
          }
        }
      }, {
        title: {
          formatter: function(val) {
            return val + " (USD)"
          }
        }
      }, {
        title: {
          formatter: function(val) {
            return val + " (USD)"
          }
        }
      }]
    },
  };
  new ApexCharts(document.querySelector("#average-inventory"), apexwc9).render();
