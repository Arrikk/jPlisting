var options = {
  series: [
    {
      name: "Cost Price",
      data: [45, 52, 38, 24, 33, 26, 21, 20, 16, 18, 15, 10],
    },
    {
      name: "Sales Price",
      data: [87, 57, 74, 39, 75, 38, 62, 47, 42, 56, 45, 47],
    },
    {
        name: "Profit Margin",
        type: "line",
        data: [42, 5, 36, 15, 42, 12, 41, 27, 26, 38, 30, 37],
      }
  ],
  chart: {
    height: 310,
    type: "bar", // line, bar, area
    toolbar: {
      show: false,
    },
    zoom: {
      enabled: false,
    },
  },
  responsive: [
    {
      breakpoint: 1200,
      options: {
        chart: {
          height: 345,
        },
      },
    },
  ],
  colors: ["var(--chart-color2)", "var(--chart-color5)", "var(--chart-color1)"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    //width: [3, 3],
    //curve: 'smooth', // straight, smooth
    //dashArray: [10]
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
      "Tomato",
      "Potato",
      "Millet",
      "Candy",
      "Milk",
      "Veges",
      "Egg",
      "Pepper",
      "Chocolates",
      "Cofee",
      "Pine",
      "Apple",
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
  document.querySelector("#cost_sales_price"),
  options
);
chart.render();
