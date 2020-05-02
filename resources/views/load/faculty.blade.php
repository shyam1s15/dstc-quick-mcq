@foreach ($professors as $professor)

<li class="list-group-item d-flex justify-content-between align-items-center">
    <form class="p-1 grey-text">

        <i class="fas fa-trash-alt red-text mr-2"></i><label class="required">prof.{{ $professor->f_name }}</label>

        <span class="ml-5"> {{ $professor->f_email }} </span>
    </form>
</li>

@endforeach