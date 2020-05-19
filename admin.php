<?php
require("./adminheader.php");
?>

    <div class="adminmain">
    <div class="ponudnikaddform">
    <form action="ponudnikadd.php" method="post" >
    <div class="ponudnikaddtitle">eHrana - Dodaj ponudnika </div><br>
    <div>
        <div>
            Ime ponudnika
        </div>
        <input type="text" placeholder="Enter name" name="ime" required>
    </div>
    
    <div>
        <div>
            Username
        </div>
        <input type="text" placeholder="Enter Username" name="uid" required>
    </div>

    <div>
        <div>
            Password
        </div>
        <input type="password" placeholder="Enter Password" name="pass" required>
    </div>
    <button type="submit">Dodaj</button>  
    </form>
</div>

    </div>
    <div class="ponudnikaddform kategorije">
        <form action="kategorijaadd.php" method="post">
        <div>
            Ime kategorije
            </div>
                <input type="text" placeholder="Ime kategorije" name="ime" required>
                <div><button type="submit">Dodaj</button>  </div>
            </div>
     
            </form>

    </div>
</div>


    <?php
require("./adminfooter.php");
?>