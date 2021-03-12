<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" href="{{ asset('assets/unpar.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Check Status | Skripsi</title>
    <link href="{{ asset('css/skripsi_mainstyle.css') }}" rel="stylesheet" type="text/css" >
</head>
<style>
    body{
        background-image: url("assets/sensing_bg.jpg") ;
        background-size: 100%;
        padding-left: 99px;
        padding-right: 108px;
        background-repeat: no-repeat;
    }
</style>
<body>
    @include('skripsi_header')
    <br>
    <table style="margin-top: 15px;float: left; width:45%;" id="table1">
        @foreach ($check1 as $check1)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check1->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td id="n1_aktif">{{ $check1->status_node}}</td>
        </tr>
	<tr>
          <td>Status Sensing</td>
          <td id="n1_sensing">{{ $check1->status_sensing}}</td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 15px;float: left; width:45%;" id="table2">
        @foreach ($check2 as $check2)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check2->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td id="n2_aktif">{{ $check2->status_node}}</td>
        </tr>
	<tr>
          <td>Status Sensing</td>
          <td id="n2_sensing">{{ $check2->status_sensing}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <table style="margin-top: 24px;float: left; width:45%;" id="table3">
        @foreach ($check3 as $check3)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check3->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td id="n3_aktif">{{ $check3->status_node}}</td>
        </tr>
	<tr>
          <td>Status Sensing</td>
          <td id="n3_sensing">{{ $check3->status_sensing}}</td>
        </tr>
        @endforeach
    </table>

    <table style="margin-top: 24px;float: left; width:45%;" id="table4">
        @foreach ($check4 as $check4)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check4->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td id="n4_aktif">{{ $check4->status_node}}</td>
        </tr>
	<tr>
          <td>Status Sensing</td>
          <td id="n4_sensing">{{ $check4->status_sensing}}</td>
        </tr>
        @endforeach
    </table>

    <br>

    <table style="margin-top: 24px;float: left;margin-left:26%; " id="table5">
        @foreach ($check5 as $check5)
        <tr style="background-color: rgba(0, 0, 0, 0.5)">
          <th>Variable</th>
          <th>Value</th> 
        </tr>
        <tr>
            <td>Nama Node</td>
            <td>{{ $check5->nama_node}}</td>
          </tr>
        <tr>
          <td>Status Node</td>
          <td id="n5_aktif">{{ $check5->status_node}}</td>
        </tr>
        @endforeach
    </table>
    
    <div style="margin-left:15px;margin-top: 418px;">
        <img src="assets/back.png"><a href="/" style="color: white;">Kembali</a>
    </div>
    
    <form method="post" action="/check-status/update/">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <button class="button button4" style="visibility:hidden;" onclick="changeButtonText()" value="online" id="sensing_button" style="margin-top: 140px;margin-right: 15px;">Update</button>
    </form>
    
</body>

<script>
      var buttonSensing = document.getElementById('sensing_button').value;
  var statusSensing = "true";
  

/**
    function changeButtonText(){
    if(buttonSensing=="offline"){ 
      document.getElementById('sensing_button').innerHTML = 'Update';
      buttonSensing = "online";
      statusSensing = "true";
      location.reload();
      return false;
      
      
    }
    else{ 
      document.getElementById('sensing_button').innerHTML = 'Refresh';
      alert("Update Status Dilakukan! Silakan 'Refresh' untuk perbarui tampilan");
      
    }
  } 
    */
    
    var node1Stat = document.getElementById('n1_aktif').textContent;
    var node1Sens = document.getElementById('n1_sensing').textContent;
    
    var node2Stat = document.getElementById('n2_aktif').textContent;
    var node2Sens = document.getElementById('n2_sensing').textContent;

    var node3Stat = document.getElementById('n3_aktif').textContent;
    var node3Sens = document.getElementById('n3_sensing').textContent;

    var node4Stat = document.getElementById('n4_aktif').textContent;
    var node4Sens = document.getElementById('n4_sensing').textContent;

    var node5Stat = document.getElementById('n5_aktif').textContent;

    //CHECK STATUS NODE
    if(node1Stat!='Online'){
      document.getElementById('n1_aktif').style.color="yellow";
      document.getElementById('n1_sensing').style.color="yellow";
    }
    if(node2Stat!='Online'){
      document.getElementById('n2_aktif').style.color="yellow";
      document.getElementById('n2_sensing').style.color="yellow";
    }
    if(node3Stat!='Online'){
      document.getElementById('n3_aktif').style.color="yellow";
      document.getElementById('n3_sensing').style.color="yellow";
    }
    if(node4Stat!='Online'){
      document.getElementById('n4_aktif').style.color="yellow";
      document.getElementById('n4_sensing').style.color="yellow";
    }
    if(node5Stat!='Online'){
      document.getElementById('n5_aktif').style.color="yellow";
    }

    //CHECK STATUS SENSING
    if(node1Sens!='Sensing'){
      document.getElementById('n1_sensing').style.color="yellow";
    }
    if(node2Sens!='Sensing'){
      document.getElementById('n2_sensing').style.color="yellow";
    }
    if(node3Sens!='Sensing'){
      document.getElementById('n3_sensing').style.color="yellow";
    }
    if(node4Sens!='Sensing'){
      document.getElementById('n4_sensing').style.color="yellow";
    }
    
    
    //TIMER UPDATE 30 sec STATUS NODE
    if(node1Stat=='Online'){
        setTimeout(setStatusN1, 30000);
    }
    if(node2Stat=='Online'){
        setTimeout(setStatusN2, 30000);
    }
    if(node3Stat=='Online'){
        setTimeout(setStatusN3, 30000);
    }
    if(node4Stat=='Online'){
        setTimeout(setStatusN4, 30000);
    }
        
    
    //GANTI STATUS    
    function setStatusN1() {
        node1Stat='Offline'
        node1Sens!='Not Sensing'
    }
    function setStatusN2() {
        node2Stat='Offline'
        node1Sens!='Not Sensing'
    }
    function setStatusN3() {
        node3Stat='Offline'
        node1Sens!='Not Sensing'
    }
    function setStatusN4() {
        node4Stat='Offline'
        node1Sens!='Not Sensing'
    }
    
    
  
 

</script>
