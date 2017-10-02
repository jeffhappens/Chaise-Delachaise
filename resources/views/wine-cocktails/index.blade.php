@extends('layouts.main')
@section('content')
	<section class="page-title">
		<div class="wrapper">
			<h1>JULY 2016 - WINE LIST BY THE GLASS/BOTTLE</h1>
			<p>Extended by the bottle list &amp; Five $5/25 not shown. Wine list curated by Scott Vagnier.</p>
		</div>
	</section>

	<section class="menu">

		<div class="wrapper">            

            <div class="menu-group">
                <h2 class="red">WINES ///</h2>
                @foreach($wines as $wine)
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $wine->title }}
                                @if($wine->additional)
                                    {{ $wine->additional }}
                                @endif
                            </h3>
                            <h3>{{ $wine->price }}</h3>
                        </div>
                        @if($wine->description)
                            <div class="menu-item-desc">
                                <p>{{ $wine->description }}</p>
                            </div>
                        @endif
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="menu-group">
                <h2 class="red">DESSERT ///</h2>
                @foreach($dessertWines as $dessertWine)
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $dessertWine->title }}
                                @if($dessertWine->additional)
                                    {{ $dessertWine->additional }}
                                @endif
                            </h3>
                            <h3>{{ $dessertWine->price }}</h3>
                        </div>
                        @if($dessertWine->description)
                            <div class="menu-item-desc">
                                <p>{{ $dessertWine->description }}</p>
                            </div>
                        @endif
                    </div>
                <?php endforeach; ?>
            </div>



            <div class="menu-group">
                <h2 class="red">SPECIAL COCKTAILS ///</h2>
                @foreach($specialCocktails as $specialCocktail)
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>{{ $specialCocktail->title }}</h3>
                            <h3>{{ $specialCocktail->price }}</h3>
                        </div>
                        @if($specialCocktail->description)
                            <div class="menu-item-desc">
                                <p>
                                    {{ $specialCocktail->description }}
                                    @if($specialCocktail->additional)
                                    <br/>
                                    <small><i>{{ $specialCocktail->additional }}</i></small>
                                    @endif
                                </p>
                            </div>                                
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@stop