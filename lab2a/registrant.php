<?php
$csvFilePath = 'registrations.csv';

if (!file_exists($csvFilePath)) {
    die('File not found');
}

$file = fopen($csvFilePath, 'r');

$data = [];
while (($row = fgetcsv($file)) !== false) {
    $data[] = $row;
}

fclose($file);

if (empty($data)) {
    echo 'No data available';
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrants List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            color: #333;
        }

        .hero-section {
            padding: 50px 20px;
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .hero-section h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .content-section {
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            margin-top: 20px;
            font-size: 1rem;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<section class="hero-section">
    <div class="container">
        <h1>Registrants List</h1>
    </div>
</section>

<section class="content-section">
    <div class="container">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Complete Name</th>
                    <th>Birthday</th>
                    <th>Age</th>
                    <th>Contact Number</th>
                    <th>Sex</th>
                    <th>Program</th>
                    <th>Complete Address</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($data as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row[0]); ?></td>
                    <td><?php echo htmlspecialchars($row[1]); ?></td>
                    <td><?php echo htmlspecialchars($row[2]); ?></td>
                    <td><?php echo htmlspecialchars($row[3]); ?></td>
                    <td><?php echo htmlspecialchars($row[4]); ?></td>
                    <td><?php echo htmlspecialchars($row[5]); ?></td>
                    <td><?php echo htmlspecialchars($row[6]); ?></td>
                    <td><?php echo htmlspecialchars($row[7]); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>