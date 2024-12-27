var apexwc9 = {
  series: [{
    name: "Profit",
    data: [33, 42, 25, 20, 30, 38, 29, 47, 44, 56, 18, 47]
  },{
    name: 'Loss',
    data: [20, 34, 28, 27, 15, 28, 19, 45, 14, 71, 29, 67]
  }],
  chart: {
    height: 250,
    type: 'bar', // line, bar, area
    toolbar: {
      show: false,
    },
    zoom: {
      enabled: false
    },
  },
  colors: ['var(--chart-color1)', 'var(--bs-warning)'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [2, 2],
    curve: 'smooth', // straight, smooth
    dashArray: [0, 0]
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
    }, 
    {
      title: {
        formatter: function(val) {
          return val + " (USD)"
        }
      }
    }
    ]
  },
};
new ApexCharts(document.querySelector("#profit-loss"), apexwc9).render();
