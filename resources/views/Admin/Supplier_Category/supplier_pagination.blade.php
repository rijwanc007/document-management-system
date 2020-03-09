<div id="supplier_pagination">
    <table class="table search_table sup_table">
        <thead>
        <tr>
            <th>S/N </th>
            <th>Logo</th>
            <th>Supplier Name</th>
            <th>Category</th>
            <th>Fill Number</th>
            <th>Supplier Website</th>
            @if(Gate::check('print_supplier') || Gate::check('manage_supplier') || Gate::check('delete_supplier'))
            <th>Manage Supplier</th>
            @endif
            @can('preview_supplier',Auth::user())
            <th>Preview</th>
            @endcan
        </tr>
        </thead>
        <tbody>
        @if($suppliers->count()==!0)
        @php
            $s = ($suppliers->currentpage()-1)* $suppliers->perpage() + 1
        @endphp
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{$s++}}</td>
                <td>
                    @if(!empty($supplier->supplier_logo))
                        <img src="{{url('/aegis_files/supplier_logo/'.$supplier->supplier_logo)}}" class="sup-logo">
                    @endif
                </td>
                <td>
                    <span class="supplier-name">{{$supplier->supplier_name}}</span>
                </td>
                <td>
                    <span class="short-table-text-no-elip" >{{$supplier->supplier_category}}</span>
                </td>
                <td> <span class="taction">{{$supplier->supplier_file_number}}</span></td>
                <td>
                    <a href="{{$supplier->supplier_web_address}}" class="supplier-site" target="_blank">{{$supplier->supplier_web_address}}</a>
                </td>
                @if(Gate::check('print_supplier') || Gate::check('manage_supplier') || Gate::check('delete_supplier'))
                <td>
                    <span class="taction">
                    <span class="taction">
                        @can('print_supplier',Auth::user())
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" data-id="{{$supplier->id}}" data-slug="{{$supplier->supplier_slug}}" data-supplier_image="{{asset('aegis_files/supplier_logo/'.$supplier->supplier_logo)}}" title="Print Supplier Information" class="mr-2 print_supplier_information" data-target="#supplier-preview"><span class="badge badge-success"><span class="zmdi zmdi-print"></span></span></a>
                        @endcan
                        @can('manage_supplier',Auth::user())
                    <span data-toggle="tooltip" data-placement="top" title="Manage"><a href="javascript:void(0)" class="supplier_manage" data-id="{{$supplier->id}}" data-slug="{{$supplier->supplier_slug}}"><span class="badge badge-warning mr-2" data-toggle="modal" data-target="#manage-supplier"><span class="zmdi zmdi-settings"></span></span></a></span>
                        @endcan
                        @can('delete_supplier',Auth::user())
                    <a href="javascript:void(0)" data-toggle="tooltip" data-id="{{$supplier->id}}" data-slug="{{$supplier->supplier_slug}}" data-placement="top" title="Delete" class="delete-message"><span class="badge badge-danger"><span class="zmdi zmdi-delete"></span></span></a>
                        @endcan
                    </span>
                    </span>
                </td>
                @endif
                @can('preview_supplier',Auth::user())
                <td>
                    <button class="btn btn-light supplier_information" data-toggle="modal" data-id="{{$supplier->id}}" data-slug="{{$supplier->supplier_slug}}" data-target="#supplier-preview">Preview</button>
                </td>
                @endcan
            </tr>
        @endforeach
            @else
            <tr>
                <td colspan="8">No Result Found</td>
            </tr>
        @endif
        </tbody>
    </table>
    {!! $suppliers->links() !!}
</div>