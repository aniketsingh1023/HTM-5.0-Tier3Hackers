<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sentiment Analysis - Data Analytics</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background-color: #222;
            color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Prevent scrolling */
        }

        h1 {
            font-size: 2.5rem;
            margin: 20px 0;
            text-align: center;
            color: #f9a825; /* Bright yellow color for emphasis */
        }

        .container {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 columns for larger cards */
            grid-gap: 20px;
            padding: 20px;
            width: 100vw;
            height: calc(100vh - 90px); /* Subtract heading height */
            overflow: auto; /* Allow scrolling if content overflows */
        }

        .card {
            background-color: #333;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer; /* Show pointer cursor on hover */
            transition: transform 0.3s; /* Smooth scaling effect */
        }

        .card:hover {
            transform: scale(1.05); /* Slight zoom effect on hover */
        }

        .chart {
            width: 100%;
            height: 250px; /* Increased height for better visibility */
            object-fit: cover;
            border-radius: 15px;
        }

        /* Modal Styles */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.8); /* Black background with opacity */
        }

        .modal-content {
            margin: 15% auto;
            padding: 20px;
            width: 80%;
            max-width: 700px;
            background-color: #333;
            border-radius: 15px;
            text-align: center;
        }

        .modal-content img {
            width: 100%;
            height: auto;
        }

        .close {
            color: #f0f0f0;
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #f9a825;
        }
    </style>
</head>
<body>

    <!-- Page heading -->
    <h1>Sentiment Analysis</h1>

    <!-- Container holding the images -->
    <div class="container">
        <!-- Word Cloud -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image1.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image1.png?raw=true" alt="Word Cloud">
        </div>

        <!-- Bar Graph -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image2.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image2.png?raw=true" alt="Bar Graph">
        </div>

        <!-- Pie Chart -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image3.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image3.png?raw=true" alt="Pie Chart">
        </div>

        <!-- Scatter Plot -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image4.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image4.png?raw=true" alt="Scatter Plot">
        </div>

        <!-- Another Bar Graph -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image5.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image5.png?raw=true" alt="Bar Graph">
        </div>

        <!-- Another Pie Chart -->
        <div class="card" onclick="openModal('https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image6.png?raw=true')">
            <img class="chart" src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/sentiment%20analysis/statics/sentiment%20analysis%20images/image6.png?raw=true" alt="Pie Chart">
        </div>
    </div>

    <!-- Modal Structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <img id="modalImage" src="" alt="Enlarged Image">
        </div>
    </div>

    <script>
        function openModal(imageSrc) {
            var modal = document.getElementById("myModal");
            var modalImage = document.getElementById("modalImage");
            var span = document.getElementsByClassName("close")[0];

            modal.style.display = "block";
            modalImage.src = imageSrc;

            span.onclick = function() {
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        }
    </script>

</body>
</html>
