<?php include('include/header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transforming Panels</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .panel {
            display: none;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ccc;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .panel.active {
            display: block;
        }

        .button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div id="panel1" class="panel active">
        <h2>Panel 1</h2>
        <p>This is the first panel. Press the button below to switch to the next panel.</p>
        <button class="button" onclick="switchPanel(2)">Go to Panel 2</button>
    </div>

    <div id="panel2" class="panel">
        <h2>Panel 2</h2>
        <p>This is the second panel. Press the button below to switch back to the first panel.</p>
        <button class="button" onclick="switchPanel(1)">Go to Panel 1</button>
    </div>

    <script>
        // Function to switch between panels
        function switchPanel(panelNumber) {
            // Hide all panels
            var panels = document.querySelectorAll('.panel');
            panels.forEach(function(panel) {
                panel.classList.remove('active');
            });

            // Show the target panel
            var targetPanel = document.getElementById('panel' + panelNumber);
            targetPanel.classList.add('active');
        }
    </script>

</body>
</html>
