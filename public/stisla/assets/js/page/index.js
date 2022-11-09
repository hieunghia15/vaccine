
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Ngày 8-12", "Ngày 9-12", "Ngày 10-12", "Ngày 11-12", "Ngày 12-12", "Ngày 13-12", "Ngày 14-12"],
    datasets: [{
      label: 'Mũi tiêm',
      data: [853000, 851400, 873100, 887900, 945000, 951800, 976700],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 400000
        }
      }],
      xAxes: [{
        ticks: {
          display: true
        },
        gridLines: {
          display: true
        }
      }]
    },
  }
});

var ctx = document.getElementById("myChart2").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Ngày 8-12", "Ngày 9-12", "Ngày 10-12", "Ngày 11-12", "Ngày 12-12", "Ngày 13-12", "Ngày 14-12"],
    datasets: [{
      label: 'Mũi tiêm',
      data: [853000, 851400, 873100, 887900, 945000, 951800, 976700],
      borderWidth: 2,
      backgroundColor: '#6777ef',
      borderColor: '#6777ef',
      borderWidth: 2.5,
      pointBackgroundColor: '#ffffff',
      pointRadius: 4
    }]
  },
  options: {
    legend: {
      display: false
    },
    scales: {
      yAxes: [{
        gridLines: {
          drawBorder: false,
          color: '#f2f2f2',
        },
        ticks: {
          beginAtZero: true,
          stepSize: 200000
        }
      }],
      xAxes: [{
        ticks: {
          display: false
        },
        gridLines: {
          display: false
        }
      }]
    },
  }
});


var ctx = document.getElementById("myChart4").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    datasets: [{
      data: [
        853000, 851400, 873100, 887900, 945000, 951800, 976700
      ],
      backgroundColor: [
        '#191d21',
        '#63ed7a',
        '#ffa426',
        '#fc544b',
        '#6777ef',
        '#3ad9e7',
      ],
      label: 'Dataset 1'
    }],
    labels: [
      "Ngày 8-12", "Ngày 9-12", "Ngày 10-12", "Ngày 11-12", "Ngày 12-12", "Ngày 13-12", "Ngày 14-12"
    ],
  },
  options: {
    responsive: true,
    legend: {
      position: 'bottom',
    },
  }
});