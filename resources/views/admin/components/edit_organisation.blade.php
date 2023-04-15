<!-- Pop In Modal -->

<div class="modal fade" id="modal-popin-{{ $organisation->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
              <div class="modal-content">
                <div class="block block-rounded shadow-none mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Edit Organisation</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <form action="{{ route('web.organisation.update', ['id'=>$organisation->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Name</label>
                      <input type="text" 
                      value="{{ $organisation->legal_name }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="name" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Source</label>
                      <input type="text" 
                      value="{{ $organisation->source }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="source" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Inn</label>
                      <input type="text" 
                      value="{{ $organisation->inn }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Location</label>
                      <input type="text" 
                      value="{{ $organisation->location }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Head person name</label>
                      <input type="text" 
                      value="{{ $organisation->head_person_name }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Description</label>
                      <textarea type="text" 
                      value="{{ $organisation->description }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="description" 
                      placeholder="Text Input"></textarea>
                    </div>
                    </div>       
                  <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                      Close
                    </button>
                    <button type="submit" class="btn btn-alt-primary" data-bs-dismiss="modal">
                      Done
                    </button>
                  </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- END Pop In Modal -->
     