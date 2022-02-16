<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Email</title>
    </head>
    <link rel="stylesheet" href="css/app.css" />
    <style>
        body {
            text-align: center;
            font-family: Cormorant;
        }
        h1 {
            font-size: 56px;
        }
        h2 {
            font-size: 30px;
        }
        h3 {
            font-size: 12px;
        }
        h4 {
            font-size: 26px;
            font-family: Poppins;
            font-weight: 700;
            color: #f8f3f1;
        }
        .email-container {
            width: 1000px;
            padding: 50px;
            background-color: #f8f3f1;
            margin: auto;
        }
        .email-footer {
            background-color: #36393b;
            color: #f8f3f1;
            font-family: Poppins;
            padding: 25px;
        }
        .img-fluid {
            width: clamp(250px, 50%, 500px);
        }
        .img-building {
            width: clamp(500px, 100%, 900px);
        }
        .text-left {
            text-align: left;
        }

        .font-secondary {
            font-family: Poppins;
            font-weight: 300;
            font-size: 16px;
        }
        .img-building2 {
            width: clamp(230px, 95%, 280px);
        }
        .container-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            display: grid;
            align-content: center;
        }
        a {
            text-decoration: underline;
        }
    </style>
    <body>
        <div class="email-container">
            <div class="card">
                <div class="email-header">
                    <img
                        src="https://bielanypark.pl/images/logos/Logo_grey.svg"
                        alt=""
                        class="img-fluid"
                        width="250px"
                        height="auto"
                    />
                </div>

                <div class="email-body">
                    <h1>Poznaj nową ikonę Legnicy</h1>
                    <img
                        src="https://bielanypark.pl/images/building/back.jpg"
                        alt=""
                        class="img-building"
                        width="900px"
                        height="auto"
                    />
                </div>
                <div class="container mt-5 pt-5 mb-2" style="margin: auto">
                    <div class="row">
                        <div class="col-md-3 text-left">
                            <h3>KAMERALNY I LUKSUSOWY</h3>
                            <h2>
                                Zapoznaj się <br />z premierową <br />inwestycją
                            </h2>
                        </div>
                        <div class="col-md-5 text-left font-secondary">
                            <ul>
                                <li>15 lokali do wynajęcia</li>
                                <li>od 30 do 86m²</li>
                                <li>przystosowane do każdego biznesu</li>
                                <li>2 kondygnacje</li>
                                <li>łącznie 4000m2</li>
                                <li>Zaraz przy głównej ulicy</li>
                                <li>Winda przy głównym wejściu</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <img
                                src="https://bielanypark.pl/images/building/side_close.jpg"
                                alt=""
                                class="img-building2"
                                width="280px"
                                height="auto"
                            />
                        </div>
                    </div>
                </div>
                <div class="email-footer mt-5">
                    <h4>
                        Sprzedaż już się zaczęła, nie przegap<br />
                        okazji i skontaktuj się z nami!
                    </h4>
                    <p>
                        Więcej na
                        <a
                            href="bielanypark.pl"
                            target="_blank"
                            rel="noopener noreferrer"
                            >bielanypark.pl</a
                        >
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
