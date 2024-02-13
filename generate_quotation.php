<?php
require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Fetch form data
$userName = $_POST['userName'];
$facility = $_POST['facility'];
$amount = $_POST['amount'];
$otherDetails = $_POST['otherDetails'];

// Generate HTML for the quotation table
$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotation</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Quotation</h2>
    <table>
        <tr>
            <th>User Name</th>
            <td>' . $userName . '</td>
        </tr>
        <tr>
            <th>Facility</th>
            <td>' . $facility . '</td>
        </tr>
        <tr>
            <th>Amount (ZMW)</th>
            <td>' . $amount . '</td>
        </tr>
        <tr>
            <th>Other Details</th>
            <td>' . $otherDetails . '</td>
        </tr>
    </table>
</body>
</html>
';

// Initialize dompdf
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isPhpEnabled', true);
$dompdf = new Dompdf($options);

// Load HTML content
$dompdf->loadHtml($html);

// Set paper size (A4)
$dompdf->setPaper('A4', 'portrait');

// Render PDF (first pass to get total pages)
$dompdf->render();

// Output PDF
$dompdf->stream('quotation.pdf', ['Attachment' => 0]);
