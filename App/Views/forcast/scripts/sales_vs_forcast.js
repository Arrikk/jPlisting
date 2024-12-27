var randomizeArray = function(arg) {
    var array = arg.slice();
    var currentIndex = array.length,
      temporaryValue, randomIndex;
    while (0 !== currentIndex) {
      randomIndex = Math.floor(Math.random() * currentIndex);
      currentIndex -= 1;
      temporaryValue = array[currentIndex];
      array[currentIndex] = array[randomIndex];
      array[randomIndex] = temporaryValue;
    }
    return array;
  }
 // data for the sparklines that appear below header area
 var sparklineData = [47, 45, 54, 38, 56];
 // topb big chart
 var spark1 = {
   chart: {
     type: 'area',
     height: 60,
     sparkline: {
       enabled: true
     },
   },
   stroke: {
     width: 1
   },
   series: [{
     data: randomizeArray(sparklineData)
   }],
   colors: ['#f8921a'],
 }
 var spark1 = new ApexCharts(document.querySelector("#apexspark1"), spark1);
 spark1.render();

//   data for the sparklines that appear below header area
  var sparklineData = [47, 45, 54, 38, 56];
  // topb big chart
  var spark1 = {
    chart: {
      type: 'area',
      height: 60,
      sparkline: {
        enabled: true
      },
    },
    stroke: {
      width: 1
    },
    series: [{
      data: randomizeArray(sparklineData)
    }],
    colors: ['#90476F'],
  }
  var spark1 = new ApexCharts(document.querySelector("#apexspark2"), spark1);
  spark1.render();


   // data for the sparklines that appear below header area
 var sparklineData = [47, 45, 54, 38, 56];
 // topb big chart
 var spark1 = {
   chart: {
     type: 'area',
     height: 60,
     sparkline: {
       enabled: true
     },
   },
   stroke: {
     width: 1
   },
   series: [{
     data: randomizeArray(sparklineData)
   }],
   colors: ['#2794eb'],
 }
 var spark1 = new ApexCharts(document.querySelector("#apexspark3"), spark1);
 spark1.render();


 var analytics = {
    series: [{
      name: 'Sales',
      data: randomizeArray([44, 55, 57, 56, 61, 58, 63, 60,])
    }, {
      name: 'Forecast Sales',
      data: randomizeArray([76, 85, 101, 98, 87, 105, 91, 114,])
    }, {
      name: 'Accuracy',
      data: randomizeArray([35, 41, 36, 26, 45, 48, 52, 53,])
    }],
    colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
    chart: {
      type: 'bar',
      height: 280,
      toolbar: {
        show: false,
      },
    },
    plotOptions: {
      bar: {
        horizontal: false,
        columnWidth: '55%',
        //endingShape: 'rounded'
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 1,
      colors: ['transparent']
    },
    xaxis: {
      categories: ['Mon 1', 'Tue 2', 'Wed 3', 'Thu 4', 'Fri 5', 'Sat 6', 'Sun 7', 'Mon 8'],
    },
    yaxis: {
      title: {
        text: '$ (thousands)'
      }
    },
    legend: {
      position: 'bottom', // left, right, top, bottom
      horizontalAlign: 'left', // left, right, top, bottom
    },
    fill: {
      opacity: 1
    },
    tooltip: {
      y: {
        formatter: function(val) {
          return "$ " + val + " thousands"
        }
      }
    },
  };
  new ApexCharts(document.querySelector("#sales_forcast_analytics"), analytics).render();