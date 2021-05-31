@extends('layouts.app')

@section('artDetail')
<div class="art_details">

    <div class="buy_window visibilityHidden">
        <span id="close_menu">X</span>
        @guest
        <h1>Please login to purchase</h1>
        @endguest
        @auth



        <h1>Confirm Purchase</h1>

        <div class="buy_details">
            <table>
                <tr>
                    <td colspan="3"><img src="../storage/images/{{$image->path_name}}" alt="" width="150px"
                            height="80px"></td>
                    {{-- <td></td>
                <td></td> --}}
                </tr>
                <tr>
                    <td style="text-align: left">item</td>
                    <td>{{$image->image_title}}</td>
                    <td style="text-align: right">${{$image->price}}</td>
                </tr>
                <tr>
                    <td style="text-align: left">buyer</td>
                    <td>{{auth()->user()->email}}</td>
                    <td></td>
                </tr>
                <tr>
                    <td style="text-align: left">order track code</td>
                    <td>order id</td>
                    <td></td>
                </tr>
            </table>
        </div>

        <h1 class="buy_total">Total: ${{$image->price}}</h1>
        <input type="submit" value="Confirm">

        @endauth
    </div>

    <div class="art_details__img">
        <img src="../storage/images/{{$image->path_name}}" alt="" />
    </div>

    <div class="art_details__desc">
        <div class="art_details__desc__header">
            <div class="art_details__desc__header__title">
                <h1>{{$image->image_title}}</h1>
                {{-- <p>Tooru,2021</p> --}}
            </div>
            @auth
            @if(!$image->likedBy(auth()->user()))
            <form action="{{route('art_detail.likes', $image->id)}}" method="POST">
                @csrf
                <button type="submit">
                    <span class="favorite-img"><i class="fas fa-heart notLiked"></i>
                    </span>
                </button>

            </form>
            @else
            <form action="{{route('art_detail.likes', $image->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><span class="favorite-img"><i class="fas fa-heart liked"></i></span></button>

            </form>
            @endif
            @endauth

            <a id="buy_btn"><i class="fas fa-cart-arrow-down"></i></a>
            @auth
            <a href="image.jpg" download="image.jpg" class="download_btn"><i class="fas fa-download"></i></a>
            @endauth
        </div>
        <div class="art_details__desc__description">
            <p>
                {{$image->image_description}}
            </p>
        </div>
        <div class="art_details__desc__data">
            <h3>Details</h3>
            <ul>
                <li><b>Name:</b> {{$image->image_title}}</li>
                <li><b>Year of creation:</b> {{$image->year}}</li>
                <li><b>Resolution:</b> {{$image->resolution}}</li>
                <li><b>Medium:</b> digital</li>
                <li><b>Right:</b> Private collection</li>
                <li><b>Stock:</b> {{$image->stock}}</li>
                <li><b>Artist:</b> {{$image->author}}</li>
                <li><b>Price:</b> ${{$image->price}}</li>
            </ul>
        </div>
    </div>
</div>

<script>
    const closeBuy = document.querySelector('#close_menu');
    const openBuy = document.querySelector('#buy_btn');
    const buyMenu = document.querySelector('.buy_window');

    openBuy.addEventListener('click', () => {
        buyMenu.classList.remove('visibilityHidden');
    })

    closeBuy.addEventListener('click', () => {
        buyMenu.classList.add('visibilityHidden');
    })

</script>
@endsection