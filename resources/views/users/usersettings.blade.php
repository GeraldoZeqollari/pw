@extends('layouts.app')
@section('userSettings')

<div class="settings_background">
    <div class="settings_container">
        <div class="switch_tab">
            <ul>
                <a onclick="tabs(0)" class="setting ActiveSetting"><i class="fas fa-portrait"></i><span
                        class="desktop_view">Details</span> </a>
                <a onclick="tabs(1)" class="setting"><i class="far fa-credit-card"></i><span
                        class="desktop_view">Payment</span> </a>
                <a onclick="tabs(2)" class="setting"><i class="fas fa-bookmark"></i><span
                        class="desktop_view">Favorited</span> </a>
                <a onclick="tabs(3)" class="setting"><i class="fas fa-lock"></i><span
                        class="desktop_view">Security</span>
                </a>
                @if(Auth::user()->isAdministrator())

                <a onclick="tabs(4)" class="setting"><i class="fas fa-users"></i><span
                        class="desktop_view">Users</span></a>
                <a onclick="tabs(5)" class="setting"><i class="fas fa-upload"></i><span
                        class="desktop_view">Upload</span></a>
                <a onclick="tabs(6)" class="setting"><i class="far fa-flag"></i><span
                        class="desktop_view">Issues</span></a>
                @else

                @endif
            </ul>
        </div>

        <div class="settings_display">
            <div class="settings_display__accountDetails">
                <form action="{{ route('usersettings_details') }}" method="POST" name="userdetails">

                    @csrf
                    <div class="accData">
                        <input type="text" name="first_name" placeholder="First Name" autocomplete="off"
                            value="{{ Auth::user()->first_name}}">
                        <input type="text" name="last_name" placeholder="Last Name"
                            value="{{ Auth::user()->last_name}}">
                    </div>


                    <div class="accData">
                        <input type="number" placeholder="Age" name="age" value="{{ Auth::user()->age}}">
                        <input type="number" placeholder="Enter your phone number" name="phone"
                            value="{{ Auth::user()->phone}}">
                    </div>

                    <div class="accData">
                        <div class="one_select">
                            <h1>Gender</h1>
                            <select name="gender" id="">
                                <option selected="true" disabled="disabled">Choose your gender</option>
                                <option value="M" {{ old('gender', Auth::user()->gender) == 'M' ? 'selected' : '' }}>
                                    Male</option>
                                <option value="F" {{ old('gender', Auth::user()->gender) == 'F' ? 'selected' : '' }}>
                                    Female</option>
                                <option value="O" {{ old('gender', Auth::user()->gender) == 'O' ? 'selected' : '' }}>
                                    Other</option>
                            </select>
                        </div>

                        <div class="two_select">
                            <h1>Country</h1>
                            <select id="country" name="country_name" class="form-control">
                                <option selected="true" disabled="disabled">Choose your country</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Brazil">Brazil</option>
                                <option value="Canada">Canada</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Egypt">Egypt</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Japan">Japan</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Norway">Norway</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="Spain">Spain</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                            </select>
                        </div>
                    </div>

                    <div class="accData">
                        <textarea name="bio" id="" cols="30" rows="10"
                            placeholder="Enter a new bio">{{ Auth::user()->Bio}}</textarea>
                    </div>

                    <div class="accData accData_btn">
                        <input type="submit" value="Change">
                    </div>
                </form>


            </div>
        </div>

        <div class="settings_display">
            <div class="settings_display__paymentDetails">
                <form action="{{ route('usersettings_carddetails') }}" method="POST">
                    @csrf
                    <div class="accData">

                        <h1>Choose your card</h1>

                        <div class="card_selection">
                            <input type="radio" id="visa" name="payment_id" value="0">
                            <label for="visa" class="label_exp">
                                <i class="fab fa-cc-visa" style="color: rgb(24,30,108)"></i>
                            </label>
                            <input type="radio" id="mastercard" name="payment_id" value="1">
                            <label for="mastercard" class="label_exp"><i class="fab fa-cc-mastercard"
                                    style="color: rgb(229,1,26)"></i></label>
                            <input type="radio" id="paypal" name="payment_id" value="2">
                            <label for="paypal" class="label_exp"><i class="fab fa-cc-paypal"
                                    style="color: rgb(1,46,130)"></i></label>
                        </div>

                    </div>

                    <div class="accData mt">
                        <label for="card_number">Enter your card number</label>
                        <input type="number" name="card_number" placeholder="1111-2222-3333-4444">

                        <label class="mt" for="address1">Enter your address</label>
                        <input type="text" name="address1" placeholder="">

                        <label class="mt" for="">Enter your expiration date</label>

                        <div class="accData accData_select">
                            <div class="one_select">
                                <select name='expiration_dateM' id='expireMM'>
                                    <option value=''>Month</option>
                                    <option value='01'>January</option>
                                    <option value='02'>February</option>
                                    <option value='03'>March</option>
                                    <option value='04'>April</option>
                                    <option value='05'>May</option>
                                    <option value='06'>June</option>
                                    <option value='07'>July</option>
                                    <option value='08'>August</option>
                                    <option value='09'>September</option>
                                    <option value='10'>October</option>
                                    <option value='11'>November</option>
                                    <option value='12'>December</option>
                                </select> </div>
                            <div class="two_select">
                                <select name='expiration_dateY' id='expireYY'>
                                    <option value=''>Year</option>
                                    <option value='2021'>2021</option>
                                    <option value='2022'>2022</option>
                                    <option value='2023'>2023</option>
                                    <option value='2024'>2024</option>
                                    <option value='2025'>2025</option>
                                    <option value='2026'>2026</option>
                                    <option value='2027'>2027</option>
                                </select>
                            </div>
                        </div>


                        <div class="cc_n mt">
                            <div class="single_double">
                                <label for="csc">CSC</label>
                                <input type="number" name="csc" placeholder="453">
                            </div>
                            <div class="single_double">
                                <label for="zip_code">Zip</label>
                                <input type="number" name="zip_code" placeholder="1000">
                            </div>

                        </div>
                    </div>

                    <div class="accData mt accData_btn">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>



        <div class="settings_display">
            <div class="settings_display__favorited">
                <div class="no_fav" style="display: none">
                    <h1>Start adding to your collection by clicking the heart button of the art pieces you like!</h1>
                </div>
                <div class="fav_flexbox">
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>
                    <div class="fav_flexbox__img">
                        <a href="">
                            <img src="../images/cat_screaming.jpg" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="settings_display">
            <div class="settings_display__security">
                <form action=" {{route('usersettings_passwordChange')}}" method="POST">
                    @csrf
                    <div class="current_pw">
                    </div>

                    <div class="current_pw disabled_pw">
                        <input type="password" placeholder="Enter your old password" name="current_password">
                        <input type="password" placeholder="Enter your new password" name="new_password">
                        <input type="password" placeholder="Confirm password" name="new_confirm_password">
                    </div>

                    <div class="current_pw sub_new_pw">
                        <input type="submit" class="new_pw" value="Submit" style="border: 2px solid black">
                    </div>
                </form>
                <form class="current_pw deactivate_btn" action="{{route('usersettings_delete')}}" method="POST">
                    @csrf
                    <input type="submit" value="Deactivate account">
                </form>
            </div>

        </div>


        <div class="settings_display">
            <div class="settings_display__users">


                @if ((isset($users)))
                @foreach ($users as $user)
                <form class="user_row" action="{{route('usersettings_deleteByAdmin')}}" method="POST">
                    @csrf

                    <table>
                        <tr>
                            <td>
                                <h1>{{ $user->email}}</h1>
                            </td>
                            <td>
                                <h1>{{ $user->username}}</h1>
                            </td>
                            <td style="display: none"><input type="number" name="currentID" value={{ $user->id}}></td>
                            <td><input type="submit" value="Delete Account"></td>
                        </tr>
                    </table>
                    {{-- <p>{{ $user->email}}</p>
                    <p>{{ $user->username}}</p>
                    <input type="number" name="currentID" value={{ $user->id}} style="display: none">

                    <input type="submit" value="Delete Account"> --}}
                </form>
                @endforeach
                {{ $users->links('pagination.pagination') }}
                @else

                <div class="reviews">
                    <h1>There are no users</h1>
                </div>
                @endif

            </div>
        </div>



        <div class="settings_display">
            <div class="settings_display__upload">
                <form action="{{route('usersettings_upload')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="upload_row">
                        <label for="file-upload" class="custom-file-upload">
                            <i class="fas fa-cloud-upload-alt"></i> Choose Art
                        </label>
                        <input id="file-upload" type="file" name="path_name" />

                        <select name="category_id" id="">
                            <option selected="true" disabled="disabled">Choose the category</option>
                            <option value="1">Modern</option>
                            <option value="2">Realism</option>
                            <option value="3">Medieval</option>
                            <option value="4">Baroque</option>
                        </select>
                    </div>


                    <div class="upload_row">
                        <input type="text" placeholder="Title" name="image_title">
                        <input type="text" placeholder="Author" name="author">
                    </div>
                    <div class="upload_row">
                        <input type="number" name="year" id="" placeholder="Year">
                        <input type="number" name="resolution" id="" placeholder="Resolution">
                    </div>
                    <div class="upload_row">
                        <input type="number" name="stock" id="" placeholder="Stock">
                        <input type="number" name="price" id="" placeholder="Price">
                    </div>
                    <div class="upload_row">
                        <textarea name="image_description" placeholder="Description" id="" cols="30"
                            rows="10"></textarea>
                    </div>

                    <div class="upload_row upload_post">
                        <input type="submit" class="upload_post" value="Post">
                    </div>
                </form>
            </div>
        </div>

        <div class="settings_display">
            <div class="settings_display__issues">
                <div class="issue_row">

                    @if ((isset($bugs)))
                    @foreach ($bugs as $bug)
                    <div class="issue_details">
                        <h1>{{ $bug->user->email}}</h1>
                        <h1>{{ \Carbon\Carbon::parse($bug->created_at)->diffForHumans() }}</h1>

                    </div>
                    <p>
                        {{$bug->bug_desc}}
                    </p>

                    @endforeach
                    {{ $bugs->links('pagination.pagination') }}
                    @else

                    <div>
                        <h1>There are no bugs</h1>
                    </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</div>
<script type="text/javascript" src="{{ asset('js/settings.js') }}"></script>
@endsection