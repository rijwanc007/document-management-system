<div id="contact_row">
    <div class="contacts row" >
         @if($contact_information->count()==!0)
        @foreach($contact_information as $information)
            <div class="col-xl-2 col-lg-3 col-sm-4 col-6 contact-container">
                <div class="contacts__item">
                    <a href="{{route('contact.show',$information->first_name.'_'.$information->last_name.'_'.$information->id)}}" target="_blank" class="contacts__img">
                        <img src="{{url('aegis_files/contact_image/'.$information->contact_pic)}}" alt="">
                    </a>
                    @can('contact_delete',Auth::user())
                    <span class="zmdi zmdi-close-circle-o delete-message" data-id="{{$information->id}}"></span>
                    @endcan
                    @can('contact_edit',Auth::user())
                    <a class="profile-edit text-uppercase data_edit" data-edit="{{$information->id}}" data-toggle="modal" data-target="#profile-edit">
                        <span>Edit</span>
                    </a>
                    @endcan
                    <div class="contacts__info">
                        <a href="{{route('contact.show',$information->first_name.'_'.$information->last_name.'_'.$information->id)}}" target="_blank"><strong>{{$information->first_name}} {{$information->last_name}}</strong></a>
                        <small>{{$information->email_address}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <div class="no-result-div">no result found</div>
        @endif
    </div>
{!! $contact_information->links() !!}
    <a href="{{route('contact.create')}}" class="btn btn-light btn--action btn--fixed"><i class="zmdi zmdi-plus"></i></a>
</div>

