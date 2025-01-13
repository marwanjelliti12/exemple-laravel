@extends('layouts/layout')
@section('title')
    Acceuil
@endsection
@section('css')
    <link rel="stylesheet" href
    ="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection
@section('content')

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Msit Digital</title>

        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/navbar.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}" />




        <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    </head>
    <style>
        body {
            /* margin: 0;
                                                            padding: 0;
                                                            font-family: Arial, sans-serif;
                                                            height: 100%; */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Oxygen', 'Ubuntu', 'Cantarell', 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
            margin: 1rem 2rem;

        }
    </style>

    <body>
        <section id="hero" class="section">
            <div class="background">
                <img src="{{ asset('image/ainedrahem.png') }}" alt="Background Image">
            </div>
            <div class="content">
                <div class="title">
                    <h1>Travel to explore</h1>
                    <p>Lorem, ipsum dolor sit amet tempora accusamus laboriosam earum rerum necessitatibus culpa cum quia
                        maiores, tenetur voluptate hic.</p>
                </div>
                <div class="search">
                    <div class="container">
                        <label for="location">Where you want to go</label>
                        <input type="text" id="location" placeholder="Search your location"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Search your location'">
                    </div>
                    <div class="container">
                        <label for="dateOne">Check-in</label>
                        <input type="date" id="dateOne">
                    </div>
                    <div class="container">
                        <label for="dateTwo">Check-out</label>
                        <input type="date" id="dateTwo">
                    </div>
                    <button class="btn">Explore Now</button>
                </div>
            </div>
        </section>

        <section id="services" class="services">
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Get Best Prices</h3>
                <p>Pay through our application and save thousands and get amazing rewards.</p>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Covid Safe</h3>
                <p>We have all the curated hotels that have all the precaution for a covid safe environment.</p>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Flexible Payment</h3>
                <p>Enjoy the flexible payment through our app and get rewards on every payment.</p>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Find The Best Near You</h3>
                <p>Find the best hotels and places to visit near you in a single click.</p>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Find The Best Near You</h3>
                <p>Find the best hotels and places to visit near you in a single click.</p>
            </div>
            <div class="service">
                <div class="icon">
                    <img src="{{ asset('image/ainedrahem.png') }}" alt="iconImg" />
                </div>
                <h3>Find The Best Near You</h3>
                <p>Find the best hotels and places to visit near you in a single click.</p>
            </div>


        </section>

        <section id="recommended" class="">
            <div class="title" style="color: black;">
                <h1>Recommended Destinations</h1>
            </div>
            <div class="packages">
                <ul>
                    <li class="tab active" onclick="showTab('weekend-break')">
                        The Weekend Break
                    </li>
                    <li class="tab" onclick="showTab('package-holiday')">
                        The Package Holiday
                    </li>
                    <li class="tab" onclick="showTab('group-tour')">
                        The Group Tour
                    </li>
                    <li class="tab" onclick="showTab('long-term')">
                        Long Term Slow Travel
                    </li>
                </ul>
            </div>
            <div class="destinations" id="weekend-break">
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>Palestine</h3>
                    <p>Singapore, officialy thr Republic of Singapore, is a</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 2 night
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>Thailand</h3>
                    <p>Thailand is a Southeast Asia country. It's known for</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 2 night
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>Paris</h3>
                    <p>Paris, France's capital, is a major European city and a</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 2 night
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>New Zealand</h3>
                    <p>New Zealand is an island country in the</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 1 night
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
            </div>

            {{-- <div class="destinations" id="package-holiday" style="display:none;">
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
            </div>

            <div class="destinations" id="group-tour" style="display:none;">
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
            </div>

            <div class="destinations" id="long-term" style="display:none;">

                <div class="destination"><img src="{{ asset('image/ainedrahem.png') }}" alt="Destination Img">
                    <h3>London</h3>
                    <p>London, the capital of England and the United</p>
                    <div class="info"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAXCAYAAAAP6L+eAAAABHNCSVQICAgIfAhkiAAAAaBJREFUOE/tlOFRwzAMheMNYIOMABM0TECZgLBB2SBMUJiAbEA7ARmBbgATUCYI7wtyzknjOnDc8Qff6ZzY0pP0JNllM1bbtqXU1pK95NY5t0mZuZSCQM+kAxB7LmkEfJKymwNcCKQSGHsmR439s0fXP3BPzd9QoUJRsEfJnYpXW/HutS8kNzp7iVUvGrFAKxmtJEsBDDpAd0ud42Ctu4cp8ANgGdGjT5IPSSlDhuJgSS/XIVm8W/QDvQGwReJTJ6LkCjIjiH4ie2ApAESKpB7lLhI9U0n0zxLqsXc2skS5g1OfulFyac7edA7fTB5RtRL27Ui/0lnRUShFuAGwHoFdmPErysFIkw0AXXYWZe9EGF8F1wfeS1PyYBvPl7Vc+Fa0ugsp9A68EwI5B5iPhuimnsMUMPT4ZcXHQfaTyRtEHAKH33OAcxnUAce/BlwLOA+A+2LHok1SIc4ApUfpim6yrD2pSddJ36bCiuaH5loApYFU2rcS2i46TMceoUKGDM4pHEtwAt84oPK06dX4gfIZHAMGBAAKN3hg7AGavPPAn9+u/VxDtPRrAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAAXCAYAAAAGAx/kAAAABHNCSVQICAgIfAhkiAAAAfdJREFUOE+VlN1NwzAUhetHJCRggoYJKBOQiAW6AXnjkbJBN6BMQJF4hiAxQJiAjJARygAonM+9jlw3JSLSkX39c+65P46bJF/XdafOuQ3Lms805LJXZvd76T0XL+hiLvtJWAg/wovQCLXhQeNSxO+DRHjWZqMRggvhUvZMdqU5qgCqOuFce3msHFKnhbkdetP4Klz7DeeW4TAjIRpajQB1OP4kFRBhXAlnyDavqfLUvtXC0dafQ4hXlJknvLJYj7Cg7EM4FhoREf4kTTaJRNXBT44Hz3gibZJIkoy6dkRRf0ZOi3C2VySy2qpBzphTRcKYav5sCb+T/ShUnI0d7hBpYy2QK9qh1GV6CLBe4kCAIBsj4qA/bOUPNiO5oX+YU64/FeGV58FTaO2JYIPM1KKuhUzfaq9q5gmiJQdNEUUgVPJGd7O/iN4ipOSrSnOEbDAUGmQQ+QeMA5oxFOk/RCFHhLOgn1Bj4eV75Tdv9Fam+TTYGu9NAZe/hCIknzFVhHykU/KQ4NZCCt4pAqHX1lsoLA+GZkpoTC6QN5zM4yekdXK2GUr22tRQIULrieIwovCp2Pb1R4v+iUQ2yUyJUEAzru35+Or6NUvqjeUBReGDtDVAwF54PoX9PcvQUxD5zYhgbIqDE+E7ztfO/2iMIQqb7g6N6Zd/ASdMOidq+W5aAAAAAElFTkSuQmCC"
                            alt="Information1"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAVCAYAAACt4nWrAAAABHNCSVQICAgIfAhkiAAAAhJJREFUOE+tlctxwkAMhnEHpAN3AB3EVBCoIOaWW0wFOB1wzC3uIFBB3AGkA3cQOnD+b0diNhtgnMfOaNZepE+PlUw20ur7vtS2lhwkyyzLjpz/dWUCF4JsJOxzSSk4z4OXGJWUO5NC9hudNcAbHbY6YCcLop/rHeVBSza1KbYEKdtaZy3wTi+5U0yRs+BsyLoG7wXKEvgI70PAlu3FyLm83C/RojhSt1/AsYF18LKQ/sEuYaznvWT2w5pzoRPZLC0TGqOi5gC5iF7C81Nab+uo2yiTHdFFpcSOIO/s7F17GWptpcj1eJ/Uv9DZiwRlYJQQEJF9SFaJE4JEQkPEcPysHW6DRbqlQYkKcCfZSaYWLW0bsqDOBg8NkcIrHY6lRBYYsOMAaZLIa9PZmiMvDQ6+wYEBLwTHAKEMQBiM0yfBnAOhPAi/YY/uWTiHtcFpRTLoDMz+Zek3oCUBWSDs1+GmvLG9kRNqe3bJQRhAdinMLsGBUQY8P0se/hMeShIJEecKiFqepjcO38ri3YQ9JYJBoNO4W1I4RigVEiZvkYDpDCaZiUSHFTPCl9FbMYWj7HD2iaSR0BHAcL6yd29F7obfYF2Gy2sbDRFdkZshABzgiOhfcSL9rX0iHM5gVR453kmzlCyiieO9lrxJvO/dEd0RTyfgR3N+E8MxAHL6R9JzWPZhi6NvARCt60S6lIvsGMbjJyZJYKBAhkjLAAAAAElFTkSuQmCC"
                            alt="Information1"></div>
                    <div class="distance"><span class="km">1000 Kms</span><span class="destDist">Approx 3 night 2 day
                            trip</span></div>
                </div>
            </div> --}}

        </section>


    </body>
@endsection
@section('script')
    <script>
        function showTab(tabId) {
            // Hide all card containers
            document.querySelectorAll('.destinations').forEach(function(cards) {
                cards.style.display = 'none';
            });

            // Remove active class from all tabs
            document.querySelectorAll('.tab').forEach(function(tab) {
                tab.classList.remove('active');
            });

            // Show the selected card container
            document.getElementById(tabId).style.display = 'flex';

            // Add active class to the selected tab
            event.target.classList.add('active');
        }
    </script>
@endsection
