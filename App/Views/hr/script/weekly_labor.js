var options = {
  series: [{
    name: 'PServer',
    data: [30, 36, 20, 29, 31, 35, 39]
  }, 
  {
    name: 'Bartend',
    data: [22, 18, 25, 26, 25, 26, 33]
  },
  {
    name: 'Host',
    data: [15, 15, 18, 21, 22, 24, 28]
  },
  {
    name: 'Server Ass',
    data: [7, 10, 12, 15, 17, 18, 21]
  },
],
  chart: {
    type: 'bar',
    height: 300,
    stacked: true,
    //stackType: '100%',
    toolbar: {
      show: false,
    },
  },
  colors: ['var(--chart-color2)', 'var(--chart-color3)', 'var(--chart-color4)', 'var(--chart-color5)'],
  responsive: [{
    breakpoint: 480,
    options: {
      legend: {
        position: 'bottom',
        offsetX: -10,
        offsetY: 0
      }
    }
  }],
  xaxis: {
    categories: [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday",
      "Saturday",
      "Sunday",
    ],
  },
  fill: {
    opacity: 1
  },
  dataLabels: {
    enabled: false,
  },
  legend: {
    position: 'top',
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
    }]
  },
};
var chart = new ApexCharts(document.querySelector("#labor-need-chart"), options);
chart.render();