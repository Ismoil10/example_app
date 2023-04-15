@extends('layouts.admin')

@section('content')

<div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Basic</h3>
            </div>
            <div class="block-content">
              <form action="{{ route('web.organisation.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row push">
                  <div class="col-lg-4">
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Name</label>
                      <input type="text" 
                      value="name" 
                      class="form-control" 
                      id="example-text-input" 
                      name="name" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Source</label>
                      <input type="text" 
                      value="source" 
                      class="form-control" 
                      id="example-text-input" 
                      name="source" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Inn</label>
                      <input type="text" 
                      value="inn" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Location</label>
                      <input type="text" 
                      value="location" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Head person name</label>
                      <input type="text" 
                      value="head_person_name" 
                      class="form-control" 
                      id="example-text-input" 
                      name="inn" 
                      placeholder="Text Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Description</label>
                      <textarea type="text" 
                      value="description" 
                      class="form-control" 
                      id="example-text-input" 
                      name="description" 
                      placeholder="Text Input"></textarea>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-email-input">Email</label>
                      <input type="email" 
                      class="form-control" 
                      id="example-email-input" 
                      name="example-email-input" 
                      placeholder="Emai Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-password-input">Password</label>
                      <input type="password" 
                      class="form-control" 
                      id="example-password-input" 
                      name="example-password-input" 
                      placeholder="Password Input">
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-textarea-input">Textarea</label>
                      <textarea class="form-control" 
                      id="example-textarea-input" 
                      name="example-textarea-input" 
                      rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                    <div class="mb-4" style="display:flex; justify-content:end;">
                      <button class="btn btn-outline-primary" type="submit" name="create">Create</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- END Basic -->

@endsection