var options = {
    series: [32, 56, 12],
    chart: {
      type: 'donut',
      width: 340,
      toolbar: {
        show: false,
      },
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          width: 260
        },
        legend: {
          position: 'bottom'
        }
      }
    }],
    labels: ['Previous', 'Current', 'Difference'],
    colors: ['var(--bs-warning)', 'var(--bs-success)','var(--chart-color1)'],
    dataLabels: {
      enabled: false
    },
    legend: {
      position: 'bottom', // top, bottom
      enabled: false
    }
  };
  var chart = new ApexCharts(document.querySelector("#price_comparison"), options);
  chart.render();