@extends('layouts.main')
@section('content')
        <section class="page-title">
            <div class="wrapper">
                <h1>BRUNCH MENU</h1>
            </div>
        </section>
        <section class="menu">        	
            <div class="wrapper">
                <div class="menu-group no-margin-bottom">
                    <h2 class="red">SNACKS ///</h2>
                    @foreach($snacks as $snack)
                        <div class="menu-item">
                            <div class="menu-item-title">
                                <h3>
                                    {{ $snack->title }}
                                    @if($snack['extra'])
                                        {{ $snack->extra }}
                                    @endif
                                </h3>
                                <h3>{{ $snack->price }}</h3>
                            </div>
                            @if($snack->description)
                                <div class="menu-item-desc">
                                    <p>{{ $snack->description }}</p>
                                </div>
                            @endif
                        </div>                        
                    @endforeach
                </div>
            </div>

            <section class="spacer">
                <div class="center">
                    <img src="/img/bread.jpeg" />
                </div>
            </section>



            <div class="wrapper">
                <div class="menu-group no-margin-bottom">
                    <h2 class="red">BRUNCH ///</h2>
                    @foreach($brunch as $br)
                        <div class="menu-item">
                            <div class="menu-item-title">
                                <h3>
                                    {{ $br->title }}
                                    @if($br['extra'])
                                        {{ $br->extra }}
                                    @endif
                                </h3>
                                <h3>{{ $br->price }}</h3>
                            </div>
                            @if($br->description)
                                <div class="menu-item-desc">
                                    <p>{{ $br->description }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>


            <section class="spacer">
                <div class="center">
                    <img src="/img/chicken.png" />
                </div>
            </section>





            <div class="wrapper">
                <div class="menu-group no-margin-bottom">
                    <h2 class="red">A LA CARTE ///</h2>
                    @foreach($alacarte as $ala)
                        <div class="menu-item">
                            <div class="menu-item-title">
                                <h3>
                                    {{ $ala->title }}
                                    @if($ala['extra'])
                                        {{ $ala->extra }}
                                    @endif
                                </h3>
                                <h3>{{ $ala->price }}</h3>
                            </div>
                            @if($ala->description)
                                <div class="menu-item-desc">
                                    <p>{{ $ala->description }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>

            <section class="spacer">
                <div class="center">
                    <img src="/img/glass.jpeg" />
                </div>
            </section>



            <div class="wrapper">
                <div class="menu-group">
                    <h2 class="red">BRUNCHTAILS ///</h2>
                    @foreach($brunchtails as $brunchtail)
                        <div class="menu-item">
                            <div class="menu-item-title">
                                <h3>
                                    {{ $brunchtail->title }}
                                    @if($brunchtail->extra)
                                        {{ $brunchtail->extra }}
                                    @endif
                                </h3>
                                <h3>{{ $brunchtail->price }}</h3>
                            </div>
                            @if($brunchtail->description)
                                <div class="menu-item-desc">                                       
                                    <p>{{ $brunchtail->description }}</p>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


@stop