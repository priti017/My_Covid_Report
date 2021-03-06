@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                             @if (Session::has('message'))
                            <div class="alert alert-success">
                              {{Session::get('message')}}
                            </div>
                             @endif

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Report</button>
                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <form method="POST" action="{{ route('PujaCovid.store') }}" class="col-md-12 " enctype="multipart/form-data">@csrf
                          
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" class="form-control" name="name"  placeholder="Name">
                            </div>

                            <div class="form-group">
                              <label>Area</label>
                              <select name="area" id="" class="form-control">
                                  <option value="Cumilla">Cumilla</option>
                                  <option value="Chittagong">Chittagong</option>
                                  <option value="Dhaka">Dhaka</option>
                                  <option value="Rangpur">Rangpur</option>
                                  <option value="Noakhali">Noakhali</option>
                                  <option value="Barishal">Barishal</option>
                                  <option value="Others">Others</option>
                               </select>
                            </div>

                            <div class="form-group">
                              <label>Symptoms</label>
                                  <textarea  name="symptoms" class="form-control" placeholder="symptoms" rows="10" cols="50">
                                  </textarea>
                            </div>

                            <div class="form-group">
                              <label>Date</label>
                              <input type="date" class="form-control" name="date">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>


                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection