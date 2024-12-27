var apexwc9 = {
  series: [
    {
      name: "Server",
      data: [45, 52, 38, 24, 33, 26, 44, 55, 45, 48, 35, 61],
    },
    {
      name: "Bartender",
      data: [33, 42, 25, 20, 30, 38, 29, 47, 44, 56, 18, 47],
    },
    {
      name: "Manager",
      data: [13, 22, 28, 20, 13, 18, 29, 15, 24, 31, 9, 97],
    },
    {
      name: "Chefs",
      data: [15, 52, 38, 40, 53, 28, 39, 26, 41, 21, 7, 17],
    },
    {
      name: "DishWash",
      data: [20, 34, 28, 27, 15, 28, 19, 45, 14, 71, 29, 67],
    },
  ],
  chart: {
    height: 250,
    type: "bar", // line, bar, area
    toolbar: {
      show: false,
    },
    zoom: {
      enabled: false,
    },
  },
  colors: [
    "var(--chart-color1)",
    "var(--bs-warning)",
    "var(--bs-success)",
    "var(--bs-danger)",
    "var(--chart-color3)",
  ],
  dataLabels: {
    enabled: false,
  },
  grid: {
    show: true,
    borderColor: "#e0e0e0",
    strokeDashArray: 0,
    position: "back",
    xaxis: {
      lines: {
        show: true,
      },
    },
    yaxis: {
      lines: {
        show: true, // Show grid lines for the y-axis
      },
    },
  },
  stroke: {
    width: [2, 2, 2, 2, 2],
    curve: "smooth", // straight, smooth
    dashArray: [0, 8, 2, 2, 2],
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
            return val + " (USD)";
          },
        },
      },
      {
        title: {
          formatter: function (val) {
            return val + " (USD)";
          },
        },
      },
      {
        title: {
          formatter: function (val) {
            return val + " (USD)";
          },
        },
      },
      {
        title: {
          formatter: function (val) {
            return val + " (USD)";
          },
        },
      },
      {
        title: {
          formatter: function (val) {
            return val + " (USD)";
          },
        },
      },
    ],
  },
};
new ApexCharts(document.querySelector("#apex-labour-cost"), apexwc9).render();
