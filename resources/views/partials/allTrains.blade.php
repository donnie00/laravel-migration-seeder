<h1 class="my-3">
   All trains
</h1>


<table class="table table-info table-bordered text-center align-middle">
   <thead class="table-secondary">
      <th>Compagnia</th>
      <th class="border-0">Partenza</th>
      <th class="border-0"></th>
      <th class="border-0">Arrivo</th>
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
            <td class="border-0">
               <div class="text-center">
                  <p>{{ $train->departure_station }}</p>
                  <span>{{ date('d-m-Y, H:i', strtotime($train->departure_hour)) }}</span>
               </div>
            </td>
            <td class="border-0">
               <div>
                  &rightarrow;
               </div>
            </td>
            <td class="border-0">
               <p>{{ $train->arrival_station }}</p>
               <span>{{ date('d-m-Y, H:i', strtotime($train->arrival_hour)) }}</span>
            </td>
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
