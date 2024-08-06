@extends('layouts.app')
@section('content')
    
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<div class="seaction">
    <div class="row">
      <div class="col s12 m12 l12">
        <div id="basic-form" class="card card card-default scrollspy">
          <div class="card-content">
            <h4 class="card-title">Course Form</h4>
            <form class="course_form" id="course_form" action="#" method="post">
              @csrf
              <div class="row">
                <div class="input-field col s6">
                  <input id="course_name" type="text" name="course_name" required>
                  <label for="course_name">Course Name</label>
                  <span id="course_name_error"></span>
                </div>
                <div class="input-field col s6">
                  <input id="duration" type="text" name="duration" required>
                  <label for="duration">Duration</label>
                  <span id="duration_error"></span>
                </div>
              </div>
              <div class="row">
                  <div class="input-field col s6">
                  <select name="status" id="status" class="select2 browser-default" required>
                        <option value="1">Enable</option>
                        <option value="0">Disable</option>
                    </select>
                    <!-- <label>Hostel</label> -->
                </div>
              </div>
              <div class="row">
                  <div class="row">
                      <div class="input-field col s12">
                          <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              <i class="material-icons right">send</i>
                            </button>
                            <a href="#"class="btn waves-effect waves-light left btn-danger" type="submit" name="action">Back</a>
                        </div>
                </div>
            </div>
        </form>
          </div>
        </div>
    </div>  
</div>
</div>
@endsection
