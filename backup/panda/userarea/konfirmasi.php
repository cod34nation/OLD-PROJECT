<?php
include ("koneksi.php");

$id_ref=(uniqid(rand()));
$ref=substr($id_ref,12);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Konfirmasi Donasi</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style type="text/css">
    h1{
        margin: 30px 0;
        padding: 0 200px 15px 0;
        border-bottom: 1px solid #E5E5E5;
    }
	.bs-example{
    	margin: 20px;
    }
    .form-horizontal{
     width: 450px;
     position: relative;
     margin: 20px auto;
     border-radius: 10px;

    }

    


</style>
</head>
<body>
<div class="bs-example">
    <h1>Donasi Form</h1>
    <form class="form-horizontal">
        <div class="form-group">
            <label class="control-label col-xs-3" for="idref">ID REF BANK</label>
            <div class="col-xs-9"><?php echo $ref; ?>
                <input type="hidden" name="ref" class="form-control" id="idref" value="<?php echo $ref; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="inputNama">Nama</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="inputnama" placeholder="Atas Nama">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="confirmNominal">Jumlah Nominal</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="confirmNominal" placeholder="jumlah nominal">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="phoneNumber">Nomer HP:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3" for="Keperluan">Keperluan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Keperluan" placeholder="Keperluan">
            </div>
        </div>
        
        <div class="form-group">
            <label class="control-label col-xs-3">Tanggal Donasi</label>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Date</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Month</option>
                </select>
            </div>
            <div class="col-xs-3">
                <select class="form-control">
                    <option>Year</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-xs-3">Transfer BANK</label>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="BCA"> BCA
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="BRI"> BRI
                </label>
            </div>
            <div class="col-xs-2">
                <label class="radio-inline">
                    <input type="radio" name="genderRadios" value="BNI"> BNI
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="news"> Kirim saya dokumentasi penyaluran melalui email..
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <label class="checkbox-inline">
                    <input type="checkbox" value="agree">  I agree to the <a href="#">Terms and Conditions</a>.
                </label>
            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </div>
    </form>
</div>
</body>
</html>                                		