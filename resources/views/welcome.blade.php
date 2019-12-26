@extends('layouts.index')

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
                <h1>Top Offers</h1>
            </div>
            <div class="offers__inner">
                @foreach($items as $item)
                    <a href="#">
                        <img
                                src="{{asset($item->image_path)}}"
                                alt="" class="mac__top">
                        Title: {{$item->title}}
                        {{--<p>--}}

                            {{--Description: {{$item->description}}--}}
                            {{--Price: {{$item->price}}--}}
                        {{--</p>--}}
                    </a>
                @endforeach
            </div>
        </div>
    </section>


    <section class="support" id="support">
        <div class="support__inner">
            <h1>Support</h1>
            <div class="faq">
                <h2>Frequently asked questions</h2>
                <div class="quest">
                    <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </a>
                    <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </a>
                    <a href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </a>
                </div>
            </div>
            <div class="tech__pod">
                <!-- <h3>Submit your own question</h3>
                <div class="tech__variants">
                  <a href=""><img src="https://image.flaticon.com/icons/png/512/1051/1051368.png" alt=""></a>
                  <a href=""><img src="https://image.flaticon.com/icons/png/512/1051/1051386.png" alt=""></a>
                </div> -->
            </div>
        </div>
    </section>

@endsection

