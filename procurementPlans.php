<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Procurement Plan</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #144276;
      color: white;
      padding: 3rem 2rem;
      text-align: center;
    }

    header h1 {
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 0.75rem;
    }

    header p {
      font-size: 1rem;
      max-width: 700px;
      margin: 0 auto;
    }

    main {
      padding: 3rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
      overflow-x: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 800px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px 15px;
      text-align: left;
    }

    th {
      background-color: #144276;
      color: white;
      font-weight: 600;
    }

    tr:hover {
      background-color: #f1f5f9;
    }
  </style>
</head>
<body>
<?php include 'includes/header.php';?>
  <header>
    <h1>Procurement Plan</h1>
    <p>Overview of the procurement plan for the Regional Climate Resilience Programme (RCRP-2).</p>
  </header>

  <main>
    <table>
      <thead>
        <tr>
          <th>Item Description</th>
          <th>Procurement Method</th>
          <th>Estimated Cost (USD)</th>
          <th>Planned Procurement Date</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Climate Resilience Infrastructure Upgrade</td>
          <td>Open Tender</td>
          <td>1,200,000</td>
          <td>June 2024</td>
          <td>Priority project for 2024</td>
        </tr>
        <tr>
          <td>Solar Water Pump Installation</td>
          <td>Request for Proposal</td>
          <td>350,000</td>
          <td>July 2024</td>
          <td>Focus on rural areas</td>
        </tr>
        <tr>
          <td>Flood Mitigation Equipment</td>
          <td>Direct Procurement</td>
          <td>500,000</td>
          <td>August 2024</td>
          <td>Emergency response supplies</td>
        </tr>
        <tr>
          <td>Sustainable Agriculture Training Materials</td>
          <td>Shopping</td>
          <td>150,000</td>
          <td>September 2024</td>
          <td>For farmer training programs</td>
        </tr>
        <tr>
          <td>Community Engagement Workshops</td>
          <td>Request for Quotation</td>
          <td>100,000</td>
          <td>October 2024</td>
          <td>Local facilitators required</td>
        </tr>
      </tbody>
    </table>
  </main>
<?php include 'includes/footer.php';?>
</body>
</html>
