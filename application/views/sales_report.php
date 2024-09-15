<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Report</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Dark Theme Styles */
        body {
            background-color: #121212;
            color: #f5f5f5;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            background-color: #1e1e1e;
            border-radius: 12px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.7);
        }

        h2 {
            color: #ffcc00;
            font-weight: bold;
        }

        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
            margin-bottom: 30px;
        }

        /* Button Styling */
        .btn-go-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            color: #fff;
            background-color: #ffcc00;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-go-back:hover {
            background-color: #e0a800;
        }

        /* Custom Chart Styling */
        canvas {
            background-color: #1e1e1e;
            border-radius: 8px;
        }

        .chart-title {
            text-align: center;
            color: #ffcc00;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Sales Report</h2>
        
        <!-- Charts -->
        <div class="row">
            <div class="col-md-6">
                <h4 class="chart-title">Units Sold (Bar Chart)</h4>
                <div class="chart-container">
                    <canvas id="salesBarChart"></canvas>
                </div>
            </div>
            <div class="col-md-6">
                <h4 class="chart-title">Sales Distribution (Doughnut Chart)</h4>
                <div class="chart-container">
                    <canvas id="salesDoughnutChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Go Back Button -->
        <div class="text-center">
            <a href="products" class="btn-go-back">Go Back</a>
        </div>
    </div>

    <script>
        // Prepare data for the charts
        const labels = <?php echo json_encode(array_column($sales_data, 'product')); ?>;
        const data = <?php echo json_encode(array_column($sales_data, 'units_sold')); ?>;

        const barColors = ['#FF6384', '#36A2EB', '#FFCE56', '#FF9F40', '#4BC0C0', '#9966FF', '#FFABAB'];
        const doughnutColors = barColors.slice(0, labels.length); // Ensure colors match number of segments

        // Create Bar Chart
        const barCtx = document.getElementById('salesBarChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Units Sold',
                    data: data,
                    backgroundColor: barColors,
                    borderColor: barColors.map(color => darkenColor(color)),
                    borderWidth: 2,
                    borderRadius: 8
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffcc00', // Label text color
                        },
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.dataset.label}: ${tooltipItem.raw}`;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: {
                            color: '#ffcc00', // X axis tick color
                        },
                        grid: {
                            color: '#3a3a3a' // X axis grid color
                        }
                    },
                    y: {
                        ticks: {
                            color: '#ffcc00', // Y axis tick color
                            callback: function(value) {
                                return value.toLocaleString();
                            }
                        },
                        grid: {
                            color: '#3a3a3a' // Y axis grid color
                        }
                    }
                }
            }
        });

        // Create Doughnut Chart
        const doughnutCtx = document.getElementById('salesDoughnutChart').getContext('2d');
        new Chart(doughnutCtx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales Distribution',
                    data: data,
                    backgroundColor: doughnutColors,
                    borderColor: '#121212',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            color: '#ffcc00', // Legend label color
                        },
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return `${tooltipItem.label}: ${tooltipItem.raw}`;
                            }
                        }
                    }
                }
            }
        });

        // Function to darken color for borders
        function darkenColor(color) {
            let r = parseInt(color.slice(1, 3), 16);
            let g = parseInt(color.slice(3, 5), 16);
            let b = parseInt(color.slice(5, 7), 16);

            r = Math.max(0, r - 30);
            g = Math.max(0, g - 30);
            b = Math.max(0, b - 30);

            return `rgb(${r}, ${g}, ${b})`;
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
