const xValues = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov'];

const camp_a = [50,200,300,350,400,400,475,500,390,350,400];
const camp_b = [100,90,50,80,109,160,230,150,190,130,140];
const camp_c = [78,230,250,450,630,250,450,650,820,900,910];

new Chart("campusChart", {
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
        data: camp_a
      },
      {
        label: 'Campus B',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,128,0,1.0)",
        borderColor: "rgba(0,128,0,0.1)",
        data: camp_b
      },
      {
        label: 'Campus C',
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: camp_c
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

const yCampus1 = [50,200,300,350,400,400,475,500,390,350,400];
const yCampus2 = [100,90,50,80,109,160,230,150,190,130,140];

new Chart("typeChart", {
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