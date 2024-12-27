var options = {
  series: [
    {
      name: "Forecast",
      data: [16778, 26666, 31746, 46333, 54444, 44900, 64999, 72545, 47545, 66124, 35656, 45989],
    },
    {
      name: "Actual",
      data: [14667, 45687, 28434, 54355, 66342, 62877, 43556, 25673, 72457, 41368, 37000, 67889],
    },
  ],
  chart: {
    height: 400,
    type: "line", // line, bar, area
    toolbar: {
      show: false,
    },
    zoom: {
      enabled: false,
    },
  },
  responsive: [
    {
      breakpoint: 5000,
      options: {
        chart: {
          height: 345,
        },
      },
    },
  ],
  grid: {
    show: true,  // Enable the grid
    borderColor: '#e0e0e0',  // Set the grid line color
    strokeDashArray: 0,  // Solid lines (no dashes)
    position: 'back',  // Place grid lines behind the chart
    xaxis: {
      lines: {
        show: true  // Show grid lines for the x-axis (applicable for line, bar, etc.)
      }
    },
    yaxis: {
      lines: {
        show: true  // Show grid lines for the y-axis (applicable for line, bar, etc.)
      }
    },
  },
  colors: ["var(--chart-color2)", "var(--chart-color5)", "var(--chart-color4)"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: [3, 4, 2],
    curve: "straight", // straight, smooth
    dashArray: [5],
  },
  legend: {
    tooltipHoverFormatter: function (val, opts) {
      return (
        val +
        " - " +
        opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] +
        ""
      );
    },
  },
  markers: {
    size: 0,
    hover: {
      sizeOffset: 6,
    },
  },
  xaxis: {
    categories: [
      "Jan",
      "Feb",
      "March",
      "Apr",
      "May",
      "Jun",
      "July",
      "Aug",
      "Sept",
      "Oct",
      "Nov",
      "Dec",
    ],
  },
  tooltip: {
    y: [
      {
        title: {
          formatter: function (val) {
            return val + " ($)";
          },
        },
      },
      {
        title: {
          formatter: function (val) {
            return val + " ($)";
          },
        },
      },
    ],
  },
};


var chart = new ApexCharts(
  document.querySelector("#apex-sales_labor"),
  options
);
chart.render();
