<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>KAFFEiROLLSBO</title>
    <!-- Denali CSS & Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-icon-font/dist/denali-icon-font.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/denali-css/css/denali.css">
  </head>
    <body style="background-image: url(./../bg.jpg); background-size: cover;">
        <nav class="nav">
            <div class="nav-left">
                <h3 style="position: absolute; color: rgba(255, 255, 255, 1.0); top: 50%; transform: translateY(-50%); width: 0px;"><i>KAFFEiROLLSBO.SE</i></h3>
                 <span class="nav-item" style="padding-left: 230px;"><i class="d-icon d-information-circle"></i></span>
            </div>
            <div class="nav-right nav-responive is-active">
               
            </div>
        </nav>
        
                            <p style="color: rgba(0, 0, 0, 0.0);">_</p>
    <div class="container">
        <div class="row p-10 br-4">
            <div class="col p-10 br-4" style="background-color: #002B66">
                <div class="row p-10 br-4">
                    <div class="col p-10 br-4">
                        <div class="input">
                            <h1 style="color: white"><i>MINA SIDOR</i></h1>
                            
                            <p style="color: rgba(0, 0, 0, 0.0);">_</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row p-10 br-4">
            <div class="col p-10 br-4" style="background-color: #002B66">
                <div class="row p-10">
                    <div class="col p-10">
                        <h1 style="color: white"><i>KUPONG:</i></h1>
                        <h3 style="color: white"><i>NAMN: JEPPE GUSTAFSSON</i></h3>
                        <h3 style="color: white"><i>OMRÅDE: ROLLSBO</i></h3>
                        <div style="height: 20px;"><svg id="barcode1"></svg></div>
                    </div>
                </div>
                <div class="row p-10 br-4">
                    <div class="col p-10 br-4">
                        <div class="input">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="JsBarcode.all.min.js"></script>
    <script>
        JsBarcode("#barcode1", "1234567867812345678678", {
            format: "codabar",
            lineColor: "#ffffff",
            background: "#002B66",
            width: 1,
            height: 40,
            displayValue: false,
            textmargin: 0,
            fontOptions: "bold"
        });
        JsBarcode("#barcode2", "12345678678", {
            format: "codabar",
            lineColor: "#ffffff",
            background: "#002B66",
            width: 1,
            height: 40,
            displayValue: false,
            textmargin: 0,
            fontOptions: "bold"
        });
    </script>
    </body>
</html>
