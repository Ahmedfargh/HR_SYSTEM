<div class="box mr-2" >
  
        <div ><canvas id="acquisitions"></canvas></div>

    {{-- Stop trying to control. --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var element = document.getElementById('acquisitions').getContext('2d');
        
        var attendence_char = new Chart(element, {
            type: 'doughnut',
            data: {
                labels: ['غائب', 'حاضر'],
                datasets: [{
                    label: 'نسبه الحضور',
                    data: [{{-$attendence+$employee}},{{$attendence}}],
                    backgroundColor: [
                        'red',
                        'green',
                        
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        
                    ],
                    borderWidth: 1
                }]
            },
            options: {
               layout:{
                autoPadding:false
               },
                scales: {
                    y: {
                        beginAtZero: true
                    },
                }
            }
        });

    </script>
</div>