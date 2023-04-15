@extends('layouts.admin')

@section('content')


          <!-- Striped Table -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Striped Table</h3>
              <div class="block-options">
                <div class="block-options-item">
                <button type="button" 
              class="btn btn-sm btn-secondary" 
              data-bs-toggle="modal" 
              data-bs-target="#modal-popin"><i class="fa fa-plus"></i></button>
                  <a href="{{ route('web.organisation.store') }}" 
                  >  
                </a>
                </div>
              </div>
            </div>
            <div class="block-content">
              <table class="table table-striped table-vcenter">
                <thead> 
                  <tr>
                    <th class="text-center" style="width: 50px;"></th>
                    <th>Legal name</th>
                    <th>Source</th>
                    <th>INN</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($organisations as $org)
                  <tr>
                    <td class="text-center" style="width: 50px;"></td>
                    <td>{{ $org->legal_name }}</td>
                    <td>{{ $org->source }}</td>
                    <td>{{ $org->inn }}</td>
                    <td class="text-center">
                      <div class="btn-group">
                      <a href="{{ route('web.organisation.show', $org->id) }}" type="button" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Show">
                          <i class="fa fa-eye"></i>
                        </a>
                        <button type="button" 
                            class="btn btn-sm btn-secondary" 
                            data-bs-toggle="modal" 
                            data-bs-target="#modal-popin-{{ $org->id }}"><i class="fa fa-pencil"></i></button>
                        <form action="{{ route('web.organisation.destroy', $org->id) }}" method="POST">
                            @csrf  
                            @method('DELETE')         
                        <button type="submit" class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Delete">
                          <i class="fa fa-times"></i>
                        </button>
                        </form>
                      </div>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
              {{ $organisations->links('vendor.pagination.my') }}
            </div>
          </div>
          <!-- END Striped Table -->
          @include('admin.components.create_organisation')
          

  @foreach($organisations as $t)
      @include('admin.components.edit_organisation', ['organisation' => $t])
  @endforeach

@endsection