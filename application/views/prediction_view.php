<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Prediction</title>
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
            overflow: auto;
        }

        h1 {
            text-align: center;
            font-size: 2rem;
            margin: 10px 0;
            color: #f0f0f0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 20px;
        }

        .card {
            background-color: #333;
            border-radius: 15px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 15px;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .card img:hover {
            transform: scale(1.1);
        }

        .card h3 {
            margin-top: 10px;
            font-size: 1.2rem;
            color: #f0f0f0;
        }

        .card p {
            margin-top: 5px;
            font-size: 0.9rem;
            color: #ccc;
        }

        /* Modal Styling */
        .modal {
            display: none; /* Hidden by default */
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, 0.9); /* Black background with opacity */
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            border-radius: 10px;
        }

        .modal-content img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .modal-content img:hover {
            transform: scale(1.05);
        }

        /* Close button */
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 35px;
            font-weight: bold;
            transition: 0.3s;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* Additional Information Cards */
        .info-card {
            background-color: #1f1f1f;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .info-card:hover {
            transform: translateY(-10px);
        }

        .info-card h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #00adb5;
            margin-bottom: 10px;
        }

        .info-card p {
            font-size: 1rem;
            color: #ccc;
        }
    </style>
</head>
<body>
    <h1>Sales Prediction</h1>

    <div class="container">
        <div class="grid">
            <!-- Card 1 -->
            <div class="card" onclick="openModal('modal1')">
                <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image1.png?raw=true" alt="Graph 1">
                <h3>Prediction 1</h3>
                <p>This is a sample prediction for graph 1.</p>
            </div>

            <!-- Modal 1 -->
            <div id="modal1" class="modal">
                <span class="close" onclick="closeModal('modal1')">&times;</span>
                <div class="modal-content">
                    <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image1.png?raw=true" alt="Graph 1">
                </div>
            </div>

            <!-- Card 2 -->
            <div class="card" onclick="openModal('modal2')">
                <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image2.png?raw=true" alt="Graph 2">
                <h3>Prediction 2</h3>
                <p>This is a sample prediction for graph 2.</p>
            </div>

            <!-- Modal 2 -->
            <div id="modal2" class="modal">
                <span class="close" onclick="closeModal('modal2')">&times;</span>
                <div class="modal-content">
                    <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image2.png?raw=true" alt="Graph 2">
                </div>
            </div>

            <!-- Card 3 -->
            <div class="card" onclick="openModal('modal3')">
                <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image3.png?raw=true" alt="Graph 3">
                <h3>Prediction 3</h3>
                <p>This is a sample prediction for graph 3.</p>
            </div>

            <!-- Modal 3 -->
            <div id="modal3" class="modal">
                <span class="close" onclick="closeModal('modal3')">&times;</span>
                <div class="modal-content">
                    <img src="https://github.com/aniketsingh1023/HTM-5.0-Tier3Hackers/blob/main/HTM%205.0%20/button%20redirection%20pages%20/predictions%20landing%20page%20button/static/prediction%20analysis%20images/image3.png?raw=true" alt="Graph 3">
                </div>
            </div>

            <!-- Additional Information Cards -->
            <div class="info-card">
                <h4>Q1: What is the average rating for each product category?</h4>
                <p>Most product categories have positive feedback, with ratings above 3.50. Categories 2 and 3 have lower ratings, indicating potential improvement areas.</p>
            </div>

            <div class="info-card">
                <h4>Q2: What are the top rating_count products by category?</h4>
                <p>High review counts indicate popularity and customer interest. Most products with high reviews have ratings above 3.5, with review counts ranging from 9 to 15,867.</p>
            </div>

            <div class="info-card">
                <h4>Q3: What is the relationship between the discounted price and actual price?</h4>
                <p>The median discounted price is $200, and the actual price is around $400. Most discounts are 30% or less, reflecting the competition in pricing strategies.</p>
            </div>

            <div class="info-card">
                <h4>Q4: How does the average discount percentage vary across categories?</h4>
                <p>Average discount percentages vary widely across categories, ranging from 0% to 78.39%.
- Categories 1 and 3 stand out with notably higher average discounts (78.39% and 56.34%), suggesting potential factors like clearance efforts, high competition, or lower-profit margins.
- Categories 0, 206, 207, 210 have average discounts of 0%, indicating consistent pricing or strong demand for products within those categories.
- Other categories exhibit varying discount percentages, likely reflecting diverse pricing strategies and market dynamics..</p>
            </div>

            <div class="info-card">
                <h4>Q5: What are the most popular product name?</h4>
                <p>Fire-Boltt Ninja Call Pro Plus Smart Watch is the most popular product, followed by Fire-Boltt Phoenix Smart Watch.
- Smart Watches and Charging Cables are the most popular product categories.
- Multiple brands are represented, with boAt appearing twice.
- Fast charging, durability, and functionality are key features.
- Popularity is relatively evenly distributed beyond the leading product.
</p>
            </div>

            <div class="info-card">
                <h4>Q6:  What are the most popular product keywords?</h4>
                <p>- USB connectivity, charging (especially fast charging), and cables are prominent product features.
- Prepositions and conjunctions like "with", "for", "and", "to" suggest a focus on explaining product compatibility and usage scenarios.
- Cables and smart devices are likely well-represented in the dataset.
- Product names tend to be concise and use common words, potentially benefiting from refined keyword extraction techniques.
</p>
            </div>



        </div>
    </div>

    <script>
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }
    </script>

</body>
</html>
