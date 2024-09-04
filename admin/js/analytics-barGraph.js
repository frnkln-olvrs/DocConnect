const barData = {
  labels: ['Online', 'Face-to-Face'],
  datasets: [{
    label: 'User Types',
    data: [65, 109],
    backgroundColor: [
      '#21bf73',
      '#dc3545'
    ],
  }]
};

const barConfig = {
  type: 'bar',
  data: barData,
  options: {
    indexAxis: 'y',
    scales: {
      x: {
        beginAtZero: true
      }
    }
  }
};

const barCtx = document.getElementById('barGraph').getContext('2d');
const barChart = new Chart(barCtx, barConfig);
