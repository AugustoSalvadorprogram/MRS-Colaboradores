<x-guest-layout>
    <x-authentication-card>

    <style>
        @keyframes scroll
{
    from{
        transform: scale(1.5);
        opacity: 0;
        scale: 0.5;
    }
    top{
        opacity: 1;
        scale: 1;
    }
}

@keyframes faid{
    from{
        opacity: 0;
        scale: 10.5;
        translate: 100vw 0;
    }
    to{
        opacity: 1;
        scale: 1;
        translate: 0 0;
    }
}
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body{
            animation: scroll linear;
            animation-timeline: view();
            animation-range: entry 0 cover 50%;
            animation: faid 2s;
        }
        body{
            background: linear-gradient(-29deg, #0D1F4A, #004b8a);
            background-position: left;
            background-repeat: no-repeat;
            background-size: 100%;
            display: flex;
            width: 100%;
            height: 100vh;
            justify-content: center;
            align-items: center;
            line-height: 2;
            margin: auto;
            
        }
        .container{
            display: flex;
            background-color: rgb(248, 255, 255);
            width: 80%;
            height: 80vh;
            border-radius: 40px;
            box-shadow: 100px 200px 200px rgba(0, 0, 0, 0.404);
        }
        
        .container .imag{
            background-image: url(img/IMG-20250623-WA0009.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100%;
            width: 60%;
            height: 80vh;
            border-radius: 40px;
            opacity: 90%;
        }

        .container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: 500px;
            padding: 4%;
        }

        .input{
            border-radius: 10px;
            width: 300px;
            height: 40px;
            background-position: right;
            background-repeat: no-repeat;
            background-size: 20px;
            border: 1px solid #aeb2b663;
        }
        
        .input::selection{
            transition: 2s;
            
        }
        
        .email{
            background-image: url(img/User.png);            
        }

        .senha{
            background-image: url(img/Password.png);            
        }
        .nif{
            background-image: url(img/aplicativo.png);
            background-color: transparent;
            background-position: right;
            background-repeat: no-repeat;
            background-size: 20px;
            border: none;  
            border-bottom: 3px solid #00000063;    
            height: 40px;
        }

        .nif:checked{
            border: none;
        }

        .container form h1{
            color: #0D1F4A;
            font-size: 40pt;
            font-variant: small-caps;
        }

        button{
            height: 50px;
            width: 300px;
            background-color: #0D1F4A;
            border-radius: 100px;
            color: white;
            cursor: pointer;
        }
        button:hover{
            background-color: #3a3b3d;
            color: #ffffff;
            border: 0;
        }

        .container form .a{
            text-decoration: none;
            color: #76b5e9;
            border: 2px solid #76b5e9;
            border-radius: 40px;
            text-align: center;
        }
        .container form .a:hover{
            background-color: #76b5e9;
            color: white;
            transition: 1s;
        }

        .bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: transparent;
}
    </style>

        <x-slot name="logo">
            <img src="icon/MRS-Logo.ico" alt="" width="200px">
            <x-authentication-card-logo / hidden>
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
