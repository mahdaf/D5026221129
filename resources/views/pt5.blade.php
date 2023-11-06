<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    function showAlert(){
        alert("Selamat anda mendapat 100 juta");
}
    function changeText(){
     var span = document.getElementById("output"); //mendapatkan objek tulisan
     var textbox = document.getElementById("textbox"); //mendapatkan object text box
     textbox.style.color = "red";
     span.innerHTML = textbox.value; //membaca isi textbox dan mengubah tulisan non input
    }
</script>

<script>
    function tambah(){
        var bill1 = document.getElementById("bill1");
        var bill2 = document.getElementById("bill2");
        var hasil = document.getElementById("hasil");
        hasil.innerHTML = parseInt(bill1.value) + parseInt(bill2.value);
    }
    function kali(){
        var bill1 = document.getElementById("bill1");
        var bill2 = document.getElementById("bill2");
        var hasil = document.getElementById("hasil");
        hasil.innerHTML = bill1.value * bill2.value;
    }
</script>

<script>

function validateForm(){
    console.log("Tes bang baris 40");
    //return false;
    console.log("Tes bang 42");
    return true;
    console.log("Tes bang 43");
    return false;

    function validate() {
    var bill3 = document.getElementById('bill3');
    if (bill3.value == ""){
            alert('Please fill all the fields in the form!');
            return false;
    }else {
        return true;
    }
    }
}</script>
</head>
<body>


    <div class="container">

        <button class="btn btn-primary" onclick="showAlert();">Klik Disini Ges</button>
        <br>

        <button class="btn btn-success" onclick="changeText(); validateForm();">Click me!</button>
        <span id="output">replace me</span><input id="textbox" type="text" class="form-control"/>

    </div>
    <br>
    <div class="container">
        <form id="myform">
        <div class="form-group">
            <label for="bill1">Bilangan 1</label>
            <input type="number" id="bill1" class="form-control">
        </div>
        <div class="form-group">
            <label for="bill2">Bilangan 2</label>
            <input type="number" id="bill2" class="form-control">
        </div>

       <input type="button" value="Penjumlahan" class="btn btn-primary" onclick="tambah();"/>
       <input type="button" value="Perkalian" class="btn btn-info" onclick="kali();"/>
       <input type="reset" value="Ulangi" class="btn btn-danger"/>
       <h3>Hasil Operasi: <div id="hasil"></div></h3>
       </form>
    </div>
<br>

<div class="container">
    <form action="https://www.detik.com" method="get" onsubmit="return ture">
        <input type="text" id="bill3" class="form-control" placeholder="Harus diisi" name="bill3"/>
        <input type="submit" value="KIRIM" class="btn btn-primary"/>
    </form>
</div>

</body>
</html>
