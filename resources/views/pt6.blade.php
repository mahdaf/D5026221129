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
//     function validateForm2() {
//     var form = document.getElementById('myform');
//     var inputs = form.getElementsByTagName('input');
//     for (var i = 0; i < inputs.length; i++) {
//         if (inputs[i].value === '') {
//             alert('Please fill all the fields in the form!');
//             return false;
//         }
//     }
//     return true;
// }

    function validateForm() {
    var bill = document.getElementById('bill1');
    if (bill.value == ""){
            alert('Please fill all the fields in the form 1!');
            bill.focus();
            return false;
    }
    var bill = document.getElementById('bill2');
    if (bill.value == ""){
           bill.placeholder = 'Please fill all the fields in the form 2';
            bill.focus();
            return true;
    }
}

    </script>
</head>
<body>

    <!-- <div class="container">
        <form id="myform">
        <div class="form-group">
            <label for="bill1">Bilangan 1</label>
            <input type="text" id="bill1" class="form-control">
        </div>
        <div class="form-group">
            <label for="bill2">Bilangan 2</label>
            <input type="text" id="bill2" class="form-control">
        </div>
       <input type="button" value="Penjumlahan" class="btn btn-primary" onclick="tambah();validateForm()"/>
       <input type="button" value="Perkalian" class="btn btn-info" onclick="kali();"/>
       <input type="reset" value="Ulangi" class="btn btn-danger"/>
       <h3>Hasil Operasi: <div id="hasil"></div></h3>
       </form>
    </div> -->
<br>

<script>
function validateNRP() {
    var nrp = document.getElementById('nrp');
    if (nrp.value == ""){
            alert('NRP tidak boleh kosong!');
            return false;
    }else if (isNaN(nrp.value)){
            alert('NRP harus angka!');
            return false;
    }else if (nrp.value.length !== 10){
            alert('NRP harus 10 digit!');
            return false;
    }else{
        alert('Submit berhasil');
    }

    }
    </script>
<div class="container">
    <form id="formnrp">
    <div class="form-group">
        <label for="nrp">Masukin NRP mu!</label>
        <input type="text" id="nrp" class="form-control">
    </div>

   <input type="button" value="Submit ges" class="btn btn-primary" onclick="validateNRP();"/>
   </form>
</div>


</body>
</html>
