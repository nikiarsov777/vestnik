<h5>{{__('Категории')}}</h5>
<ul class="list-group">
<?php
$class = '';
$num = 1;
?>
@if(isset($allCategories))
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('Име')}}</th>
            <th scope="col">{{__('Родител')}}</th>
            <th scope="col">{{__('Активен')}}</th>
            <th scope="col">{{__('Да се показва')}}</th>
            <th scope="col">{{__('Подредба')}}</th>
            <th scope="col">{{__('Път')}}</th>
        </tr>
        </thead>
    @foreach($allCategories as $category)
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
                    <a href="/admin/categories/{{$category->id}}">{{$category->name}}</a>
                </td>
                <td >
                    <a href="/admin/categories/{{$category->id}}">
                        @if($category->parent_id != null)
                            {{$categoriesById[$category->parent_id]->name}}
                        @endif
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category->id}}">
                        @if($category->active)
                            <span class="glyphicon glyphicon-ok"></span>
                        @endif
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category->id}}">
                        @if($category->show)
                            <span class="glyphicon glyphicon-ok"></span>
                        @endif
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category->id}}">
                        <span class="">{{$category->order}}</span>
                    </a>
                </td>
                <td>
                    <a href="/admin/categories/{{$category->id}}">
                        <span class="">{{$category->slug}}</span>
                    </a>
                </td>
            </tr>
            <?php
            $num++;
            ?>
    @endforeach
    </table>
@endif
</ul>
