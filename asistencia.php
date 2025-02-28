<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escáner de QR</title>
    <style>
        #video-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        #qr-result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="video-container">
        <video id="qr-video" width="300" height="300" autoplay></video>
    </div>
    <div id="qr-result"></div>

    <script src="https://rawgit.com/sitepoint-editors/jsqrcode/master/src/qr_packed.js"></script>
    <script>
        const video = document.getElementById('qr-video');
        const qrResult = document.getElementById('qr-result');

        navigator.mediaDevices.getUserMedia({ video: { facingMode: 'environment' } })
            .then(stream => {
                video.srcObject = stream;
                video.setAttribute('playsinline', true);
                video.play();
                requestAnimationFrame(tick);
            })
            .catch(err => {
                console.error('Error al acceder a la cámara', err);
            });

        function tick() {
            videoElement = document.getElementById("qr-video");
            canvasElement = document.createElement("canvas");
            canvas = canvasElement.getContext("2d");
            canvasElement.width = videoElement.videoWidth;
            canvasElement.height = videoElement.videoHeight;
            canvas.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);
            imageData = canvas.getImageData(0, 0, canvasElement.width, canvasElement.height);
            code = jsQR(imageData.data, imageData.width, imageData.height, {
                inversionAttempts: "dontInvert",
            });
            if (code) {
                qrResult.textContent = code.data;
                fetch('procesar.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ data: code.data }),
                })
                .then(response => response.text())
                .then(result => {
                    qrResult.textContent = `Resultado del QR: ${result}`;
                })
                .catch(error => {
                    console.error('Error al procesar el QR', error);
                    qrResult.textContent = 'Error al procesar el QR';
                });
            }
            requestAnimationFrame(tick);
        }
    </script>
</body>
</html>
