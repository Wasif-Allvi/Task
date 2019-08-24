@extends('layouts.app')

@section('content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          You are logged in!

           <br><br>
         <select  id="nameid" style="width: 200px">

          <option>Select Aisle</option>

          @foreach($data as $d)
          <option>{{$d->aisle}}</option>
          @endforeach     

        </select>

          <br>
          <br>

          <tr>

            <td>
             <input type="text" class="form-control filter-input" placeholder="Max Price.." data-colummn="0"/>
           </td>
           
         </tr>
         <br>

          <br><br>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Category</th>
              <th scope="col">Aisle</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $row)
            <tr>
              <th scope="row">{{$row->it_id}}</th>
              <td>{{$row->it_name}} </td>
              <td>{{$row->price}} </td>
              <td>{{$row->cat_name}} </td>
              <td>{{$row->aisle}} </td>
              
            </tr>
            @endforeach
          </tbody>
          
        </table>
        {{$data->links()}}
      </div>

 




    </div>
  </div>
</div>
</div>

@endsection

