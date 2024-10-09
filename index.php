<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3D skrivaren</title>
    <style>
        body {
            display: flex;
            justify-content: center;  /* Centers the content horizontally */
            align-items: center;      /* Centers the content vertically */
            height: 100vh;           /* Makes the body full height of the viewport */
            margin: 0;               /* Removes default margin */
            background-color: #f0f0f0; /* Optional: Adds a light background color */
            position: relative;       /* Enables absolute positioning of child elements */
        }
        #stream-container {
            position: relative;       /* Allows absolute positioning of text within the stream container */
        }
        img {
            max-width: 100%;         /* Ensures the image fits within the viewport */
            height: auto;            /* Maintains aspect ratio */
            display: block;          /* Removes bottom whitespace */
        }
        .overlay {
            position: absolute;       /* Position the text relative to the stream container */
            top: 10px;               /* Adjusts the distance from the top */
            left: 50%;               /* Centers the text horizontally */
            transform: translateX(-50%); /* Adjusts position to perfectly center the text */
            color: white;            /* Text color */
            font-size: 2em;          /* Text size */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Adds shadow for better visibility */
        }
    </style>
</head>
<body>
    <div id="stream-container">
        <h1 class="overlay">3D skrivaren:</h1>
        <img src="http://raspberrypi.local:8080/?action=stream" alt="Live Stream">
    </div>
</body>
</html>
