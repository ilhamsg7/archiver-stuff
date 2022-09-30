@extends('auth.layout')

@section('content')
    <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign Up
                        </h2>
                        <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">A few more clicks to sign in to your account. Manage all your e-commerce accounts in one place</div>
                    <form action="">
                        <div class="intro-x mt-8">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Name" name="name" id="name">
                            <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Username" name="username" id="username">
                            <input type="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email" name="email" id="email">
                            <div class="mt-2">
                                <select name="roles_name" id="roles_name" class="intro-x login__input input input--lg border border-gray-300 block mt-4 w-full">
                                    <selected>Select Role</selected>
                                    <option value="1">Admin</option>
                                    <option value="2">Staff</option>
                                </select>
                            </div>
                            <input type="password" name="password" id="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                        </div>
                        <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                            <input type="checkbox" class="input border mr-2" id="remember-me">
                            <label class="cursor-pointer select-none" for="remember-me">I agree to the Envato</label>
                            <a class="text-theme-1 ml-1" href="">Privacy Policy</a>.
                        </div>
                    </form>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit" class="button button--lg w-full xl:w-32 text-white bg-blue-800 xl:mr-3">Register</button>
                            <button class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0">Sign in</button>
                        </div>
                    </div>
                </div>
@endsection
