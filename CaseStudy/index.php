<!DOCTYPE html>
<html>

<head>
  <title>Case Studies</title>
  <link rel="stylesheet" ty href="style.css">
</head>

<body>

  <?php
  $caseStudies = [
    [
      "title" => "Logistics Automation",
      "client" => "TransPortX",
      "industry" => "Logistics",
      "download" => "downloads/transportx.pdf"
    ],
    [
      "title" => "SaaS CRM Integration",
      "client" => "CloudNova",
      "industry" => "Software",
      "download" => "downloads/cloudnova.pdf"
    ],
    [
      "title" => " E-commerce Revamp",
      "client" => "CloudNova",
      "industry" => "Software",
      "download" => "downloads/cloudnova.pdf"
    ],
    [
      "title"=> "Healthcare",
      "client"=> "MediSys",
      "industry"=> "Healthcare",
      "download"=> "downloads/medisys.pdf"
  ]
  ];
  ?>

  <h1>Case Studies</h1>
  <div class="card-container">
    <?php foreach ($caseStudies as $study): ?>
      <div class="card">
        <h3><?= htmlspecialchars($study['title']) ?></h3>
        <p><strong>Client:</strong> <?= htmlspecialchars($study['client']) ?></p>
        <p><strong>Industry:</strong> <?= htmlspecialchars($study['industry']) ?></p>
        <a  class="dn" href="<?= htmlspecialchars($study['download']) ?>" target="_blank">Download</a>
      </div>
    <?php endforeach; ?>
  </div>

</body>

</html>