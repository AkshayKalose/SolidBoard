@extends('app')

@section('title', 'Create Task')

@section('content')
<div class="container">
 <div class="row">
    <form class="col s12" role="form" method="POST" action="{{ URL::action('TaskController@store') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="row">
        <div class="input-field col s12">
          <i class="mdi-action-assignment prefix"></i>
          <input name="title" id="title" type="text" class="validate" value="{{ old('title') }}">
          <label for="title">Title</label>
        </div>
      </div>
      <div class="row">
      	<div class="input-field col s6">
      	  <i class="mdi-notification-event-note prefix"></i>
      	  <label for="due">Due Date</label>
          <input name="due" id="due" type="date" class="datepicker" value="{{ old('due') }}">
        </div>
        <div class="input-field col s6">
          <select name="priority" id="priority">
            <option value="1">Low</option>
            <option value="2" selected>Medium</option>
            <option value="3">High</option>
          </select>
          <label for="priority">Priority</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <i class="mdi-action-subject prefix"></i>
          <textarea id="description" name="description" class="materialize-textarea">{{ old('description') }}</textarea>
          <label for="description">Description</label>
        </div>
      </div>
      <div class="row">
				<div class="input-field col s12">
					<button type="submit" class="waves-effect waves-light btn right">Create</button>
				</div>
			</div>
    </form>
  </div>
</div>
@endsection

@section('morejs')
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});

$(document).ready(function() {
  $('select').material_select();
});
@endsection