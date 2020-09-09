@if ($todo->completed)
    <span onclick="event.preventDefault();document.getElementById('form-incomplet-{{$todo->id}}').submit()" class="fas fa-check text-teal-500 cursor-pointer px-2"></span>
    <form style="display:none" id="{{'form-incomplet-' . $todo->id}}" method="post" action="{{ route('todo.incomplete', $todo->id) }}">
    @csrf
    @method('delete')
    </form>
@else
    <span onclick="event.preventDefault();document.getElementById('form-complet-{{$todo->id}}').submit()" class="fas fa-check text-gray-300 cursor-pointer px-2"></span>
    <form style="display:none" id="{{'form-complet-' . $todo->id}}" method="post" action="{{ route('todo.complete', $todo->id) }}">
    @csrf
    @method('put')
    </form>
@endif