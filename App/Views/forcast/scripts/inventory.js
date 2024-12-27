     // Outbound Calls & Contact Rate per weekday
     var options = {
        series: [{
          name: 'Actual Inventory',
          data: [440, 505, 414, 671, 227, 413, 201, 352,]
        }, {
          name: 'Inventory Forecast',
          data: [23, 42, 35, 27, 43, 22, 17, 31,]
        }],
        colors: ['var(--chart-color1)', 'var(--chart-color5)'],
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
        labels: ['Cappuccino', 'Green Tea', 'Orange Juice', 'Coca-Cola', 'Mango Smoothie', 'Lemonade', 'Espresso', 'Mint Mojito', ],
        yaxis: [{
          title: {
            text: 'Actual Inventory',
          },
        }, {
          opposite: true,
          title: {
            text: 'Inventory Forecast'
          }
        }]
      };
      var chart = new ApexCharts(document.querySelector("#apex-sales_inventory"), options);
      chart.render();