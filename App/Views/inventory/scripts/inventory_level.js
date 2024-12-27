$(document).ready(function () {
    var options = {
      series: [
        {
          name: "Inventory",
          type: "column",
          data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43, 33],
        },
        {
          name: "Par Stock",
          type: "area",
          data: [90, 101, 52, 87, 73, 52, 37, 59, 60, 90, 89, 40],
        },
      ],
      chart: {
        height: 300,
        type: "line",
        stacked: false,
        toolbar: {
          show: false,
        },
      },
      colors: [
        "var(--chart-color1)",
        "var(--chart-color2)",
        "var(--chart-color3)",
      ],
      stroke: {
        width: [0, 2, 5],
        curve: "smooth",
      },
      plotOptions: {
        bar: {
          columnWidth: "50%",
        },
      },
      fill: {
        opacity: [0.85, 0.25, 1],
        gradient: {
          inverseColors: false,
          shade: "light",
          type: "vertical",
          opacityFrom: 0.85,
          opacityTo: 0.55,
          stops: [0, 100, 100, 100],
        },
      },
      labels: [
        "Beef",
        "Garlic",
        "Chicken",
        "Onion",
        "Carrot",
        "Salmon",
        "Pork",
        "Basil",
        "Bell Pepper",
        "Shrimp",
        "Lamb",
        "Potato",
      ],
      markers: {
        size: 0,
      },
      tooltip: {
        shared: true,
        intersect: false,
        y: {
          formatter: function (y) {
            if (typeof y !== "undefined") {
              return y.toFixed(0) + " Items";
            }
            return y;
          },
        },
      },
    };
    var chart = new ApexCharts(
      document.querySelector("#inventory_item_level"),
      options
    );
    chart.render();
  });