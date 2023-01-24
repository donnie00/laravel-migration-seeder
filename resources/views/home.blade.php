<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Migration-Seeder</title>

   @vite('resources/js/app.js')

</head>

<body>

   {{-- @foreach ($trains as $train)
      @dump($train)
   @endforeach --}}



   <div class="container">
      <h1>
         Train Dates
      </h1>


      <table class="table table-dark table-striped table-bordered align-middle">
         <thead class="align-middle table-secondary">
            <th>Compagnia</th>
            <th>Stazione di partenza</th>
            <th>Stazione di arrivo</th>
            <th>Partenza</th>
            <th>Arrivo</th>
            <th>Codice treno</th>
            <th>Vagoni</th>
            <th>Info</th>
         </thead>
         <tbody>
            @foreach ($trains as $train)
               <tr @class([
                   'table-danger' => $train->deleted,
                   'table-warning' => !$train->in_time,
               ])>
                  <td>{{ $train->company }}</td>
                  <td>{{ $train->departure_station }}</td>
                  <td>{{ $train->arrival_station }}</td>
                  <td>{{ $train->departure_hour }}</td>
                  <td>{{ $train->arrival_hour }}</td>
                  <td>{{ $train->train_code }}</td>
                  <td>{{ $train->carriages }}</td>
                  <td>
                     @if ($train->in_time && !$train->deleted)
                        -
                     @elseif ($train->deleted)
                        <span class="text-danger">C</span>
                     @elseif(!$train->in_time)
                        <span class="text-warning">R</span>
                     @endif
                  </td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
</body>

</html>
