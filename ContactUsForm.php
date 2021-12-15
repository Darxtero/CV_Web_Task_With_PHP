<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="indexCSS.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">



</head>
<body>
<section class="form">
    <div class="w3-container w3-light-grey w3-padding-32 w3-padding-large" id="contact">
        <div class="w3-content" style="max-width:600px">
            <h4 class="w3-center"><b>Contact Us</b></h4>
            <form action="formSubmit.php" method="get">
                <div class="w3-section">
                    <label for="Name">Name</label>
                    <input required type="Name" class="w3-input w3-border" type="text" name="Name">
                </div>
                <div class="w3-section">
                    <label for="Phone">Phone</label>
                    <input required type="Phone" class="w3-input w3-border" type="text" name="Phone">
                </div>
                <div class="w3-section">
                    <label for="Email">Email</label>
                    <input required type="Email" class="w3-input w3-border" type="text" name="Email">
                </div>
                <div class="w3-section">
                    <label for="limitedtextarea">Free Taxt</label>
                    <textarea name="limitedtextarea" onKeyDown="limitText(this.form.limitedtextarea,this.form.countdown,200);"
                              onKeyUp="limitText(this.form.limitedtextarea,this.form.countdown,200);">
                        </textarea><br>
                    <font size="1">(Maximum characters: 200)<br>
                        You have <input readonly type="text" name="countdown" size="3" value="200"> characters left.</font>
                </div>
                <button type="submit" class="w3-button w3-block w3-black w3-margin-bottom">Send Message</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>