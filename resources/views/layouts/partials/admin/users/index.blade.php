<h5>{{__('Потребители')}}</h5>
<ul class="list-group">
<?php
$class = '';
$num = 1;
?>
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
        <li class="list-group-item list-group-item-action {{$class}}">
            <a href="/admin/users/{{$user->id}}">{{$user->first_name}} {{$user->last_name}} ({{$user->email}})</a>
        </li>
        <?php
            $num++;
        ?>
    @endforeach
</ul>
