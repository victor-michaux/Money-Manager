$.get( "ajax/test.html", function( data ) {
  $( ".result" ).html( data );
  alert( "Load was performed." );
});

/*
var proportionOfCategory = document.getElementById("pieChart");
var dataProportion = {
  datasets: [{
    data: [10, 20, 30]
  }],
  // These labels appear in the legend and in the tooltips when hovering different arcs
  labels: [
    'Red',
    'Yellow',
    'Blue'
  ]
};
var pieChart = new Chart(proportionOfCategory, {
    // The type of chart we want to create
     type: 'doughnut',

    // The data for our dataset
    data: dataProportion,

    // Configuration options go here
    options: {}
});
*/
