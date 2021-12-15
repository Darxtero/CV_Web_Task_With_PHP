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

    <?php
        $Info = new PersonalInfo("Jonathan", "0506400166", "jonathanf1993@gmail.com", "Sderot" );
    ?>
    <section class="PersonalInfo">
    <div id="PersonalInfo">
        <h1 class="PersonHead">Personal Info:</h1>
        <img id="myImg" src="https://i.pinimg.com/originals/4f/a1/41/4fa141173a1b04470bb2f850bc5da13b.png" alt="Batman" onclick="Model()">


        <div id="myModal" class="modal">
            <span class="close">&times;</span>
            <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>

        <div class="PersonText">
            <p><?php echo $Info->getName()?></p>
            <p>phone: <a href="tel:050-6400166"><?php echo $Info->getPhone()?></a> </p>
            <p>email:<a href = "mailto:"><?php echo $Info->getEMail()?></a> </p>
            <p>address:<?php echo $Info->getAddress()?></p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13606.18512773843!2d34.5945456!3d31.5091529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2f92addc3834b6c!2z15TXnteb15zXnNeUINeU15DXp9eT157XmdeqINeh16TXmdeo!5e0!3m2!1siw!2sil!4v1618670946631!5m2!1siw!2sil"
                       width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        </div>

    </div>
    </section>
</body>
</html>

<?php
    class PersonalInfo{
        private $name;
        private $phone;
        private $eMail;
        private $address;

        function __construct($name, $phone, $eMail, $address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->eMail = $eMail;
            $this->address = $address;
        }

        function getName(){
            return $this->name;
        }
        function getPhone(){
            return $this->phone;
        }
        function getEMail(){
            return $this->eMail;
        }
        function getAddress(){
            return $this->address;
        }

    }

?>