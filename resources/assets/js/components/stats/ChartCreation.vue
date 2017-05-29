<template>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-block">
          <canvas id="pieChart" width="300" height="300"></canvas>
        </div>
      </div>
    </div>
</template>


<script>
    export default {
        props:['chartData'],
        mounted() {
            console.log('Component chart mounted.');
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
        },
        computed: {
          operations: function () {
              if ( this.chartData != null ) {
                   console.log(this.chartData);
                   for (var i = 0; i < this.chartData.length; i++) {
                    console.log(this.chartData[i].sumAmount);
                   }
              }
              return 'defaultClass';
          }
      }
    }
</script>
