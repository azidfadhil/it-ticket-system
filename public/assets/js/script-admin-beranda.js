$(document).ready(function() {
  var bootstrapColors = [
    '#007bff', // Primary
    '#ffc107', // Warning
    '#dc3545', // Danger
    '#28a745', // Success
    '#17a2b8', // Info
    '#6c757d', // Secondary
    '#343a40'  // Dark
  ]

  var donutChartCanvas = $('#tiketPerKategoriChart').get(0).getContext('2d')
  var barChartCanvas = $('#tiketPerTeknisiChart').get(0).getContext('2d')
  
  var donutData = {
    labels: [
      'Website',
      'Mobile Apps',
      'Hardware',
      'Network',
    ],
    datasets: [
      {
        data: [15, 20, 35, 12],
        backgroundColor : bootstrapColors,
      }
    ]
  }
  var barChartData = {
    labels  : ['Teknisi A', 'Teknisi B', 'Teknisi C', 'Teknisi D', 'Teknisi E', 'Teknisi F', 'Teknisi G'],
    datasets: [
      {
        label : 'Tiket',
        backgroundColor : bootstrapColors,
        borderColor : 'rgba(60,141,188,0.8)',
        borderWidth: 0,
        data : [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  }

  var donutOptions     = {
    maintainAspectRatio : false,
    responsive : true,
    legend: {
      display: true,
      position: 'bottom',
    },
    tooltips: {
      callbacks: {
        label: function(tooltipItem, data) {
          var label = data.labels[tooltipItem.index]
          var totalTiket = data.datasets[0].data[tooltipItem.index]
          
          return ' ' + label + ': ' + totalTiket + ' tiket'
        }
      }
    }
  }
  var barChartOptions = {
    responsive : true,
    maintainAspectRatio : false,
    datasetFill : false,
    legend: {
      display: false,
    }
  }

  new Chart(donutChartCanvas, {
    type: 'doughnut',
    data: donutData,
    options: donutOptions
  })
  new Chart(barChartCanvas, {
    type: 'bar',
    data: barChartData,
    options: barChartOptions
  })
})