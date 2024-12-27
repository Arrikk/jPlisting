var options = {
    series: [{
      name: 'Previous Price',
      data: [13, 23, 20, 8, 13, 27, 33, 12, 67, 22, 43, 21, 49, 13, 23]
    }, {
      name: 'Current Price',
      data: [44, 55, 41, 67, 22, 43, 21, 49, 13, 23, 20, 8, 13, 27, 33]
    }],
    chart: {
      type: 'bar',
      height: 300,
      stacked: true,
      //stackType: '100%',
      toolbar: {
        show: false,
      },
    },
    colors: ['var(--chart-color1)', 'var(--chart-color4)'],
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
        "Zucchini",
        "Eggplant",
        "Beef",
        "Mushroom",
        "Asparagus"
      ],
    },
    fill: {
      opacity: 1
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      position: 'bottom',
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
  var chart = new ApexCharts(document.querySelector("#current_previous_prices"), options);
  chart.render();