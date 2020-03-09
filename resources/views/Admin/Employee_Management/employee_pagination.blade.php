
<div id="pagination">
    <div class="contacts row">
         @if($employees->count()==!0)
        @foreach($employees as $employee)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 contact-container">
                <div class="contacts__item">
                    <a href="{{route('employee.show',$employee->first_name.'_'.$employee->last_name.'_'.$employee->id)}}" target="_blank" class="contacts__img">
                        <img src="{{url('/aegis_files/employee_image/'.$employee->employee_pic)}}" alt="">
                    </a>
                    @can('employee_delete',Auth::user())
                    <span class="zmdi zmdi-close-circle-o delete-message" data-id="{{$employee->id}}"></span>
                    @endcan
                    @can('employee_edit',Auth::user())
                    <a class="profile-edit text-uppercase data_edit" data-edit="{{$employee->id}}" data-toggle="modal" data-target="#profile-edit">
                        <span>Edit</span>
                    </a>
                    @endcan
                    <div class="contacts__info">
                        <a href="{{route('employee.show',$employee->first_name.'_'.$employee->last_name.'_'.$employee->id)}}" target="_blank"><strong>{{$employee->first_name}} {{$employee->last_name}}</strong></a>
                        <small>{{$employee->email}}</small>
                    </div>
                </div>
            </div>
        @endforeach
         @else
        <div class="no-result-div">no result found</div>
        @endif
    </div>
    <a href="{{route('employee.create')}}" class="btn btn-light btn--action btn--fixed"><i class="zmdi zmdi-plus"></i></a>
    {!! $employees->links() !!}
</div>
