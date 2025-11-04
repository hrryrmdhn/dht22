<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container py-5">
        <h1 class="text-center mb-3">Monitoring Dht22 Sensoring</h1>
        <div class="row justify-content-center">
            <div class="card col-3">
                <div class="card-body">
                    <h5>Temperatur</h5>
                    <p><span id="temperature"> °C</span></p>
                </div>
            </div>
            <div class="card col-3">
                <div class="card-body">
                    <h5>Humidity</h5>
                    <p><span id="humidity"> %</span></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            function getData() {
                $.ajax({
                    type: "GET",
                    url: "/get-data",
                    success: function (response) {
                        console.log(response);
                    }
                });
            }

            setInterval(() => {
                getData();
            }, 1500);

        });
    </script>
    
  </body>
</html>