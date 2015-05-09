@extends('app')

@section('title', 'My Tasks')

@section('content')
<div class="container">
    <ul class="collection">
        <!--<li class="collection-header"><h4>My Tasks</h4></li>-->
        @foreach($tasks as $task) 
         <li class="collection-item avatar">
             <i class="mdi-action-star-rate circle {{ ($task->priority == 1) ? 'yellow' : ($task->priority == 2 ? 'orange' : 'red') }}"></i>
             <span class="title" style="font-weight: bold;">{{ $task->title }}</span>
             <p>
                 Due: {{ $task->due }}
             </p>
             <form method="POST" action="{{ URL::action('TaskController@destroy', $task->id) }}" accept-charset="URF-8">
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
                 <input name="_method" type="hidden" value="DELETE">
                 <button type="submit" class="secondary-content mdi-action-delete right"></button>
             </form>
        </li>
        @endforeach
     </ul>
    <a href="{{ URL::action('TaskController@create') }}" class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-content-add"></i></a>
</div>
@endsection

@section('morejs')
$(document).ready(function(){
$('.collapsible').collapsible({
  accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
});
});
@endsection