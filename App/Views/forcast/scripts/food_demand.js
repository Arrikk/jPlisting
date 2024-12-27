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
        labels: ['Spaghetti', 'Beef Tacos', 'Sushi Rolls', 'Margherita Pizza', 'Avocado Toast', 'Lamb Chops', 'Chicken Curry', 'Cheeseburger', ],
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
      var chart = new ApexCharts(document.querySelector("#food-sales_demand"), options);
      chart.render();