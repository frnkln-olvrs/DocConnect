const xValues = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov'];

const yCampus1 = [50,200,300,350,400,400,475,500,390,350,400];
const yCampus2 = [100,90,50,80,109,160,230,150,190,130,140];

new Chart("campusChart", {
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
        data: yCampus1
      },
      {
        label: 'Online',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,128,0,1.0)",
        borderColor: "rgba(0,128,0,0.1)",
        data: yCampus2
      }
    ]
  },
  options: {
    legend: {display: true},
    scales: {
      yAxes: [{ticks: {min: 0, max:600}}],
    }
  }
});

const yValues1 = [50,200,300,350,400,400,475,500,390,350,400];
const yValues2 = [100,90,50,80,109,160,230,150,190,130,140];
const yValues3 = [78,230,250,450,630,250,450,650,820,900,910];

new Chart("typeChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [
      {
        label: 'Type 1',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(255,0,0,1.0)",
        borderColor: "rgba(255,0,0,0.1)",
        data: yValues1
      },
      {
        label: 'Type 2',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,128,0,1.0)",
        borderColor: "rgba(0,128,0,0.1)",
        data: yValues2
      },
      {
        label: 'Type 3',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues3
      }
    ]
  },
  options: {
    legend: {display: true},
    scales: {
      yAxes: [{ticks: {min: 0, max:1000}}],
    }
  }
});