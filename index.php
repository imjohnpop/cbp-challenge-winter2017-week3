<?php 
    require 'lib/data-functions.php';

    $errors = array();
    function error($name,$output) {
        if ($_POST) {
            $errors = array();
            if (empty($_POST[$name])) {
                $errors[] = $output;
            } 
            if (empty($errors)) {
                // savedate()
                header('Location: index.php?status=ok');
                exit();
            } else {
                foreach ($errors as $error) {
                    echo $error . '<br>';
                }
            } 
        } 
    }  
    if ($_GET) {
        echo '<h1>Thank you. Your data has been sent.</h1>';
        echo '<a href="http://www.cbp.test:8080/challenge/php:form%20-%20a%20database/cbp-challenge-winter2017-week3/index.php">Go back</a>';
        exit();
    }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
        crossorigin="anonymous">

    <style>
    </style>
</head>
<body class="bg-success">

    <div class="container mt-5 bg-dark text-info border border-light">
        <h1>Jedi Form</h1>
        <p>The big Jedi survey</p>
        <p>How many of us are out there?</p>
    </div>
    
    <section class="container my-5 bg-light" id="contact">
        <div class="row border border-light bg-dark mb-3 py-3">
            <h2 class="pl-3 text-info y-fs-1_5">Are you a Jedi?</h2>
        </div>
        <div class="row pb-3 mx-5">
            <div class="col-12">
                <div class="row">
                    <p class="col-12">Required, text marked with * is.</p>
                </div>
                <form method="post" class="row">
                    <div class="col-6">
                        <div class="form-group"><label for="name">*Name:</label><input class="form-control" type="text" name="name"></div><br>
                        <p class="text-danger"><?php error('name','You don\'t have a name?<br>');?></p>
                        <div class="form-group"><label for="planet">*Planet:</label><select name="planet" class="form-control">
                                <option></option>
                                <option>Aargonar</option>
                                <option>Abafar</option>
                                <option>Alderaan</option>
                                <option>Aleen</option>
                                <option>Ando</option>
                                <option>Ansion</option>
                                <option>Antar</option>
                                <option>Antar 4(moon)</option>
                                <option>Antar(dead moon)</option>
                                <option>Anteevy</option>
                                <option>Anza(star)</option>
                                <option>Aquaris</option>
                                <option>Arkanis</option>
                                <option>Asmeru</option>
                                <option>Atzerri</option>
                                <option>Balith</option>
                                <option>Balmorra</option>
                                <option>Balnab</option>
                                <option>Bardotta</option>
                                <option>Belderone</option>
                                <option>Bespin</option>
                                <option>Bestine</option>
                                <option>Bith</option>
                                <option>Boz Pity</option>
                                <option>Brentaal IV</option>
                                <option>Calcorran</option>
                                <option>Carida</option>
                                <option>Carlac</option>
                                <option>Cartao</option>
                                <option>Cato Neimoidia</option>
                                <option>Centares</option>
                                <option>Christophsis</option>
                                <option>Colonies</option>
                                <option>Concord Dawn</option>
                                <option>Concordia(moon)</option>
                                <option>Corellia</option>
                                <option>Corsin</option>
                                <option>Corulag</option>
                                <option>Coruscant</option>
                                <option>Cymoon-1</option>
                                <option>Cynda(moon)</option>
                                <option>Dagobah</option>
                                <option>Dantooine</option>
                                <option>Dathomir</option>
                                <option>Devaron</option>
                                <option>Dorin</option>
                                <option>Draboon</option>
                                <option>Dwartii</option>
                                <option>Endor</option>
                                <option>Endor(forest moon)</option>
                                <option>Eriadu</option>
                                <option>Falleen</option>
                                <option>Felucia</option>
                                <option>Florrum</option>
                                <option>Force Planet</option>
                                <option>Galidraan</option>
                                <option>Galidraan II</option>
                                <option>Galidraan III</option>
                                <option>Galidraan IV</option>
                                <option>Galidraan IV(first moon)</option>
                                <option>Galidraan IV(second moon)</option>
                                <option>Galidraan IV(outermost moon)</option>
                                <option>Ganthel</option>
                                <option>Garel</option>
                                <option>Garos</option>
                                <option>Geonosis</option>
                                <option>Glee Anselm</option>
                                <option>Golm</option>
                                <option>Golm asteroid belt</option>
                                <option>Gorse</option>
                                <option>Gromas</option>
                                <option>Hell</option>
                                <option>Hoth</option>
                                <option>Iego</option>
                                <option>Iego(moons)</option>
                                <option>Ilum</option>
                                <option>Iridonia</option>
                                <option>Jomark</option>
                                <option>Kadavo</option>
                                <option>Kalevala</option>
                                <option>Kaliida Nebula</option>
                                <option>Kaliida Shoals</option>
                                <option>Kamino</option>
                                <option>Karfeddion</option>
                                <option>Kashyyyk</option>
                                <option>Kessel</option>
                                <option>Kiros</option>
                                <option>Kuat</option>
                                <option>Lantillies</option>
                                <option>Lasan</option>
                                <option>LCC-4-4-7</option>
                                <option>Lola Sayu</option>
                                <option>Lothal</option>
                                <option>Lotho Minor</option>
                                <option>Lucazec</option>
                                <option>Malachor</option>
                                <option>Malastare</option>
                                <option>Mandalore</option>
                                <option>Maridun</option>
                                <option>Milagro</option>
                                <option>Millius Prime</option>
                                <option>Mimban</option>
                                <option>Mon Cala</option>
                                <option>Mooga</option>
                                <option>Moraband</option>
                                <option>Murkhana</option>
                                <option>Mustafar</option>
                                <option>Mygeeto</option>
                                <option>Naboo</option>
                                <option>Nal Hutta</option>
                                <option>Nam Chorious</option>
                                <option>Nouane</option>
                                <option>Obroa-skai</option>
                                <option>Onderon</option>
                                <option>Ord Cestus</option>
                                <option>Ord Mantell</option>
                                <option>Orondia</option>
                                <option>Orto Plutonia</option>
                                <option>Pantora</option>
                                <option>Pastil</option>
                                <option>Patitite Pattuna</option>
                                <option>Patrolia</option>
                                <option>Phattro</option>
                                <option>Phindar</option>
                                <option>Pii</option>
                                <option>Polis Massa</option>
                                <option>Prefsbelt</option>
                                <option>Qiilura</option>
                                <option>Quarzite</option>
                                <option>Quell</option>
                                <option>Rattatak</option>
                                <option>Raxus</option>
                                <option>Raydonia</option>
                                <option>Rhen Var</option>
                                <option>Ringo Vada</option>
                                <option>Rishi</option>
                                <option>Rishi(moon)</option>
                                <option>Rodia</option>
                                <option>Rothana</option>
                                <option>Rugosa</option>
                                <option>Ruusan</option>
                                <option>Ryloth</option>
                                <option>Saleucami</option>
                                <option>Scipio</option>
                                <option>Sentinal Base(moon)</option>
                                <option>Serenno</option>
                                <option>Sluis Van</option>
                                <option>Solarine</option>
                                <option>Stygeon Prime</option>
                                <option>Sullust</option>
                                <option>Taanab</option>
                                <option>Taris</option>
                                <option>Tatooine</option>
                                <option>Teth</option>
                                <option>Thustra</option>
                                <option>Tibrin</option>
                                <option>Toydaria</option>
                                <option>Trandosha</option>
                                <option>Trogan</option>
                                <option>Umbara</option>
                                <option>Unidentified agricultural planet</option>
                                <option>Unidentified asteroid belt</option>
                                <option>Unidentified volcanic planet</option>
                                <option>Unitentified isolated moon</option>
                                <option>Utapau</option>
                                <option>Vanqor</option>
                                <option>Vassek</option>
                                <option>Vassek(3rd moon)</option>
                                <option>Wasskah</option>
                                <option>Wor Tandell</option>
                                <option>Yag'Dhul</option>
                                <option>Yavin</option>
                                <option>Yavin I(moon)</option>
                                <option>Yavin II(moon)</option>
                                <option>Yavin III(moon)</option>
                                <option>Yavin IV(moon)</option>
                                <option>Yout 12</option>
                                <option>Zanbar</option>
                                <option>Zardossa Stix</option>
                                <option>Zygerria</option>
                            </select><br>
                        </div>
                        <p class="text-danger"><?php error('planet','Your location is missing!<br>');?></p>
                        <div class="form-group">
                            <label for="midichlorians">*Midichlorians</label><input class="form-control" type="number" name="midichlorians">
                        </div><br>
                        <p class="text-danger"><?php error('midichlorians','You don\'t have any?<br>');?></p>
                        <div class="form-group"><label for="force">*Is the force strong with you?</label><input class="form-control" type="checkbox" name="force"></div><br>
                    </div>
                    <div class="col-6">
                        <div class="form-group"><label for="lightsaber">*Lightsaber color:</label><input class="form-control" type="text" name="lightsaber"></div><br>
                        <p class="text-danger"><?php error('lightsaber','How can you be a Jedi without a lightsaber?<br>');?></p>
                        <div class="form-group"><label for="message">*Why have you became a Jedi?</label><textarea class="form-control" name="message" rows="1"></textarea></div><br>
                        <p class="text-danger"><?php error('message','Yoda would like to know why you joined The Force.<br>');?></p>
                        <p>*Gender:</p>
                        <div class="form-group">
                            <label for="gender">Male:</label><input class="form-control" type="radio" name="gender">
                            <label for="gender">Female:</label><input class="form-control" type="radio" name="gender">
                        </div><br>
                        <p class="text-danger"><?php error('gender','You forgot to mention your gender.<br>');?></p>
                        <button type="submit" class="form-control btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>