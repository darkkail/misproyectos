<!Doctype html>
<html>
<head>
    <title>Webpay</title>
    <link href = "css/bootstrap.min.css" rel="stylesheet">"
</head>
<body>
    <div class ="container">
        <div class="col-med-6 col-med-offset-3">
            <h3>compra exitosa</h3>
            <table class ="table table-striped table-hover">
                <thead><tr><th>Campo</th><th>Valor</th></tr></thead>
                <tbody>
                <tr>
                <td>Monto</td>
                <td id ="amount"></td>
                </tr>
                <tr>
                <td>Código de autorización</td>
                <td id ="authorizationCode"></td>
                </tr>
                <tr>
                <td>Código de respuesta</td>
                <td id ="responseCode"></td>
                </tr>
                </tbody>    
            </table>
        </div>
     </div>     
     <script>
      document.getElementById('amount').innerHTML = window.localStorage.getItem('amount');
      document.getElementById('authorizationCode').innerHTML = window.localStorage.getItem('authorizationCode');
      document.getElementById('responseCode').innerHTML = window.localStorage.getItem('responseCode');
     </script>      
</body>
</html>
