var options = {
    series: [{
      name: "In Stock",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 16, 18, 15, 10]
    }, {
      name: "Par Stock",
      data: [87, 57, 74, 39, 75, 38, 62, 47, 42, 56, 45, 47]
    }],
    chart: {
      height: 310,
      type: 'bar', // line, bar, area
      toolbar: {
        show: false,
      },
      zoom: {
        enabled: false
      },
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          height: 345,
        },
      }
    }],
    colors: ['var(--chart-color2)', 'var(--chart-color5)'],
    dataLabels: {
      enabled: false
    },
    stroke: {
      //width: [3, 3],
      //curve: 'smooth', // straight, smooth
      //dashArray: [10]
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
      categories: ['Tomato', 'Potato', 'Millet', 'Candy', 'Milk', 'Veges', 'Egg', 'Pepper', 'Orange', 'Banana', 'Pine', 'Apple'],
    },
    tooltip: {
      shared: true,  // Ensures that all series are shown in the tooltip on hover
      intersect: false, // Displays the tooltip even if the cursor isn't directly over a data point
      y: {
        formatter: function(val) {
          return val + "(Total)"; // Customize the display of tooltip values
        },
      },
    },
  };
  var chart = new ApexCharts(document.querySelector("#apex-VisitorStatistic"), options);
  chart.render();