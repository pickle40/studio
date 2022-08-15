<!DOCTYPE html>
<html>
    <head>
        <title>Booking Studio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>
            * {
                box-sizing: border-box;
            }

            body {
                color: #fff;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                margin: 0;
            }
        </style>

        <!-- custom CSS -->
        <link rel="stylesheet" href="style1.css">
        <!-- custom CSS -->

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <!-- Untuk table -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color: #242333;">
        <div class="d-flex flex-column justify-content-center align-items-center" style="margin-bottom: 10px">
            <h2 style="color:white">Pilih Studio</h2>
            <div class="row" style="margin-top:15px">
                <div class="col">
                    <div class="form-group">
                        <input type="date" class="form-control" id="date" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <select class="form-control" id="studio">
                            <option value="1">Tema 1</option>
                            <option value="2">Tema 2</option>
                            <option value="3">Tema 3</option>
                            <option value="4">Tema 4</option>
                        </select>
                    </div>
                </div>
                
            </div>
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
            <div class="d-flex flex-column justify-content-center align-items-center">
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
        </div>

        <p class="text" style="color:white">
            You have selected <span id="count">0</span>
        </p>

        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-danger" onclick="location.href='transaksi.php'">Kembali</button>
                </div>
                <div class="col">
                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#modalconfirm">Order Studio</button>
                </div>
            </div>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="modalconfirm">
            <div class="modal-dialog">
                <div class="modal-content">
                                            
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Order Ruangan</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                                                
                    <!-- Modal body -->
                    <div class="modal-body">
                        Apakah anda yakin ingin menyimpan?
                    </div>
                                                
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-success" id="btnOrder" data-dismiss="modal" onclick="location.href='transaksi.php'">Simpan</button>
                    </div>
                                            
                </div>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>