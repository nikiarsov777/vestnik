<h5>{{__('Потребители')}}</h5>
<ul class="list-group">
<?php
$class = '';
$num = 1;
?>
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('Име')}}</th>
            <th scope="col">{{__('Майл')}}</th>
            <th scope="col">{{__('Роля')}}</th>
        </tr>
        </thead>

    @foreach($users['users'] as $user)
        @if($num%2)
            <?php
                $class = 'list-group-item-dark';
            ?>
        @else
            <?php
                $class = 'list-group-item-secondary';
            ?>
        @endif
        <tr>
            <td>{{$num}}</td>
            <td >
                <a href="/admin/users/{{$user->id}}">{{$user->first_name}} {{$user->last_name}} ({{$user->email}})</a>
            </td>
            <td>
                <a href="/admin/users/{{$user->id}}">{{$user->email}}</a>
            </td>
            <td>
                <a href="/admin/users/{{$user->id}}">
                @foreach($user->roles as $role)
                    <span>{{$role->name}}</span>
                @endforeach
                </a>
            </td>
        </tr>
        <?php
            $num++;
        ?>
    @endforeach
</ul>
