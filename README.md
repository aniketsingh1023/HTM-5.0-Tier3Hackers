# Franchise Navigator

## Project Overview

Franchise Navigator is a robust platform designed to manage and scale small and medium-sized businesses (SMBs) with multiple locations. It provides real-time inventory tracking, sales monitoring, employee management, and revenue insights through a user-friendly dashboard.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Project Structure](#project-structure)
- [API Endpoints](#api-endpoints)
- [Database Schema](#database-schema)
- [Machine Learning Models](#machine-learning-models)
- [Contributing](#contributing)
- [License](#license)

## Features

- **Real-Time Inventory Tracking**: Syncs inventory levels with sales data automatically.
- **Sales Monitoring**: Comprehensive data on sales with real-time updates.
- **Employee Management**: Manage roles, permissions, and performance.
- **Revenue Insights**: Detailed revenue reports and visualizations.
- **Multi-Location Support**: Manage multiple store locations from a single platform.

## Technologies Used

- **Frontend**:
  - HTML
  - CSS
  - JavaScript
  - Tailwind CSS

- **Backend**:
  - PHP
  - CodeIgniter

- **Version Control**:
  - Git
  - GitHub

- **Machine Learning**:
  1. **Prediction Analysis Model**:
     - Libraries: Pandas, NumPy, Matplotlib, Seaborn, Plotly
  2. **Sentiment Analysis**:
     - Libraries: NLTK, Pandas, NumPy, Matplotlib, Seaborn, Plotly
     - Model: XGBoost

## Installation

### Prerequisites

- PHP (v7.x or later)
- Composer (for PHP dependencies)
- MySQL (v5.x or later)
- Node.js (for frontend dependencies)
- Python (for machine learning models)
- Docker (optional, for containerized setup)

### Steps

1. **Clone the Repository**:
    ```bash
    git clone https://github.com/yourusername/franchise-navigator.git
    cd franchise-navigator
    ```

2. **Install Backend Dependencies**:
    ```bash
    cd backend
    composer install
    ```

3. **Set Up Environment Variables**:
    Create a `.env` file in the backend directory with your database and application configurations:
    ```
    DB_HOST=localhost
    DB_USER=root
    DB_PASSWORD=your_password
    DB_NAME=franchise_navigator
    ```

4. **Set Up Frontend**:
    ```bash
    cd frontend
    npm install
    ```

5. **Run the Application**:
    - **Backend**:
      ```bash
      php -S localhost:8000 -t public
      ```
    - **Frontend**:
      ```bash
      npm start
      ```

6. **Optional: Docker Setup**:
    Build and run the Docker container:
    ```bash
    docker-compose up --build
    ```

## Usage

1. **Access the Application**:
    - Navigate to `http://localhost:3000` for the frontend.
    - Backend API is available at `http://localhost:8000/api`.

2. **Admin Dashboard**:
    - **Login**: Use admin credentials to access the dashboard.
    - **Features**: Manage inventory, sales data, and performance metrics.

## Project Structure

- **Frontend**:
  - `src/`: Contains the HTML, CSS, and JavaScript files.
  - `components/`: Reusable UI components styled with Tailwind CSS.

- **Backend**:
  - `controllers/`: PHP controllers managing API logic.
  - `models/`: PHP models interacting with the database.
  - `routes/`: PHP route definitions.

- **Machine Learning**:
  - `ml_models/`: Python scripts for prediction and sentiment analysis models.

- **Docker**:
  - `docker-compose.yml`: Docker configuration for development and production.

## API Endpoints

- **GET /api/inven
