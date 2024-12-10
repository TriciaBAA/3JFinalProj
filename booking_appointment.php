<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="styles.css">
    <style>
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
    <center><h1>Appointment Confirmation</h1></center>
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

        <a href="index.html" class="cta-button">Home</a>
        <a href="booking.html" class="cta-button">Edit Booking</a>
    </div>
</body>

</html>
