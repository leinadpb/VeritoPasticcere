<!DOCTYPE html>
    <html lang="en-US">
      <head>
          <meta charset="utf-8">
      </head>
      <body>
          <h2>Nueva solicitud</h2>
          <br>
          <div>
          	<span><b>Nombre: </b>{{ $data['name_from_email'] }}</span><br>
          	<span><b>Apellido: </b>{{ $data['lastname_from_email'] }}</span>
          	<br>
          	<span style="font-size:1.15rem"><b>Asunto: </b>{{ $data['subject_email'] }}</span>
          	<br>
          	<span style="font-size: 1.07rem"><p>
          		{{ $data['message'] }}
          	</p></span>
          </div>
          <p></p>
      </body>
    </html>
