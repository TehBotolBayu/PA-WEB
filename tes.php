<?php
session_start();

require "config.php";


if (isset($_POST['submit'])) {
    $name = $_POST['skill'];
    $n =  implode(", ",$name);
    echo $n;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formhire.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          BUAT PERMINTAAN
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
            <div class="inputfield">
                <label><b>Judul</b></label>
                <input type="text" class="input" name="judul">
            </div>  
            <div class="inputfield">
                <label><b>Skill</b></label>
                <div id="list1" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">Pilih Skill</span>
                    <ul class="items">
                        <li>CISCO<input type="checkbox" name="skill[]" value="CISCO"></li>
                        <li>CI/CD<input type="checkbox" name="skill[]" value="CI/CD"></li>
                        <li>DevOps<input type="checkbox" name="skill[]" value="DevOps"></li>
                        <li>Mikrotik<input type="checkbox" name="skill[]" value="Mikrotik"></li>
                        <li>Azure<input type="checkbox" name="skill[]" value="Azure"></li>
                        <li>AWS<input type="checkbox" name="skill[]" value="AWS"></li>
                        <li>javascript<input type="checkbox" name="skill[]" value="javascript"></li>
                        <li>css<input type="checkbox" name="skill[]" value="css"></li>
                        <li>php<input type="checkbox" name="skill[]" value="php"></li>
                        <li>node.js<input type="checkbox" name="skill[]" value="node.js"></li>
                        <li>react.js<input type="checkbox" name="skill[]" value="react.js"></li>
                        <li>.NET<input type="checkbox" name="skill[]" value=".NET"></li>
                        <li>react native<input type="checkbox" name="skill[]" value="react native"></li>
                        <li>Dart<input type="checkbox" name="skill[]" value="Dart"></li>
                        <li>Kotlin<input type="checkbox" name="skill[]" value="Kotlin"></li>
                        <li>C++<input type="checkbox" name="skill[]" value="C++"></li>
                        <li>Java<input type="checkbox" name="skill[]" value="Java"></li>
                        <li>Unity<input type="checkbox" name="skill[]" value="Unity"></li>
                        <li>Wordpress<input type="checkbox" name="skill[]" value="Wordpress"></li>
                        <li>CopyWriting<input type="checkbox" name="skill[]" value="CopyWriting"></li>
                        <li>Translator<input type="checkbox" name="skill[]" value="Translator"></li>
                        <li>Advertisement<input type="checkbox" name="skill[]" value="Advertisement"></li>
                        <li>Business Plan<input type="checkbox" name="skill[]" value="Business Plan"></li>
                        <li>2D animation<input type="checkbox" name="skill[]" value="2D animation"></li>
                        <li>3D Design<input type="checkbox" name="skill[]" value="3D Design"></li>
                        <li>Logo Design<input type="checkbox" name="skill[]" value="Logo Design"></li>
                        <li>Poster Design<input type="checkbox" name="skill[]" value="Poster Design"></li>
                        <li>Illustrator<input type="checkbox" name="skill[]" value="Illustrator"></li>
                        <li>Game Art<input type="checkbox" name="skill[]" value="Game Art"></li>
                        <li>Adobe illustrator<input type="checkbox" name="skill[]" value="Adobe illustrator"></li>
                        <li>Adobe photoshop<input type="checkbox" name="skill[]" value="Adobe photoshop"></li>
                        <li>Premiere Pro<input type="checkbox" name="skill[]" value="Premiere Pro"></li>
                        <li>Lua<input type="checkbox" name="skill[]" value="Lua"></li>
                        <li>Unreal<input type="checkbox" name="skill[]" value="Unreal"></li>
                        <li>Flask<input type="checkbox" name="skill[]" value="Flask"></li>                    
                    </ul>
                </div>
            </div> 
            <div class="inputfield">
            <label><b>Kategori</b></label>
                <div id="list2" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">Kategori</span>
                    <ul class="items">
                        <li>IT<input type="checkbox" name="kategori[]" value="IT"></li>
                        <li>WEB DEVELOPMENT<input type="checkbox" name="kategori[]" value="WEB DEVELOPMENT"></li>
                        <li>APP DEVELOPMENT<input type="checkbox" name="kategori[]" value="APP DEVELOPMENT"></li>
                        <li>WRITING<input type="checkbox" name="kategori[]" value="WRITING"></li>
                        <li>GRAPHIC DESIGN<input type="checkbox" name="kategori[]" value="GRAPHIC DESIGN"></li>
                        <li>VIDEO EDITING<input type="checkbox" name="kategori[]" value="VIDEO EDITING"></li>
                        <li>GAME DEVELOPMENT<input type="checkbox" name="kategori[]" value="GAME DEVELOPMENT"></li>
                        <li>MUSIC<input type="checkbox" name="kategori[]" value="MUSIC"></li>
                    </ul>
                </div>
            </div> 
              <div class="inputfield">
                <label><b>Harga</b></label>
                <input type="number" class="input" name="harga">
            </div> 
            <div class="inputfield">
                <label><b>Deskripsi</b></label>
                <textarea class="textarea" name="deskripsi"></textarea>
            </div> 
            <div class="inputfield">
                <label><b>Gambar</b></label>
                <input type="file" class="input" name="fileToUpload">
            </div> 
            <div class="inputfield">
              <input type="submit" value="Upload" class="btn" name="submit">
            </div>
        </form>
    </div>
    <script>
        var checkList = document.getElementById('list1');
        checkList.getElementsByClassName('anchor')[0].onclick = function(evt) {
        if (checkList.classList.contains('visible'))
            checkList.classList.remove('visible');
        else
            checkList.classList.add('visible');
        }

        var checkList2 = document.getElementById('list2');
        checkList2.getElementsByClassName('anchor')[0].onclick = function(evt) {
        if (checkList2.classList.contains('visible'))
            checkList2.classList.remove('visible');
        else
            checkList2.classList.add('visible');
        }
    </script>
</body>
</html>