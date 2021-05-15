@extends('layouts.app')

@section('artDetail')
<div class="art_details">
    <div class="art_details__img">
        <img src="../images/our-team.jpg" alt="" />
    </div>

    <div class="art_details__desc">
        <div class="art_details__desc__header">
            <div class="art_details__desc__header__title">
                <h1>Sword Lovers</h1>
                <p>Tooru,2021</p>
            </div>

            <i class="fas fa-heart notLiked pl"></i>

            <a href="image.jpg" download="image.jpg"><i class="fas fa-cart-arrow-down"></i></a>
            
            <a href="image.jpg" download="image.jpg" class="download_btn"><i class="fas fa-download"></i></a>
        </div>
        <div class="art_details__desc__description">
            <p>
                A sword is a bladed melee weapon intended for cutting or thrusting that is longer than 
                a knife or dagger, consisting of a long blade attached to a hilt. 
                The precise definition of the term varies with the historical epoch 
                or the geographic region under consideration. 
                The blade can be straight or curved. Thrusting swords have a pointed tip on the blade, and tend to be straighter; 
                slashing swords have a sharpened cutting edge on one or both sides of the blade, and are more likely to be curved. 
                Many swords are designed for both thrusting and slashing.
            </p>
        </div>
        <div class="art_details__desc__data">
            <h3>Details</h3>
            <ul>
            <li><b>Name:</b> Sword</li>
            <li><b>Year of creation:</b> 1993</li>
            <li><b>Resolution:</b> 1200x800px</li>
            <li><b>Medium:</b> digital</li>
            <li><b>Right:</b> Private collection</li>
            <li><b>External link:</b> National art gallery of Albania</li>
            </ul>
        </div>
    </div>
</div>
@endsection


