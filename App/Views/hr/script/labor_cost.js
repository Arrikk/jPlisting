
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
          type: 'area',
          height: 300,
          stacked: true,
        //   stackType: '100%',
          toolbar: {
            show: false,
          },
          zoom: {
            enabled: false
          },
        },
        colors: ['var(--chart-color3)', 'var(--chart-color1)', 'var(--chart-color2)', 'var(--bs-success)'],
        
        stroke: {
            width: [2, 2, 2],
            curve: 'smooth', // straight, smooth
            dashArray: [0, 8, 0]
          },
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
          categories:  [
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
          horizontalAlign: 'center',
        },
      };
      var chart = new ApexCharts(document.querySelector("#forecasted-hour"), options);
      chart.render();