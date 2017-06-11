<!DOCTYPE html>
<html>
<head>
    <title> sds </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="{{'css/home.css'}}" type="text/css">
    
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
</head>
<body class="fluid-container">
@include('layout.navbar')
<div class="col-xs-offset-4  col-xs-4">
    <table id="importshopselector" align="center" name="firsttable">
    <tbody name="firsttbody">
    <form action="{{url('/importshop/result')}}"  method="POST" id="importshop" enctype="multipart/form-data">
        {{ csrf_field() }}
        </form>
    <col width="20%">
    <col width="80%">
    <tr><th colspan="2">店家資訊</th></tr>
    <tr><td>店名</td><td><input type="text" form="importshop" name="shopname"></td></tr>
    <tr><td>電話</td><td><input type="text" form="importshop" name="telephone"></td></tr>
    <tr><td>住址</td><td><input type="text" form="importshop" name="address"></td></tr>
    <tr><td>營業時間</td><td><input type="number" name="hourfrom" min="0" max="24" form="importshop">
            :<input type="number" name="minfrom" min="0" max="60" form="importshop">
            ~<input type="number" name="hourto" min="0" max="24" form="importshop">
            :<input type="number" name="minto" min="0" max="60" form="importshop">
    </td></tr>
    <tr><td>粉專/官網</td><td><input type="text" name="website" form="importshop"></td></tr>
    </tbody>
</table>
    <table id="importshopselector">
        <tbody>
        <col width="50%"><col width="50%">
        <tr>
               <td><button onclick="window.location='{{URL::to('/shop')}}'" class="addrowbutton">取消</button></td>
                <td>    
                    <input type="submit" class="addrowbutton" value="提交/輸入食物" form="importshop"></td>
        </tr>
        </tbody>                    
    </table>
    </div> 
</body>
</html>