@extends('backend.lay')
@section('title', 'Dr. Swati Ghosh: Healing through Homeopathy in Dhunela, Sohna | Ghosh Clinic - Call 8478019973')
  
<link rel="stylesheet" href={{ url('css/product/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}>

<link rel="stylesheet" href={{ url('css/product/assets/css/style.css') }}>

@section('content')

<div class="container">
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Personal Record</h1>
                    </div>
                    <div class="card-body">
        
            @if (session('info'))
              <div class="alert alert-success">
                 {{ session('info') }}
              </div>
            @endif
          
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Pid</th>
                <th scope="col">Disease</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>

            <tbody>
                    @if ( count($personal_records) > 0)
                    @foreach ($personal_records as $personal_record)
                        
                    
              <tr class="table-active">
                <td>{{$personal_record->record_id}}</td>
                <td>{{$personal_record->date}}</td>
                <td>{{$personal_record->patient_id}}</td>
                <td>{{$personal_record->disease}}</td>
                <td>{{$personal_record->description}}</td>
                <td>
                <a href='{{url("/read_per/{$personal_record->record_id}")}}' class="label label-primary"> Read </a>|
                <a href='{{url("/update_per/{$personal_record->record_id}")}}' class="label label-success"> Update </a>|
                <a href='{{url("/delete_per/{$personal_record->record_id}")}}' class="label label-danger"> Delete </a>
                </td>
              </tr>
                    @endforeach
                        
                    @endif
                
            </tbody>
          </table> 
        </table>
      </div>
  </div>
</div>


</div>
</div>
</div>
</div>

   
<a href="{{ url('/create_per') }}" class="btn btn-primary">Create</a>
<a href="{{ url('/report_per') }}" class="btn btn-primary">Generate Report</a>
<script src={{ url('css/product/vendors/jquery/dist/jquery.min.js') }}></script>
<script src={{ url('css/product/vendors/popper.js/dist/umd/popper.min.js') }}></script>
<script src={{ url('css/product/vendors/bootstrap/dist/js/bootstrap.min.js') }}></script>
<script src={{ url('css/product/assets/js/main.js') }}></script>


<script src={{ url('css/product/vendors/datatables.net/js/jquery.dataTables.min.js') }}></script>

<script src={{ url('css/product/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}></script>

<script src={{ url('css/product/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}></script>

<script src={{ url('css/product/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}></script>

<script src={{ url('css/product/vendors/jszip/dist/jszip.min.js') }}></script>


<script src={{ url('css/product/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}></script>

<script src={{ url('css/product/vendors/datatables.net-buttons/js/buttons.print.min.js') }}></script>

<script src={{ url('css/product/vendors/datatables.net-buttons/js/buttons.colVis.min.js') }}></script>

<script src={{ url('css/product/assets/js/init-scripts/data-table/datatables-init.js') }}></script>


@endsection