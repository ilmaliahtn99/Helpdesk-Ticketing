var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earning').getContext('2d');
var diagram = document.getElementById('diagram').getContext('2d');
var bagan = document.getElementById('bagan').getContext('2d');
var diagram1 = document.getElementById('diagram1').getContext('2d');
// var xValues = [100,200,300,400,500,600,700,800,900,1000];
var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: ['Week : Jul 15', 'Week : Jul 22', 'Week : Jul 29', 'Week : Aug 05'],
        datasets: [{
          label: ['Admin Surat'],
          data: [8,11,10,6],
          borderColor: "red",
          fill: false
        },{
          label: ['WZONE'],
          data: [16,23,17,19],
          borderColor: "green",
          fill: false
        },{
          label: ['SIMDIV - WIKA Pusat'],
          data: [30,33,20,30],
          borderColor: "blue",
          fill: false
        },{
          label: ['PMCS - WIKA Pusat'],
          data: [12,10,19,40],
          borderColor: "orange",
          fill: false
        },{
          label: ['Jaringan Komputer'],
          data: [30,24,15,20],
          borderColor: "yellow",
          fill: false
        },{
          label: ['CRM WIKA'],
          data: [8,10,12,16],
          borderColor: "grey",
          fill: false
        },{
          label: ['Dashboard BI'],
          data: [11,23,13,18],
          borderColor: "greenyellow",
          fill: false
        },{
          label: ['FMS WIKA'],
          data: [13,10,14,30],
          borderColor: "orangered",
          fill: false
        },{
          label: ['Nasabah Online'],
          data: [30,27,13,24],
          borderColor: "brown",
          fill: false
        },{
          label: ['OFFICE 365'],
          data: [8,14,10,16],
          borderColor: "lightslategray",
          fill: false
        },{
          label: ['PMCS - Entitas Anak Perusahaan'],
          data: [16,23,17,19],
          borderColor: "darkgreen",
          fill: false
        },{
          label: ['Portal WIKA (Lama)'],
          data: [30,35,20,30],
          borderColor: "darkcyan",
          fill: false
        },{
          label: ['QIS Apps'],
          data: [18,10,19,40],
          borderColor: "coral",
          fill: false
        },{
          label: ['SIMDIV - Entitas Anak Perusahaan'],
          data: [30,24,15,20],
          borderColor: "lightgoldenrodyellow",
          fill: false
        },{
          label: ['Simpro Web'],
          data: [8,10,12,6],
          borderColor: "mediumslateblue",
          fill: false
        },{
          label: ['Smartdocs'],
          data: [11,23,13,18],
          borderColor: "greenyellow",
          fill: false
        },{
          label: ['WIKA - HCIS'],
          data: [30,28,25,32],
          borderColor: "darkseagreen",
          fill: false
        },{
          label: ['WIKA - KM'],
          data: [16,10,14,30],
          borderColor: "orangered",
          fill: false
        },{
          label: ['WIKA - LMS'],
          data: [30,27,13,24],
          borderColor: "mediumspringgreen",
          fill: false
        },{
          label: ['Aplikasi WIKA / WIKA - PIS / Audit SPI'],
          data: [23,30,25,18],
          borderColor: "lightgreen",
          fill: false
        },{
          label: ['Aplikasi WIKA / WIKA - PIS / Hasil Usaha'],
          data: [33,37,29,18],
          borderColor: "olivedrab",
          fill: false
        },{
          label: ['Aplikasi WIKA / WIKA - PIS / Manrisk'],
          data: [30,24,15,20],
          borderColor: "sienna",
          fill: false
        },{
          label: ['Aplikasi WIKA / WIKA - PIS / Scorecard'],
          data: [8,10,12,20],
          borderColor: "darkkhaki",
          fill: false
        },{
          label: ['Support / Aplikasi Komputer'],
          data: [11,23,13,18],
          borderColor: "lightcoral",
          fill: false
        },{
          label: ['Support / Broadcast Message (WA / Email)'],
          data: [30,28,25,32],
          borderColor: "teal",
          fill: false
        },{
          label: ['Support / Hardware Komputer'],
          data: [14,10,14,22],
          borderColor: "slateblue",
          fill: false
    
    
        }]
      },
      options: {
        legend: {display: false}
      }
    });

var myChart1 = new Chart(earning, {
    type: 'doughnut',
    data: {
        labels: ['Insiden', 'Permintaan Layanan'],
        datasets: [{
            label: 'Incident vs Service Request',
            data: [56, 44],
            backgroundColor: [
                'rgba(255, 159, 64, 1)',
                'rgba(75, 192, 192, 1)'
            ],
             
        }]
    },
    options: {
        responsive: true,
    }
});

var myChart2 = new Chart(diagram, {
    type: 'doughnut',
    data: {
        labels: ['Problem', 'Insiden'],
        datasets: [{
            // label: 'Incident as Problem',
            data: [70, 30],
            backgroundColor: [
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)'
            ],
             
        }]
    },
    options: {
        responsive: true,
    }
});

var myChart3 = new Chart(bagan, {
    type: 'doughnut',
    data: {
        labels: ['Apps Error', 'Human Error'],
        datasets: [{
            label: 'Incident by Type',
            data: [60, 40],
            backgroundColor: [
                'rgb(51, 51, 255)',
                'rgba(255, 159, 64, 1)'
            ], 
            
        }]
    },
    options: {
        responsive: true,
    }
});

var myChart4 = new Chart(diagram1, {
    type: 'doughnut',
    data: {
        labels: ['Very Unsatisfied', 'Very Satisfied', 'Satisfied', 'Natural', 'Unsatisfied'],
        datasets: [{
            data: [5, 31, 40, 17, 7],
            backgroundColor: [
                'rgb(204, 51, 0)',
                'rgb(51, 51, 255)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(255, 159, 64, 1)'
            ], 
            
        }]
    },
     options: {
        responsive: true,
    }
});