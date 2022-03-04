Apex.grid = {
  padding: {
      right: 0,
      left: 0
  }
}

// data for the sparklines that appear below header area
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46];

// the default colorPalette for this dashboard
//var colorPalette = ['#01BFD6', '#5564BE', '#F7A600', '#EDCD24', '#F74F58'];
var colorPalette = ['#00D8B6', '#008FFB', '#FEB019', '#FF4560', '#775DD0']


var optionDonut = {
  chart: {
      type: 'donut',
      width: '100%',
      height: 300
  },
  dataLabels: {
      enabled: false,
  },
  plotOptions: {
      pie: {
          customScale: 0.8,
          donut: {
              size: '75%',
          },
          offsetY: 0,
      },
      stroke: {
          colors: undefined
      }
  },
  colors: colorPalette,
  title: {
      //text: 'Department Sales',
      style: {
          fontSize: '18px'
      }
  },
  series: [21, 23, 19, 14, 6],
  labels: ['Venue', 'Catering', 'Food Items', 'Cakes', 'Transportation'],
  legend: {
      position: 'bottom',
      offsetY: 0
  }
}

var donut = new ApexCharts(
  document.querySelector("#donut"),
  optionDonut
)
donut.render();


// on smaller screen, change the legends position for donut
var mobileDonut = function() {
  if ($(window).width() < 768) {
      donut.updateOptions({
          plotOptions: {
              pie: {
                  offsetY: -15,
              }
          },
          legend: {
              position: 'bottom'
          }
      }, false, false)
  } else {
      donut.updateOptions({
          plotOptions: {
              pie: {
                  offsetY: 20,
              }
          },
          legend: {
              position: 'bottom'
          }
      }, false, false)
  }
}

$(window).resize(function() {
  mobileDonut()
});