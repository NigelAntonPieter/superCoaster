<link rel="stylesheet" href="css/main.css">
<div class="ccPagina">
    <h2>Contact</h2>
    <form action="backend/ccpagina.php" method="POST">

            <div class="form-group">
                <label for="name">Naam:</label>
                <input type="text" placeholder="John Doe" name="name">
            </div> 

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" placeholder="johndoe@info.com" name="email">
            </div>

            <div class="form-group">
                <label for="bericht">Bericht:</label>
                <input type="text" placeholder="Voer hier je bericht in" name="bericht">
            </div>
            <div class="form-group">

                <input type="submit" value="Verzenden">
            </div>  

</div>