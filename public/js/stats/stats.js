function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
$.getJSON( "/categories", function( donnee ) {
  var proportionOfCategory = document.getElementById("pieChart");
  var dataValue = [];
  var dataLabel = [];
  var dataColor = [];

  for (var i = 0; i < donnee.length; i++) {
    dataValue[i]=donnee[i].sumAmount;
    dataLabel[i]=donnee[i].category.name;
    dataColor[i]=getRandomColor();
  }

  var dataProportion = {
    datasets: [{
      data: dataValue,
      backgroundColor: dataColor
    }],
    labels: dataLabel
  };

  var pieChart = new Chart(proportionOfCategory, {
       type: 'doughnut',

      data: dataProportion,

      options: {}
  });
});
