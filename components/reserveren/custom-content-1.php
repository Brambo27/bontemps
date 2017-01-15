<form>
    <div class="form-group" >
        <label for="name">Voledige naam</label>
        <input type="text" class="form-control" id="name" placeholder="Voledige naam" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="tel">Telefoon nummer</label>
        <input type="tel" class="form-control" id="tel" placeholder="Telefoon nummer">
    </div>
    <div class="form-group">
        <label for="exampleSelect1">Example select</label>
        <select class="form-control" id="exampleSelect1" required>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleTextarea">Example textarea</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label for="radio1">Wilt u een account aanmaken?</label>
        <small id="kortingHelp" class="form-text text-muted">Klanten met een account krijgen 15% korting op hun eerste reservering</small>
        <label class="custom-control custom-radio">
            <input id="radio1" name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Ja</span>
        </label>
        <label class="custom-control custom-radio">
            <input id="radio2" name="radio" type="radio" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">Nee</span>
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>