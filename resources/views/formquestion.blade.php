@extends('master')

@section('tabel')

<div class="card-body">
                <form role="form" >
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>isi</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                    <div class="row">
                    <div class="col-sm-6">                    
                    <button type="button" class="btn btn-block btn-primary btn-flat">Submit</button> </div>
                    <div class="col-sm-6">
                    <button type="reset" class="btn btn-block btn-danger btn-flat">Cancel</button>
                    </div>
                    </div>
                  </div>
                </form>
              </div>
@endsection