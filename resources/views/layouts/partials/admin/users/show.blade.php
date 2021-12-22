<div class="row">
    <div class="col-lg-11">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">{{ __('Регистрация') }}</h1>
            </div>
            <form class="user" method="POST" action="{{ route('register') }}">
            @csrf

            <!--Schools-->
                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="school">{{ __('Училище:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input id="school" name="school" class="form-control form-control-user">
                        <input id="school_id" name="school_id" type="hidden">
                        @error('school')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>
                <!--/Schools-->
            {{--                                        <div class="form-group col-lg-12"> </div>--}}

            <!--Classes-->
                <div class="h4 row">
                    <div class="col-lg-4">
                        <label class=" leb-lg-12" for="class_name">{{ __('Паралелка:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <select id="class_name" class="form-control form-control-user "  name="class_name">
                            <option value="0">{{ __('Избери паралелка') }}</option>
                            <option value="1">А</option>
                            <option value="2">Б</option>
                            <option value="3">В</option>
                            <option value="4">Г</option>
                            <option value="5">Д</option>
                            <option value="6">Е</option>
                            <option value="7">Ж</option>
                            <option value="8">З</option>
                        </select>
                        @error('class_name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>

                </div>
                <!--/Classes-->

                <?php
                /*
                <div class="form-group  col-lg-12"> </div>
            <!-- ======================== -->
{{--                                        <div class="form-group text-center">--}}
{{--                                            <label class="h8">Enter State: </label><input id="USstate" class="form-control form-control-user mb-2">--}}
{{--                                        </div>--}}
            <!-- Nav schools -->
            <div class="btn-group navbar-nav col-lg-12">
                <button type="button" class="btn btn-info dropdown-toggle"

                        onclick="toggleClick('school')" id="button-school">
                    Училища
                </button>
                <input type="hidden" id="school" value="" name="school">
                <ul class="dropdown-menu nav-item active" id="menu-school">
                    <li><a class="dropdown-item" href="#" id="1">35 Паисий Хилендарски</a></li>
                    <li><a class="dropdown-item" href="#" id="2">22 Асен Златаров</a></li>
                    <li><a class="dropdown-item" href="#" id="3">33 Петър Берон</a></li>
                    <li><a class="dropdown-item" href="#" id="4">133 Александър Пушкин</a></li>
                    <li><a class="dropdown-item" href="#" id="5">144 Народни Будители</a></li>
                </ul>
                @error('school')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- //Nav schools -->
            <div class="form-group  col-lg-12"></div>
            <!-- Nav paralelki -->
            <div class="btn-group navbar-nav  col-lg-12">
                <button type="button" class="btn btn-danger dropdown-toggle"

                        onclick="toggleClick('group')" id="button-group">
                    Паралелка
                </button>
                <input type="hidden" id="group" value="" name="group">
                <ul class="dropdown-menu nav-item active" id="menu-group">
                    <li><a class="dropdown-item" href="#" id="1">Паралелка А</a></li>
                    <li><a class="dropdown-item" href="#" id="2">Паралелка Б</a></li>
                    <li><a class="dropdown-item" href="#" id="3">Паралелка В</a></li>
                    <li><a class="dropdown-item" href="#" id="4">Паралелка Г</a></li>
                    <li><a class="dropdown-item" href="#" id="5">Паралелка Д</a></li>
                    <li><a class="dropdown-item" href="#" id="6">Паралелка Е</a></li>
                    <li><a class="dropdown-item" href="#" id="7">Паралелка Ж</a></li>
                    <li><a class="dropdown-item" href="#" id="7">Паралелка З</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#" id="8">Други</a></li>
                </ul>
                @error('group')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <!-- //Nav paralelki -->
*/
                ?>

                <div class="h4 row">
                    <div class="col-lg-4 ">
                        <label class=" leb-lg-12" for="email">{{ __('Ел. поща:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="email" class="form-control form-control-user"
                               id="email" aria-describedby="emailHelp"
                               placeholder="{{ __('E-Mail') }}"
                               class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4">
                        <label class=" leb-lg-12" for="first_name">{{ __('Име:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="name" class="form-control form-control-user"
                               id="first_name" aria-describedby="nameHelp"
                               placeholder="{{ __('Име') }}"
                               class="form-control form-control-user
                                                @error('first_name') is-invalid @enderror" name="first_name"
                               value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                        @error('first_name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4">
                        <label class=" leb-lg-12" for="last_name">{{ __('Фамилия:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="name" class="form-control form-control-user"
                               id="last_name" aria-describedby="last_nameHelp"
                               placeholder="{{ __('Фамилия') }}"
                               class="form-control form-control-user
                                            @error('last_name') is-invalid @enderror" name="last_name"
                               value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                        @error('last_name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4">
                        <label class=" leb-lg-12" for="password">{{ __('Парола:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="password" class="form-control form-control-user"
                               id="password" aria-describedby="passwordHelp"
                               placeholder="{{ __('Парола') }}"
                               class="form-control form-control-user
                                               @error('password') is-invalid @enderror" name="password"
                               value="{{ old('password') }}" required autocomplete="new-password" autofocus>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                </div>

                <div class="h4 row">
                    <div class="col-lg-4">
                        <label class=" leb-lg-12" for="password-confirm">{{ __('Повтори паролата:') }}</label>
                    </div>
                    <div class="col-lg-8">
                        <input type="password" class="form-control form-control-user"
                               id="password-confirm" aria-describedby="password-confirmHelp"
                               placeholder="{{ __('Повтори паролата') }}"
                               class="form-control form-control-user
                                               @error('password_confirmation') is-invalid @enderror" name="password_confirmation"
                               value="{{ old('password') }}" required autocomplete="new-password" autofocus>
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror

                    </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    {{ __('Запази') }}
                </button>
                <hr>
            </form>

        </div>
    </div>
</div>
