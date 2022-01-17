<div class="row">
    <div class="col-lg-11">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Категория') }}</h1>
            </div>
            <form class="user" method="POST" action="{{ route('categories.update', request()->route('name')) }}">
            @csrf


                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="name">{{ __('Име:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        @if(Auth::user()->isAdmin())
                            <input type="text"
                                   id="name" aria-describedby="nameHelp"
                                   placeholder="{{ __('Име') }}"
                                   class="form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ $category->name }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        @else
                            <span
                                class="col-form-label-sm">
                                {{ $category->name }}
                            </span>

                        @endif
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="name">{{ __('Път:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        @if(Auth::user()->isAdmin())
                            <input type="text"
                                   id="slug" aria-describedby="slugHelp"
                                   placeholder="{{ __('Път') }}"
                                   class="form-control form-control-user @error('slug') is-invalid @enderror" name="slug" value="{{ $category->slug }}" required autocomplete="slug" autofocus>

                            @error('slug')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        @else
                            <span
                                class="col-form-label-sm">
                                {{ $category->slug }}
                            </span>

                        @endif
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="active">{{ __('Активен:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        @if(Auth::user()->isAdmin())
                            <input type="checkbox"
                                   id="active" aria-describedby="activeHelp"
                                   placeholder="{{ __('Име') }}"
                                   class="form-control-sm form-check-input" name="active"
                                   @if($category->active) checked @endif
                                   value="1" autofocus>

                            @error('active')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        @else
                            <span
                                class="col-form-label-sm">
                                {{ $category->active }}
                            </span>

                        @endif
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="show">{{ __('Да се показва:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        @if(Auth::user()->isAdmin())
                            <input type="checkbox"
                                   id="show" aria-describedby="showHelp"
                                   placeholder="{{ __('Да се показва') }}"
                                   class="form-control-sm form-check-input" name="show"
                                   @if($category->show) checked @endif
                                   value="1" autofocus>

                            @error('show')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        @else
                            <span
                                class="col-form-label-sm">
                                {{ $category->show }}
                            </span>

                        @endif
                    </div>
                </div>


                <div class="h4 row">
                    <div class="col-lg-4">
                        <button type="reset" class="btn btn-danger btn-user btn-block">
                            {{ __('Откажи') }}
                        </button>
                    </div>
                    <div class="col-lg-8">
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            {{ __('Запази') }}
                        </button>
                    </div>
                    <hr>
                </div>
            </form>

        </div>
    </div>
</div>
