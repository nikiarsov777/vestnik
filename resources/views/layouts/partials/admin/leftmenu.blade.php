<div class="card">
    <div class="card-body">
        <h2>{{__('Меню')}}</h2>
        <ul class="vertical-menu">
            <li><a href="/admin/users">{{ __('Потребители') }}</a></li>
            <li><a href="/admin/categories">{{ __('Категории') }}</a></li>
        </ul>
    </div>
    <div class="card-body">
        <h2>{{__('Статии')}}</h2>
        <ul class="vertical-menu">
            @foreach ($categories as $category)
                @if ($category->parent_id == null)
                    @if (isset($subCategories[$category->id]))
                        <li class='sub-menu'>
                            <a href="#" id="btn-{{$category->id}}" data-toggle="collapse" data-target="#submenu_{{$category->id}}" aria-expanded="false">
                                {{ $category->name }}
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </a>
                            <ul class="nav collapse offset-2 " id="submenu_{{$category->id}}" role="menu" aria-labelledby="btn-{{$category->id}}">
                                @foreach ($subCategories[$category->id] as $subCategory)
                                    <li><a href="/admin/categories/{{strtolower($subCategory->slug)}}">{{$subCategory->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @else
                        <li><a href="#">{{ $category->name }}</a></li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
</div>
