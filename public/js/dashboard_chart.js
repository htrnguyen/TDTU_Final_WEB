// Get the canvas element
var ctx = document.getElementById('linechart').getContext('2d');
var ctx_circle = document.getElementById('circlechart').getContext('2d');

// Define the data for the chart
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [{
        label: 'Activity',
        data: [100, 200, 150, 300, 250, 400, 350],
        backgroundColor: '#BFEA7C', // Fill color
        borderColor:  '#114232', // Line color
        borderWidth: 1
    }]
};

// define data for circle chart
var data_circle = {
    labels: ['Profit', 'Cost'],
    datasets: [{
        label: 'My Dataset',
        data: [12, 19],
        backgroundColor: [
            '#9BCF53', // Xanh lá cây nhạt
            '#416D19', // Xanh lá cây
        ],
        borderColor: [
            '#9BCF53', // Xanh lá cây
            '#416D19', // Xanh lá cây nhạt
        ],
        borderWidth: 1
    }]
};

// Define chart options
var options = {
    scales: {
        y: {
            beginAtZero: true,
            ticks: {
                font: {
                    size: 12, // Kích thước font chữ
                    family: 'Montserrat' // Font chữ
                },
                color: 'green' // Màu của nhãn
            }
        }
    }
};

var options_circle = {
    responsive: false,
    maintainAspectRatio: false,
};

// Create the line chart
var myLineChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
});

var myCircleChart = new Chart(ctx_circle, {
    type: 'doughnut',
    data: data_circle,
    options: options_circle
});
