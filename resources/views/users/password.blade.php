<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $header }}
        </h2>
    </x-slot>
 
    <div class="py-12">
        @if ( session('status') )
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-5">
                <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-gray-800 dark:text-green-400" role="alert">
                    <span class="font-medium">Success alert!</span> {{ session('status') }} 
                </div>
            </div>
        @endif
   
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">


                    <form method="POST" action="{{ url('/users/password') }}">
                         @csrf
                        <!-- Current Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Current Password')" />
                            <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full" 
                         
                             type="text"
                             name="current_password"/> 
                             
                             <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                             <!-- New Password -->
                        </div>
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('New Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                            type="text"
                            name="password"/>
                            
                            
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>
                       <!-- Confirm Password -->
                        <div class="mt-4">
                             <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="text"
                                name="password_confirmation" required />

                            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ $header }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>