<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    .navbar {
        background-color: #14342f;
        display: flex;
        justify-content: center;
        padding: 0;
        margin: 0;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 10;
    }

    .navbar a {
        flex: 1;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #997c54;
        color: black;
    }

    .content {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        z-index: 1;
        text-align: center;
        padding: 20px;
    }
        table {
            width: 50%;
            margin: 50px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .container {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="background"></div>

    <div class="navbar">
        <a href="dashboard.html">Home</a>
        <a href="services.html">Services</a>
        <a href="booking.html">Appointment</a>
        <a href="reviews.html">Reviews</a>
    </div>

    <br>
    <br>

    <center><h1>Booking Confirmation</h1></center>
    <div class="container">
        

        <?php
        // Capture form data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $service = htmlspecialchars($_POST['service']);
            $therapist = htmlspecialchars($_POST['therapist']);
            $date = htmlspecialchars($_POST['date']);
            $time = htmlspecialchars($_POST['time']);
            $payment = htmlspecialchars($_POST['payment']);
            $promoCode = htmlspecialchars($_POST['promoCode']);

            // Display the data in a table
            echo "<table>
                    <tr>
                        <th>Service</th>
                        <td>$service</td>
                    </tr>
                    <tr>
                        <th>Therapist</th>
                        <td>$therapist</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>$date</td>
                    </tr>
                    <tr>
                        <th>Time</th>
                        <td>$time</td>
                    </tr>
                    <tr>
                        <th>Payment Method</th>
                        <td>$payment</td>
                    </tr>
                    <tr>
                        <th>Promo Code</th>
                        <td>$promoCode</td>
                    </tr>
                  </table>";
        } else {
            echo "<p>No data received.</p>";
        }
        ?>

        <a href="dashboard.html" class="cta-button">Home</a>
        <a href="booking.html" class="cta-button">Edit Booking</a>
    </div>
</body>

</html>
