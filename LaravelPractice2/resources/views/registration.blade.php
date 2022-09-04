<div class="container center">
    <div class="col-md-6" >
        <div id="logbox"  >
            <form id="signup" method="post" action="{{route('check_registration')}}">
                @csrf
                <h1>Create an Account</h1>
                @if($errors->any())
                    <div class="alert alert-danger">
                         <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                         </ul>
                    </div>
                @endif
                <input name="email" type="email" placeholder="Email address" class="input pass"/>
                <input name="password" type="password" placeholder="Choose a password" required="required" class="input pass"/>
                <input name="password2" type="password" placeholder="Confirm password" required="required" class="input pass"/>
                <input type="submit" value="Sign me up!" class="inputButton"/>

            </form>
        </div>
    </div>
</div>

<style>
    ::selection {
        background-color: #b5e2e7;
    }

    ::-moz-selection {
        background-color: #8ac7d8;
    }

    .container {
        align-items: center;
        justify-content: center;;
        display: -webkit-flex;
        display: flex;
        height: 100%;
    }

    #logbox {

        padding: 10px;
        margin: 50px auto;
        width: 340px;
        background-color: #fff;
        -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
    }

    h1 {
        text-align: center;
        font-size: 175%;
        color: #757575;
        font-weight: 300;
    }

    h1, input {
        font-family: "Open Sans", Helvetica, sans-serif;
    }

    .input {
        width: 75%;
        height: 50px;
        display: block;
        margin: 0 auto 15px;
        padding: 0 15px;
        border: none;
        border-bottom: 2px solid #ebebeb;
    }
    .input:focus {
        outline: none;
        border-bottom-color: #3CC !important;
    }
    .input:hover {
        border-bottom-color: #dcdcdc;
    }
    .input:invalid {
        box-shadow: none;
    }

    .pass:-webkit-autofill {
        -webkit-box-shadow: 0 0 0 1000px white inset;
    }

    .inputButton {
        position: relative;
        width: 85%;
        height: 50px;
        display: block;
        margin: 30px auto 30px;
        color: white;
        background-color: #3CC;
        border: none;
        -webkit-box-shadow: 0 5px 0 #2CADAD;
        -moz-box-shadow: 0 5px 0 #2CADAD;
        box-shadow: 0 5px 0 #2CADAD;
    }
    .inputButton:hover {
        top: 2px;
        -webkit-box-shadow: 0 3px 0 #2CADAD;
        -moz-box-shadow: 0 3px 0 #2CADAD;
        box-shadow: 0 3px 0 #2CADAD;
    }
    .inputButton:active {
        top: 5px;
        box-shadow: none;
    }
    .inputButton:focus {
        outline: none;
    }

    .navbar-brand{
        font-size: xx-large;
        font-weight: bold;
        font-family: cursive;

    }

</style>

