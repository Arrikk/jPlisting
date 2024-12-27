     // Outbound Calls & Contact Rate per weekday
     var options = {
        series: [{
          name: 'Actual Sales',
          data: [440, 505, 414, 671, 227, 413, 201, 352,]
        }, {
          name: 'Sales Forecast',
          data: [23, 42, 35, 27, 43, 22, 17, 31,]
        }],
        colors: ['var(--bs-warning)', 'var(--chart-color2)'],
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
            text: 'Actual Sales',
          },
        }, {
          opposite: true,
          title: {
            text: 'Sales Forecast'
          }
        }]
      };
      var chart = new ApexCharts(document.querySelector("#beverages-sales_actual"), options);
      chart.render();