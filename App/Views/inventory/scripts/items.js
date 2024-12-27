var options = {
    series: [70, 20, 10],
    chart: {
      type: 'donut',
      width: 200,
      toolbar: {
        show: false,
      },
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          width: 100
        },
      }
    }],
    labels: ['Used', 'Wasted', 'Left'],
    colors: ['var(--bs-success)', 'var(--bs-danger)', 'var(--bs-primary)'],
    dataLabels: {
      enabled: true, // Enable data labels to show values on the chart
      style: {
        fontSize: '12px', // Set the font size for the data labels
        colors: ['#000'] // Optionally set the color of the data labels
      },
      dropShadow: {
        enabled: false // Disable shadow for clear visibility
      },
      formatter: function (val) {
        return val + "%"; // Customize the value display (optional)
      }
    },
    legend: {
      position: 'right',
      fontSize: '10px', // Define font size for the legend
      itemMargin: {
        horizontal: 0.1, // Adjust horizontal spacing between legend items
        vertical: 0.1 // Adjust vertical spacing between legend items
      },
      markers: {
        width: 7, // Set the width of the legend indicators
        height: 7, // Set the height of the legend indicators
        radius: 10, // Set the border-radius to make indicators circular (optional)
      },
      offsetY: -10, // Increase vertical space for the legend
      offsetX: 10, // Increase horizontal space for the legend
    }
  };
  
  const itemCharts = document.querySelectorAll('.item-chart-selector');
// console.log(itemCharts)
  itemCharts.forEach(item => {
      var chart = new ApexCharts(item, options);
      chart.render();
  });