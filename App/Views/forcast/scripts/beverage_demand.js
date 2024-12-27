     // Outbound Calls & Contact Rate per weekday
     var options = {
        series: [{
          name: 'Actual Demand',
          data: [440, 505, 414, 671, 227, 413, 201, 352]
        }, {
          name: 'Demand Forecast',
          data: [23, 42, 35, 27, 43, 22, 17, 31]
        }],
        colors: ['var(--chart-color2)', 'var(--chart-color3)'],
        chart: {
          height: 320,
          type: 'bar',
          toolbar: {
            show: false,
          },
        },
        stroke: {
          width: [0, 4]
        },
        dataLabels: {
          enabled: true,
          enabledOnSeries: [1]
        },
        labels: ['Cappuccino', 'Green Tea', 'Orange Juice', 'Coca-Cola', 'Mango Smoothie', 'Lemonade', 'Espresso', 'Mint Mojito'],
        yaxis: [{
          title: {
            text: 'Actual Demand',
          },
        }, {
          opposite: true,
          title: {
            text: 'Demand Forecast'
          }
        }]
      };
      var chart = new ApexCharts(document.querySelector("#beverage-sales_demand"), options);
      chart.render();