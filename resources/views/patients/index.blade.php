<x-app-layout>

  

            <div  style="border-bottom:1px dashed #ccc; padding:10px" >
                <div class="card-title">
                    <div class="col-md-12 mt-4">
                        <div class="float-start">
                            <h4 class="text-left">Manage Patients Here.</h4>
                        </div>
                        <div class="float-end">
                            <span class="float-right">
                                 <a href="{{ route('patient.create') }}"
                                    class="btn btn-primary btn-xs float-right"
                                    data-bs-toggle="modal"
                                    data-bs-target="#addPatients">
                                    <i class="mdi mdi mdi-plus-circle-outline"></i>Add patients</a>
                            </span>

                        </div>
                     </div>
                  </div>
                  <div class="card-content">
                    <table id="dataTable"   class="table table-striped table-bordered w-100" style="border-collapse: collapse; border-spacing: 0; width: 100%;"> 
                        <thead>
                            <th scope="col">Id</th>
                             <th scope="col">first_name</th>
                            <th scope="col">last_name</th> 
                            <th scope="col">age</th> 
                            <th scope="col">date_of_birth</th> 
                            <th scope="col">sex</th> 
                            <th scope="col">race</th> 
                            <th scope="col">sex</th> 
                            <th scope="col">ethnicity</th> 
                            <th scope="col">born_in_us</th> 
                            <th scope="col">country_of_birth</th>
                            <th scope="col"><i class="mdi mdi-view-sequential" style="font-size: 20px"></i></th>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                   <td>{{$record->id}}</td>
                                   <td>{{$record->first_name}}</td>
                                   <td>{{$record->last_name}}</td>
                                   <td>{{$record->age}}</td> 
                                   <td>{{$record->date_of_birth}}</td> 
                                   <td>{{$record->sex}}</td> 
                                   <td>{{$record->race}}</td> 
                                   <td>{{$record->sex}}</td> 
                                   <td>{{$record->ethnicity}}</td> 
                                   <td>{{$record->born_in_us}}</td> 
                                   <td>{{$record->country_of_birth}}</td>
                                    <td> <a class="btn btn-primary btn-sm" href="{{ route('patient.edit',['patient'=>$record->id])}}">Edit</a></td>
                                    <td> 
                                        <form method="POST" action="{{ route('patient.destroy', $record->id) }}">
                                            @csrf
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom"> Delete
                                            </button>
                                        </form>
                                       
                                    </td>

                                       
                                    

                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                  </div>
    
</x-app-layout>
        