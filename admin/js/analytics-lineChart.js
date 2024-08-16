
const xValues = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov'];

const data = {
  "2021-2022": {
    campus: {
      camp_a: [50, 200, 300, 350, 400, 400, 475, 500, 390, 350, 400],
      camp_b: [100, 90, 50, 80, 109, 160, 230, 150, 190, 130, 140],
      camp_c: [78, 230, 250, 450, 630, 250, 450, 650, 820, 900, 910]
    },
    type: {
      yCampus1: [50, 200, 300, 350, 400, 400, 475, 500, 390, 350, 400],
      yCampus2: [100, 90, 50, 80, 109, 160, 230, 150, 190, 130, 140]
    }
  },
  "2022-2023": {
    campus: {
      camp_a: [150, 300, 400, 450, 500, 500, 575, 600, 490, 450, 500],
      camp_b: [200, 190, 150, 180, 209, 260, 330, 250, 290, 230, 240],
      camp_c: [178, 330, 350, 550, 730, 350, 550, 750, 920, 1000, 1010]
    },
    type: {
      yCampus1: [150, 300, 400, 450, 500, 500, 575, 600, 490, 450, 500],
      yCampus2: [200, 190, 150, 180, 209, 260, 330, 250, 290, 230, 240]
    }
  },
  "2023-2024": {
    campus: {
      camp_a: [250, 400, 500, 550, 600, 600, 675, 700, 590, 550, 600],
      camp_b: [300, 290, 250, 280, 309, 360, 430, 350, 390, 330, 340],
      camp_c: [278, 430, 450, 650, 830, 450, 650, 850, 1020, 1100, 1110]
    },
    type: {
      yCampus1: [250, 400, 500, 550, 600, 600, 675, 700, 590, 550, 600],
      yCampus2: [300, 290, 250, 280, 309, 360, 430, 350, 390, 330, 340]
    }
  }
};

function updateChart(chart, newData) {
  chart.data.datasets[0].data = newData.camp_a;
  chart.data.datasets[1].data = newData.camp_b;
  chart.data.datasets[2].data = newData.camp_c;
  chart.update();
}

function updateTypeChart(chart, newData) {
  chart.data.datasets[0].data = newData.yCampus1;
  chart.data.datasets[1].data = newData.yCampus2;
  chart.update();
}

const campusChart = new Chart("campusChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        label: 'Campus A',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(255,0,0,1.0)",
        borderColor: "rgba(255,0,0,0.1)",
        data: data["2021-2022"].campus.camp_a
      },
      {
        label: 'Campus B',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,128,0,1.0)",
        borderColor: "rgba(0,128,0,0.1)",
        data: data["2021-2022"].campus.camp_b
      },
      {
        label: 'Campus C',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: data["2021-2022"].campus.camp_c
      }
    ]
  },
  options: {
    legend: {display: true},
    scales: {
      yAxes: [{ticks: {min: 0, max: 1000}}],
    }
  }
});

const typeChart = new Chart("typeChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        label: 'Face to face',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(255,0,0,1.0)",
        borderColor: "rgba(255,0,0,0.1)",
        data: data["2021-2022"].type.yCampus1
      },
      {
        label: 'Online',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,128,0,1.0)",
        borderColor: "rgba(0,128,0,0.1)",
        data: data["2021-2022"].type.yCampus2
      }
    ]
  },
  options: {
    legend: {display: true},
    scales: {
      yAxes: [{ticks: {min: 0, max: 600}}],
    }
  }
});

document.getElementById('yearSelect').addEventListener('change', function() {
  const selectedYear = this.value === '1' ? "2021-2022" : this.value === '2' ? "2022-2023" : "2023-2024";
  updateChart(campusChart, data[selectedYear].campus);
  updateTypeChart(typeChart, data[selectedYear].type);
});