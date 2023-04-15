<!-- Pop In Modal -->

<div class="modal fade" id="modal-popin-{{ $tag->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-popin" aria-hidden="true">
            <div class="modal-dialog modal-dialog-popin" role="document">
              <div class="modal-content">
                <div class="block block-rounded shadow-none mb-0">
                  <div class="block-header block-header-default">
                    <h3 class="block-title">Create Tag</h3>
                    <div class="block-options">
                      <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <form action="{{ route('web.tag.update', ['tag' => $tag->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="container">
                        <div class="mb-4">
                          <label class="form-label" for="example-text-input">
                            Name
                          </label>
                          <input type="text" 
                          value="{{ $tag->name }}" 
                          class="form-control" 
                          id="example-text-input" 
                          name="name" 
                          placeholder="Text Input">
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
     