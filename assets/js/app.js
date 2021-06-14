const data = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(255, 99, 132, 0.2)',
            'rgba(54, 162, 235, 0.2)',
            'rgba(255, 206, 86, 0.2)',
            'rgba(75, 192, 192, 0.2)',
            'rgba(153, 102, 255, 0.2)',
            'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
    }],
};

const config = {
    type: 'pie',
    data: data,
    options: {
        // circumference: 2 * Math.PI,
        // rotation: -0.8 * Math.PI,
        animation: {
            // animateRotate: true,
            animateScale: true
        },
        legend: {
            position: 'bottom',
            labels: {
                // fontColor: "white",
                boxWidth: 20,
                padding: 20
            }
        },
        // responsive: true,
        plugins: {
            labels: {
                render: 'percentage',
                // position: 'border',
                precision: 1,
                showZero: true,
                fontSize: 20,
                fontColor: '#FFF',
                fontStyle: 'bold',
                fontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                showActualPercentages: true,
            }
        },
    },
};

var myChart = new Chart(
    document.getElementById('myChart'),
    config
);