<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>Booking Studio</title>
    </head>
    <body>
        <div class="studio-container">
            <h2>Pilih Studio</h2>
            <select id="studio"style="width: 100px">
                <option value="1">Tema 1</option>
                <option value="2">Tema 2</option>
                <option value="3">Tema 3</option>
                <option value="4">Tema 4</option>
            </select>
        </div>

        <ul class="showcase">
            <li>
                <div class="seat"></div>
                <small>Available</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat booked"></div>
                <small>Booked</small>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="seat">07:00</div>
                <div class="seat">08:00</div>
                <div class="seat">09:00</div>
                <div class="seat">10:00</div>
            </div>

            <div class="row">
                <div class="seat">11:00</div>
                <div class="seat">12:00</div>
                <div class="seat">13:00</div>
                <div class="seat">14:00</div>

            </div>
            <div class="row">
                <div class="seat booked">15:00</div>
                <div class="seat booked">16:00</div>
                <div class="seat">17:00</div>
                <div class="seat">18:00</div>
            </div>
            <div class="row">
                <div class="seat">19:00</div>
                <div class="seat">20:00</div>
                <div class="seat booked">21:00</div>
                <div class="seat booked">22:00</div>
            </div>
        </div>

        <p class="text" style="color:white">
            You have selected <span id="count">0</span>
        </p>
        <script src="script.js"></script>
    </body>
</html>