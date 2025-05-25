<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Order Confirmation</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: linear-gradient(135deg,rgb(173, 253, 212) 0%, #faffd1 100%);
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      --font-family: 'Serif', 'sans-serif', 'Fantasy';
    }

    .confirmation-card {
      background-color: white;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      text-align: center;
      max-width: 400px;
      width: 90%;
    }

    .confirmation-card img {
      width: 120px;
      height: 120px;
      margin-bottom: 20px;
    }

    .confirmation-card h1 {
      font-size: 24px;
      color: #28a745;
      margin-bottom: 10px;
    }

    .confirmation-card p {
      font-size: 16px;
      color: #555;
      margin-bottom: 30px;
    }

    .confirmation-card a {
      text-decoration: none;
      background-color: #28a745;
      color: white;
      padding: 12px 24px;
      border-radius: 8px;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .confirmation-card a:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>

  <div class="confirmation-card">
    <img src="images/done.png" alt="Order Complete">
    <h1>Order Confirmed!</h1>
    <p>Thank you for your purchase.
      <br> Your order has been placed successfully. ✅</p>
    <a href="index.php">Back to Home</a>
  </div>

</body>
</html>
