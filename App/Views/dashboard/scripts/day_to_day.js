var apexwc9 = {
  series: [{
    name: "Average",
    data: [45, 52, 38, 24, 33, 26, 44],
    visible: true  // Track visibility
  }, {
    name: "Early",
    data: [33, 42, 25, 20, 30, 38, 29],
    visible: true
  }, {
    name: 'Breakfast',
    data: [20, 34, 28, 27, 15, 28, 19],
    visible: true
  },{
    name: 'Lunch',
    data: [15, 52, 38, 40, 53, 28, 39],
    visible: true
  },
  {
    name: 'Happy Hour',
    data: [20, 34, 28, 27, 15, 28, 19],
    visible: true
  },
  {
    name: 'Dinner',
    data: [13, 22, 28, 20, 13, 18, 29],
    visible: true
  }],
  chart: {
    height: 250,
    type: 'bar',
    toolbar: {
      show: false,
    },
    zoom: {
      enabled: false
    },
  },
  grid: {
    show: true,
    borderColor: '#e0e0e0',
    strokeDashArray:4,
    position: 'back',
    xaxis: {
      lines: {
        show: true
      }
    },
    yaxis: {
      lines: {
        show: true
      }
    },
  },
  colors: ['var(--chart-color3)','var(--chart-color1)', 'var(--bs-warning)', 'var(--bs-success)', 'var(--bs-danger)', 'var(--chart-color3)'],
  dataLabels: {
    enabled: false
  },
  stroke: {
    width: [2, 2, 2, 2, 2],
    curve: 'smooth',
    dashArray: [0, 0, 0, 0, 0]
  },
  legend: {
    tooltipHoverFormatter: function(val, opts) {
      return val
    }
  },
  markers: {
    size: 0,
    hover: {
      sizeOffset: 6
    }
  },
  xaxis: {
    categories: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
  },tooltip: {
    shared: true,  // Ensures that all series are shown in the tooltip on hover
    intersect: false, // Displays the tooltip even if the cursor isn't directly over a data point
    y: {
      formatter: function(val) {
        return val + " %"; // Customize the display of tooltip values
      },
    },
  },
};

var chart = new ApexCharts(document.querySelector("#day-to-day"), apexwc9);
chart.render();

// Function to toggle series visibility
function toggleSeries(seriesName, isVisible) {
  chart.updateSeries(
    apexwc9.series.map(s => {
      if (s.name === seriesName) {
        return {
          ...s,
          data: isVisible ? s.data : [],
        };
      }
      return s;
    })
  );
}

// Attach event listeners to checkboxes
document.querySelectorAll('#controls input[type="checkbox"]').forEach(checkbox => {
  checkbox.addEventListener('change', function() {
    const seriesName = this.id.charAt(0).toUpperCase() + this.id.slice(1);
    toggleSeries(seriesName, this.checked);
  });
});
