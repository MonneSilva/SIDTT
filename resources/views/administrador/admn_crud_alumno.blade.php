<title>Administrador - Alumno</title>
<h1>Unidades de Aprendizaje</h1>
<table>
  <tr>
    <th>Boleta</th>
    <th>Alumno</th>
    <th>Estado</th>
    <th>Unidad de Aprendizaje</th>
  </tr>

  @foreach($usuario as $us)

  <tr>
    <td> @foreach($us->boleta as $usus)
            {{
              $usus
            }}
        @endforeach
    </td>
    <td> Aber</td>
    <td>NO ASIGNADO</td>
    <td>NO ASIGNADO</td>
     @csrf
  </tr>
  @endforeach
</table>