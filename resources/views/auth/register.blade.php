{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg. Form</title>
    <!-- <link rel="stylesheet" href="SeventhAss2.css"> -->
  
</head>

<style>
    *{
    margin: 0px;
    padding-left: 0px;
    box-sizing: border-box;
}
.All{
    background-color:rgb(215, 247, 247);
    display: flex;

}
.Back{
display: flex;
margin-left: 300px;
background-color: lightgray;
border-radius: 15px;
margin-top: 15px;
margin-bottom: 20px;
height: 630px;
width: 900px;
}
label{
    font-size:large;

}
input{
    border-radius: 5px;
    height: 40px;
    width: 200px;
    margin-right: 10px;
}
.Alpha, .Beta, .Gamma, .Delta{
    margin-top: 15px;
}
/* .alpha, .Beta, .Gamma, .Delta, .Eee{ */
.inputfields{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin-bottom: 20px;
    width: 150px;  
}
.pix1{
    height: 570px;
    margin-top: 30px;
    margin-left: 30px;
    margin-bottom: 10px;
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
   }
.Right{
    margin-top: 30px;
    margin-left: 20px;   
}
.register{
    border-radius: 15px;
    width: 150px;
    height: 50px;
    margin-left: 140px;
    background-color: blue;
    color: white;
    cursor: pointer;
}
.register:hover{
    background-color: darkcyan;

}
</style>
<body>
    <div class="All">
        <div class="Back">


            <figure class="pix">
                <img class="pix1" src="register1.png">
            </figure>
            <div class="Right">
                <h1>Registration Form</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
            
                    <div class="inputfields">
                    <div class="Alpha">
                        <div>
                            <label>Name</label>
                            <input  id="name" type="text" name="name" placeholder="Name" required>
                        </div>
                        
                    </div>
                    <div class="Beta">
                        <div>
                            <label>Email</label>
                            <input id="email" type="email" name="email" placeholder="e-mail">
                        </div>
                       
                    </div>
                    <div class="Gamma">
                        <div>
                            <label>Password</label>
                            <input id="password" type="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="Delta">
                        <label>Password comfirmation</label>
                        <input id="password_comfirmation" type="password"
                        name="password_confirmation" placeholder="Comfirm password"></p>
                    </div>
                    </div>
                   <a href="{{route('login')}}"></a>
                   
                    {{-- <div class="register"> --}}
                        <input class="register" type="submit" value="register">
                    {{-- </div> --}}
            </div>

            </form>
        </div>
    </div>
    </div>
</body>

</html>
