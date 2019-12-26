@extends('layouts.index')

@section('styles')
    <style>
        input {
            border-radius: 5px;
            border: 2px solid black;
            box-shadow: 10px 10px 10px 10px rgba(200, 200, 200, 0.5);
            font-size: 25px;
            z-index: 1;
        }

        .oi {
            margin-top: 100px;
            display: block;
            margin-left: auto;
            margin-right: auto
        }


    </style>
@endsection

@section('content')


    <section class="homepage" id="home">
        <form class="home__search" action="" method="post">
            <input type="search" name="" class="input" placeholder="Search">
            <input type="submit" name="" value="" class="home__submit">
        </form>

        <div class="filters__search">
            <div class="bookmarks">
                <a href="#" class="bookmarks__button">Bookmarks</a>
            </div>
            <div class="filters__head">
                <h3>Filters</h3>
            </div>
            <div class="filters__content">
                <div class="filter1">
                    <p>Laptops</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter2">
                    <p>Tablets</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter3">
                    <p>Phones</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter4">
                    <p>Tv</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter5">
                    <p>Accessories</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter6">
                    <p>New First</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter7">
                    <p>No old ads</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter8">
                    <p>From favs</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
                <div class="filter9">
                    <p>Select all</p>
                    <div class="chekbox-two">
                        <label class="checkbox">
                            <input type="checkbox" checked="">
                            <span class="checkbox__icon"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="top__offers">
            <div class="offers__head">
                <h1>Create category</h1>
            </div>

            <div class="oi">
                <form class="form" action="/item/store" method="post" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Name:" required>
                    <textarea name="description" id="" cols="30" rows="10" required></textarea>
                    <input type="number" name="price" required>
                    <select name="category_id" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                    <input type="file" name="image_path" required>
                    {{csrf_field()}}
                    <input type="submit" value="Save">
                </form>
            </div>
        </div>
    </section>



@endsection

