var apexwc9 = {
    series: [{
      name: "Last Week",
      data: [13, 22, 28, 20, 13, 18, 29, 15, 24, 31, 9, 27]
    }, {
        name: "This Week",
        data: [33, 42, 25, 20, 30, 38, 29, 47, 44, 56, 18, 47]
    }, {
        name: 'Forecasted',
        data: [45, 52, 38, 24, 33, 26, 44, 55, 45, 48, 35, 61]
    }],
    chart: {
      height: 285,
      type: 'line', // line, bar, area
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: false
      },
    },
    colors: ['var(--chart-color1)', 'var(--secondary-color)', 'var(--bs-success)'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [2, 2, 2],
      curve: 'smooth', // straight, smooth
      dashArray: [0, 8, 0]
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
      categories: [
        "Beef",
        "Garlic",
        "Chicken",
        "Onion",
        "Carrot",
        "Salmon",
        "Pork",
        "Basil",
        "Bell Pepper",
        "Shrimp",
        "Lamb",
        "Potato",
      ],
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
  new ApexCharts(document.querySelector("#realtime_usage"), apexwc9).render();
