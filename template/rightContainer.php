<div class="right-content">
    <div class="countbloods">
        <H1>Available bloods</H1>
        <p><i class="bi bi-moisture" style="">a+ 25</i><b> b+ 50</b> ab+ 5 o+ 90 o- 500<br>
        </p>
        <style>

        </style>
    </div>

    <div class="dashboard" id="dashboard">
        <h1>DashBoard</h1>
        <hr><br>
        <div class="wrapper">

            <div class="wrap"> <a href="availableblood.php">
                    <div class="available-bloods">Available Bloods <br>
                        <i class="fa-solid fa-fill-drip"
                            style="position: relative;margin-top: -5px; font-size:230%; color:rgba(255, 181, 181, 0.705);"></i>
                    </div>
                    <div class="details">view details</div>
                </a>
            </div>
            <div class=" wrap"><a href="donateblood.php">
                    <div class="donateblood">Donate Blood
                        <i class="fa-solid fa-hand-holding-hand" style=" font-size:250%; ""></i>
                    </div>

                    <div class=" details">details
                    </div>
                </a>
            </div>
            <div class="wrap"><a href="requestblood.php">
                    <div class="reqblood">Request Blood<i class="fa-solid fa-syringe" style="font-size:250%; "></i>
                    </div>
                    <div class="details">details</div>
                </a>
            </div>
            <div class="wrap"><a href="bloodbank.php">
                    <div class="bloodbank">Blood Banks<i class="bi bi-bank" style="font-size:250%; "></i></div>
                    <div class=" details">details</div>
                </a>
            </div>
            <div class="wrap"><a href="bloodbank.php">
                    <div class="bloodbank"> Donors List<i class="fa-solid fa-users " style="font-size:250%; "> <i
                                class="fa-solid fa-plus"
                                style="font-size:50%; margin-left:-10px;margin-top: -10px"></i></i>



                    </div>
                    <div class="details">details</div>
                </a>
            </div>
        </div>
        <style>
            .right-content {
                color: #00506a;
            }

            .countbloods {
                text-align: center;
            }

            .wrapper {
                display: flex;


            }

            .wrap {
                text-align: center;
                margin-right: 1rem;


            }

            .available-bloods,
            .donateblood,
            .reqblood,
            .bloodbank {
                cursor: context-menu;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                height: 100px;
            }

            .available-bloods,
            .donateblood,
            .reqblood,
            .bloodbank,
            .details {

                max-width: 880rem;
                padding: 0.5rem;
            }

            .wrap a {
                color: white;
                text-decoration: none;
            }

            .details {
                background-color: rgba(90, 94, 85, 0.778);
                padding: 0.5rem;
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;


            }

            .available-bloods {
                background-color: #bf5600;
            }

            .donateblood {
                background-color: #EB0000;
            }

            .reqblood {
                background-color: #098800;

            }

            .bloodbank {
                background-color: #00506a;
            }

            .dashboard {
                padding: 0.75rem 1rem 1rem 0rem;
            }

            h1 {
                font-size: 2rem;
            }
        </style>
    </div>