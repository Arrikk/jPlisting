var revenue_sales = {
    series: [{
      name: "Actual",
      data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
    }, {
      name: 'Forecast',
      data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
    }],
    chart: {
      height: 350,
      type: 'bar', // line, bar, area
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: false
      },
    },
    grid: {
      show: true,  // Enable the grid
      borderColor: '#e0e0e0',  // Set the grid line color
      strokeDashArray: 0,  // Solid lines (no dashes)
      position: 'back',  // Place grid lines behind the chart
      xaxis: {
        lines: {
          show: true  // Show grid lines for the x-axis (applicable for line, bar, etc.)
        }
      },
      yaxis: {
        lines: {
          show: true  // Show grid lines for the y-axis (applicable for line, bar, etc.)
        }
      },
    },
    colors: ['var(--chart-color4)', 'var(--bs-warning)'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      width: [5, 7],
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
      categories: ['Cappuccino', 'Green Tea', 'Orange Juice', 'Coca-Cola', 'Mango Smoothie', 'Lemonade', 'Espresso', 'Mint Mojito', 'Iced Coffee', 'Bolognese', 'Chai Latte', 'Apple Cider'],
    },
    tooltip: {
      y: [{
        title: {
          formatter: function(val) {
            return val + " ($)"
          }
        }
      }, {
        title: {
          formatter: function(val) {
            return val + " ($)"
          }
        }
      }, {
        title: {
          formatter: function(val) {
            return val + " (Session)"
          }
        }
      }]
    },
  };
  new ApexCharts(document.querySelector("#sales_trend_forcasting"), revenue_sales).render();
