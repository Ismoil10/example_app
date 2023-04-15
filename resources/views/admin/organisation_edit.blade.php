@extends('layouts.admin')

@section('content')

<div class="block block-rounded">

            <div class="block-header block-header-default">
              <h3 class="block-title">{{ $organisation->legal_name }}</h3>
            </div>
            <div class="block-content">
              <form action="{{ route('web.organisation.update', ['organisation'=>$organisation->id]) }}">
                @csrf
                @method('PUT')
                <div class="row push">
                  <div class="col-lg-4">
                  </div>
                  <div class="col-lg-8 col-xl-5">
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
                    <div class="mb-4" style="display:flex; justify-content:end;">
                      <button class="btn btn-outline-primary" type="submit" name="edit">Edit</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END Basic -->

@endsection