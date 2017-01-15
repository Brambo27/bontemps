<form method="post" action="components/registreren/registreerActie.php">
    <div class="form-group">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputNaam">Naam</label>
        <input type="text" class="form-control" id="inputNaam" placeholder="Enter naam" name="naam">
    </div>
    <div class="form-group">
        <label for="inputTelefoon">Telefoon</label>
        <input type="text" class="form-control" id="inputTelefoon" placeholder="Enter telefoon" name="telefoon">
    </div>
    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="wachtwoord">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php
