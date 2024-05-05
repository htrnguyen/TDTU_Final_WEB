// Get the canvas element
var ctx = document.getElementById('linechart').getContext('2d');
var ctx_circle = document.getElementById('circlechart').getContext('2d');
var ctx_bar = document.getElementById('barchart').getContext('2d');


var trackingData = [100, 150, 200, 250, 300, 200, 150]; // Dữ liệu mẫu: Số lượng truy cập cho từng ngày từ thứ hai đến chủ nhật
var myBarChart = new Chart(ctx_bar, {
    type: 'bar',
    data: {
        labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
        datasets: [{
            label: 'Visitors',
            data: trackingData,
            backgroundColor: '#87A922',
            borderColor: '#BFEA7C',
            borderWidth: 1
        }]
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


var myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Activity',
            data: [100, 200, 150, 300, 250, 400, 350],
            backgroundColor: '#BFEA7C', // Fill color
            borderColor: '#114232', // Line color
            borderWidth: 1
        }]
    },
    options: {
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
    }
});

var myCircleChart = new Chart(ctx_circle, {
    type: 'doughnut',
    data: {
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
    },
    options: {
        responsive: false,
        maintainAspectRatio: false,
    }
});
