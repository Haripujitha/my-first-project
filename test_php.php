<?php
// Define the path to the 3D model
$modelPath = "stylized_flying_bee_bird_rigged.glb";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D Model Viewer</title>
    <script type="module" src="https://unpkg.com/@google/model-viewer@latest"></script>
    <style>
        model-viewer {
            width: 100%;
            height: 500px;
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>

    <h2>Product 3D View</h2>
    
    <!-- Display the 3D model -->
    <model-viewer 
        src="<?php echo $modelPath; ?>" 
        alt="3D Model of Product" 
        auto-rotate 
        camera-controls 
        ar>
    </model-viewer>

</body>
</html>