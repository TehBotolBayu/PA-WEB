<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formtransaksi.css">
</head>
<body>
    <div class="wrapper">
        <div class="title">
          BUAT PENAWARAN
        </div>
        <form method="POST" class="form" action="" enctype="multipart/form-data">
        
        <div class="inputfield">
                <label><b>Tanggal</b></label>
                <input type="date" class="input" name="Tanggal">
        </div> 

        <div class="inputfield">
                <label><b>Judul</b></label>
                <input type="text" class="input" name="Judul">
        </div>  
        
        <div class="inputfield">
                <label><b>Dekripsi</b></label>
                <input type="text-area" class="input" name="Dekripsi">
        </div>  

        <div class="inputfield">
            <label><b>Status</b></label>
                <div id="list" class="dropdown-check-list" tabindex="100">
                    <span class="anchor">STATUS</span>
                    <ul class="items">
                        <li>ADMIN<input type="checkbox" name="kategori[]" value="ADMIN"></li>
                        <li>USER<input type="checkbox" name="kategori[]" value="USER"></li>
            
        <div class="inputfield">
           <label><b>Harga</b></label>
           <input type="number" class="input" name="Harga">
        </div> 

    </form>
</body>
</html>