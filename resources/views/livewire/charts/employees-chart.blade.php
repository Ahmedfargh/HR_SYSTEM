<div class="" >
   
    <div style=""><canvas id="employeeCounter"></canvas></div>

</div>
{{-- Stop trying to control. --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('employeeCounter').getContext('2d');
    
    let employeeCount={{$EmployeeCountValues}};
    const array = Array.from(employeeCount, (_, index) => index);
    console.log(array);
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: array,
            datasets: [{
                label: 'عدد الموظفيين ',
                data: employeeCount,
                backgroundColor: [
                    'red',
                    
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
                    beginAtZero: true,
                    isplay: true,
                    title: {
                    display: true,
                    text: "العدد",
                    color: '#911',
                    font: {
                        family: 'Comic Sans MS',
                        size: 20,
                        weight: 'bold',
                        lineHeight: 1.2,
                    },
                    padding: {top: 20, left: 0, right: 0, bottom: 0}
                    }
                },
                x: {
                    display: true,
                    title: {
                    display: true,
                    text: "القراءات",
                    color: '#911',
                    font: {
                        family: 'Comic Sans MS',
                        size: 20,
                        weight: 'bold',
                        lineHeight: 1.2,
                    },
                    padding: {top: 20, left: 0, right: 0, bottom: 0}
                    }
                },
            }
        }
    });

</script>
</div>