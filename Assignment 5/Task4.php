<?php
$reqMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$dateTime = date('Y-m-d H:i:s',$_SERVER['REQUEST_TIME']) ?? '';
?>

<body>
    <h1><strong>Request Method</strong></h1>
    <h4>Request Method: <?php echo ($reqMethod); ?></h4>
    <h4>Request Time: <?php echo ($dateTime); ?> </h4>
    <form method=GET>
        <button>GET Method</button>
    </form>
    <form method=POST>
        <button>POST Method</button>
    </form>
</body>