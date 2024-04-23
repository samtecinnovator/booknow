<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chat-online</title>
</head>

<body>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>
        /* Style for the chat icon */
        .chat-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            /* Blue color, you can change this */
            color: white;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 24px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 1000;
            /* Ensure it's above other elements */
        }

        /* Style for the iframe container */
        .iframe-container {
            /* position: fixed;
            bottom: 20px;
            right: 100px;
            /* Adjust position as needed */
            /* width: 300px; */
            /* Set iframe width */
            /* height: 400px; */
            /* Set iframe height */
            /* background-color: #fff; */
            /* Set background color */
            border: 1px solid #ccc;
            /* border-radius: 5px; */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
            display: none;
            /* Hide iframe initially */
            z-index: 9999;
            /* Ensure it's above other elements */
        }
        /* Style for closing button */
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style>
    <!-- Chat icon -->
    <div class="chat-icon" onclick="toggleIframe()">💬</div>

    <!-- Iframe container -->
    <div class="iframe-container" id="iframeContainer">
        <span class="close-btn" onclick="toggleIframe()">✖️</span>
        <iframe style="border: none;" height="600px" width="400px" src="https://widget.kommunicate.io/chat?appId=39132142509edf3ed14a857c3748d9a8e" allow="microphone; geolocation;">
        </iframe>
    </div>

    <script>
        // Function to toggle iframe visibility
        function toggleIframe() {
            var iframeContainer = document.getElementById("iframeContainer");
            if (iframeContainer.style.display === "none") {
                iframeContainer.style.display = "block";
            } else {
                iframeContainer.style.display = "none";
            }
        }
    </script>

</body>

</html>