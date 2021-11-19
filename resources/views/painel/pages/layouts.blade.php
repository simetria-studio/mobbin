
@extends('layouts.painel')


@section('content')
<div class="iq-card-body">
    <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
    <table class="table table-dark">
       <thead>
          <tr>
             <th scope="col">#</th>
             <th scope="col">First</th>
             <th scope="col">Last</th>
             <th scope="col">Handle</th>
          </tr>
       </thead>
       <tbody>
          <tr>
             <th scope="row">1</th>
             <td>Mark</td>
             <td>Otto</td>
             <td>@mdo</td>
          </tr>
          <tr>
             <th scope="row">2</th>
             <td>Jacob</td>
             <td>Thornton</td>
             <td>@fat</td>
          </tr>
          <tr>
             <th scope="row">3</th>
             <td>Larry</td>
             <td>the Bird</td>
             <td>@twitter</td>
          </tr>
       </tbody>
    </table>
 </div>
@endsection
