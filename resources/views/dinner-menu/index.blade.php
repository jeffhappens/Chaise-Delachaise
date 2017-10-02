@extends('layouts.main')
@section('content')
    <section class="page-title">
    	<div class="wrapper">
    		<h1>DINNER MENU</h1>
    		<p>UP TO 6 SPECIALS DAILY (NOT LISTED). MENU IS SEASONAL &amp; SUBJECT TO CHANGE.</p>
    	</div>
    </section>

    <section class="menu">

    	<div class="wrapper" id="share">
    		<div class="menu-group">
    			<h2 class="red">SHARE ///</h2>
    			@foreach($share as $sh)
        			<div class="menu-item">
        				<div class="menu-item-title">
        					<h3>
        						{{ $sh->title }}
                                @if($sh->additional)
                                    {{ $sh->additional }}
                                @endif    						
        					</h3>
        					<h3>
                                {{ $sh->price }}
                            </h3>
        				</div>
        				@if($sh->description)
            				<div class="menu-item-desc">
            					<p>{{ $sh->description }}</p>
            				</div>
        				@endif
        			</div>
    			@endforeach
    		</div>
    	</div>

        <div class="wrapper" id="cheesePlate">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">CHEESE PLATE ///</h2>
                <?php foreach($cheesePlate as $cp): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $cp->title }}
                                @if($cp->extra)
                                    {{ $cp->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $cp->price }}</h3>
                        </div>
                        @if($cp->description)
                            <div class="menu-item-desc">
                                <p>{{ $cp->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="spacer">
            <div class="center">
                <img src="/img/fish.jpeg" />
            </div>
        </section>


        <div class="wrapper" id="sides">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">SIDES ///</h2>
                <?php foreach($sides as $side): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $side->title }}
                                @if($side->extra)
                                    {{ $side->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $side->price }}</h3>
                        </div>
                        @if($side->description)
                            <div class="menu-item-desc">
                                <p>{{ $side->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="wrapper" id="salads">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">SALADS ///</h2>
                <?php foreach($salads as $salad): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $salad->title }}
                                @if($salad->extra)
                                    {{ $salad->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $salad->price }}</h3>
                        </div>
                        @if($salad->description)
                            <div class="menu-item-desc">
                                <p>{{ $salad->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <section class="spacer">
            <div class="center">
                <img src="/img/greens.jpeg" />
            </div>
        </section>


        <div class="wrapper" id="small">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">SMALL ///</h2>
                <?php foreach($small as $sm): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $sm->title }}
                                @if($sm->extra)
                                    {{ $sm->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $sm->price }}</h3>
                        </div>
                        @if($sm->description)
                            <div class="menu-item-desc">
                                <p>{{ $sm->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <section class="spacer">
            <div class="center">
                <img src="/img/cutlery.jpeg" />
            </div>
        </section>


        <div class="wrapper" id="large">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">LARGE ///</h2>
                <?php foreach($large as $lg): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $lg->title }}
                                @if($lg->extra)
                                    {{ $lg->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $lg->price }}</h3>
                        </div>
                        @if($lg->description)
                            <div class="menu-item-desc">
                                <p>{{ $lg->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="wrapper" id="desserts">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">DESSERT ///</h2>
                <?php foreach($desserts as $dessert): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $dessert->title }}
                                @if($dessert->extra)
                                    {{ $dessert->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $dessert->price }}</h3>
                        </div>
                        @if($dessert->description)
                            <div class="menu-item-desc">
                                <p>{{ $dessert->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>


        <div class="wrapper" id="kids">
            <div class="menu-group no-margin-bottom">
                <h2 class="red">KIDS ///</h2>
                <?php foreach($kids as $kid): ?>
                    <div class="menu-item">
                        <div class="menu-item-title">
                            <h3>
                                {{ $kid->title }}
                                @if($kid->extra)
                                    {{ $kid->extra }}
                                @endif                                  
                            </h3>
                            <h3>{{ $kid->price }}</h3>
                        </div>
                        @if($kid->description)
                            <div class="menu-item-desc">
                                <p>{{ $kid->description }}</p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
@stop