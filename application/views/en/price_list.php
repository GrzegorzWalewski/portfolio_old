<div class="uk-width-4-5 content uk-text-center uk-text-middle">
    <a href="#sidebar" id="sidebar_button" uk-toggle><img src="/assets/img/button.png"></a>
    <div class="uk-grid">
        <div class="uk-width-3-3 text_side kontakt">
            <h1 class="text_title text">CONTACT</h1>
            <div class="contact">
                <div class="uk-card">
                    <h3 class="text"><i class="fa fa-skype fa-5x" aria-hidden="true"></i>
                    </h3>
                    <p class="text">grzojda</p>
                </div>
                <div class="uk-card">
                    <h3 class="text" class="text" class="text" class="text"><i class="fa fa-envelope fa-5x" aria-hidden="true"></i>
                    </h3>
                    <p class="text" class="text" class="text">grzojda@gmail.com
                        <p>
                </div>
                <div class="uk-card">
                    <h3 class="text" class="text"><i class="fa fa-phone-square fa-5x" aria-hidden="true"></i>
                    </h3>
                    <p class="text">+48 730 091 002</p>
                </div>
            </div>
            <div>
                <form method="post" id="messageForm" action="/pl/cennik">
                    <fieldset class="uk-fieldset">
                        <div class="uk-margin">
                            <input class="uk-input" name="name" id="name" type="text" placeholder="Your name">
                        </div>
                        <div class="uk-margin">
                            <input class="uk-input" name="mail" id="mail" type="text" placeholder="E-Mail">
                        </div>
                        <div class="uk-margin">
                            <textarea class="uk-textarea" rows="5" name="mess" id="mess" placeholder="Message"></textarea>
                        </div>
                        <div class="uk-margin">
                            <input id="submit_button" class="uk-submit uk-button" type="submit" value="Send"></input>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    var validator = new My_Validator;
    var submitButton = document.getElementById("submit_button");
    var nameInput = document.getElementById("name");
    var mailInput = document.getElementById("mail");
    var messInput = document.getElementById("mess");
    var form = document.getElementById("messageForm");
    var formInputs = [nameInput, mailInput, messInput];

    nameInput.addEventListener("keyup", function() {
        validator.validate(nameInput,submitButton,"text");
}); 
    messInput.addEventListener("keyup", function() {
        validator.validate(messInput,submitButton,"text");
}); 

    mailInput.addEventListener("keyup", function() {
        validator.validate(mailInput,submitButton,"mail");
}); 
    submitButton.addEventListener("click",function(event){
        validator.submit(submitButton,formInputs,event);
    });
</script>
</body>

</html>
