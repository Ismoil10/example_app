@extends('layouts.admin')

@section('css')
    <style>
        .data {
            display: inline;
        }
        .value {
            display: inline;
            width: 50%;
        }
    </style>
@endsection

@section('content')

<div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">{{ $organisation->legal_name }}</h3>
            </div>
            <div class="block-content">
                <div class="row push">
                  <div class="col-lg-4">
                  </div>
                  <div class="col-lg-8 col-xl-5">
                    @include('admin.components.key_val', [
                        'key' => 'Organisation legal name',
                        'value' => $organisation->legal_name
                        ])
                    @include('admin.components.key_val', [
                        'key' => 'source',
                        'value' => $organisation->source
                        ])
                    @include('admin.components.key_val', [
                        'key' => 'inn',
                        'value' => $organisation->inn
                        ]) 
                    @include('admin.components.key_val', [
                        'key' => 'head person name',
                        'value' => $organisation->head_person_name
                        ])
                    @include('admin.components.key_val', [
                        'key' => 'description',
                        'value' => $organisation->description
                        ])   
                    <div class="mb-4">
                      <label class="form-label" for="example-text-input">Description</label>
                      <textarea type="text" 
                      value="{{ $organisation->description }}" 
                      class="form-control" 
                      id="example-text-input" 
                      name="description" 
                      placeholder="Text area..." disabled>{{ $organisation->description }}</textarea>
                    </div>
                    <div class="mb-4">
                      <label class="form-label" for="example-textarea-input">Comments</label>        
                    </div>
                    <div class="mb-4" style="display:flex; justify-content:end;">
                        @foreach($organisation->comments as $c)
                        @include('admin.components.comment', ['comment' => $c])
                        {{ $c->body }} 
                        @endforeach       
                    </div>     
                  </div>
              </div>
            </div>
          </div>
          <!-- END Basic -->

@endsection