<div id="category_pagination" class="sm-responsive-table">
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            @if(Gate::check('category_delete') || Gate::check('category_edit'))
            <th>Action</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @if($categories->count()==!0)
        @foreach($categories as $category)
            <tr>
                <td><span class="small-tab-width">{{$category->title}}</span></td>
                <td><span class="small-tab-width">{{$category->description}}</span></td>
                @if(Gate::check('category_delete') || Gate::check('category_edit'))
                <td class="table-action">
                    <span class="action-width">
                        @can('category_delete',Auth::user())
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Delete" class="delete-message" data-id="{{$category->id}}">Del</a>
                        @endcan
                        @can('category_edit',Auth::user())
                    <a href="javascript:void(0)" class="edit_category" data-toggle="modal" data-target="#modal-default" data-id="{{$category->id}}" data-title="{{$category->title}}" data-slug="{{$category->slug}}" data-description="{{$category->description}}">Edit</a>
                        @endcan
                    </span>
                </td>
                @endif
            </tr>
        @endforeach
            @else
           <tr>
               <td colspan="3">No Result Found</td>
           </tr>
        @endif
        </tbody>
    </table>
    {!! $categories->links() !!}
</div>
