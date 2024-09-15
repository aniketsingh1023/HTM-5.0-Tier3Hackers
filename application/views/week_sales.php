<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7-Day Sales Report</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        /* Dark Theme Styling */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #121212;
            color: #e0e0e0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #FFD700;
            font-size: 36px;
            font-weight: bold;
        }

        /* Table Styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
            background-color: #1e1e1e;
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #333;
            text-align: center;
            color: #fff;
        }

        th {
            background-color: #FFD700;
            color: #000;
        }

        tbody tr:nth-child(even) {
            background-color: #2b2b2b;
        }

        tfoot {
            background-color: #FFD700;
            color: #000;
        }

        tfoot td {
            font-weight: bold;
        }

        /* Chart Containers */
        .charts-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .chart-box {
            background-color: #1e1e1e;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 48%;
        }

        canvas {
            max-width: 100%;
        }

        /* Button Style */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #FFD700;
            color: #000;
            font-weight: bold;
            text-decoration: none;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn:hover {
            background-color: #ffcc00;
        }

        /* Scrollbar Styling */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background-color: #1e1e1e;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #FFD700;
            border-radius: 4px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .charts-container {
                flex-direction: column;
                gap: 30px;
            }

            .chart-box {
                width: 100%;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <h1><i class="fas fa-chart-line"></i> 7-Day Sales Report</h1>

        <table>
            <thead>
                <tr>
                    <th>Day</th>
                    <th>Total Sales ($)</th>
                    <th>Units Sold</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Day 1</td>
                    <td>14,300</td>
                    <td>500</td>
                </tr>
                <tr>
                    <td>Day 2</td>
                    <td>12,500</td>
                    <td>470</td>
                </tr>
                <tr>
                    <td>Day 3</td>
                    <td>13,200</td>
                    <td>490</td>
                </tr>
                <tr>
                    <td>Day 4</td>
                    <td>15,500</td>
                    <td>520</td>
                </tr>
                <tr>
                    <td>Day 5</td>
                    <td>16,800</td>
                    <td>550</td>
                </tr>
                <tr>
                    <td>Day 6</td>
                    <td>14,200</td>
                    <td>510</td>
                </tr>
                <tr>
                    <td>Day 7</td>
                    <td>12,800</td>
                    <td>480</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td>99,300</td>
                    <td>3,520</td>
                </tr>
            </tfoot>
        </table>

        <!-- Charts Section -->
        <div class="charts-container">
            <div class="chart-box">
                <canvas id="salesChart"></canvas>
            </div>
            <div class="chart-box pie-box">
                <canvas id="salesPieChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        // Sales data for 7 days
        const labels = ['Day 1', 'Day 2', 'Day 3', 'Day 4', 'Day 5', 'Day 6', 'Day 7'];
        const salesData = [14300, 12500, 13200, 15500, 16800, 14200, 12800];

        // Line Chart for Sales Over Time
        const ctxLine = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Sales ($)',
                    data: salesData,
                    borderColor: '#FFD700',
                    backgroundColor: 'rgba(255, 215, 0, 0.3)',
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#FFD700'
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        grid: {
                            color: '#444'
                        },
                        ticks: {
                            color: '#FFD700'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: '#444'
                        },
                        ticks: {
                            color: '#FFD700'
                        }
                    }
                }
            }
        });

        // Pie Chart for Sales Proportions
        const ctxPie = document.getElementById('salesPieChart').getContext('2d');
        const salesPieChart = new Chart(ctxPie, {
            type: 'pie',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sales Proportion',
                    data: salesData,
                    backgroundColor: [
                        '#FF8C00',
                        '#FFD700',
                        '#FF4500',
                        '#FFA500',
                        '#DAA520',
                        '#FF6347',
                        '#FFA07A'
                    ],
                    borderColor: '#000',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: '#FFD700'
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>
