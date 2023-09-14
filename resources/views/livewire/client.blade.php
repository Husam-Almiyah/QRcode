{{-- <div class="my-10 flex justify-center w-full">
    <section class="p-4 w-4/5 md:w-6/12 bg-gray-900 opacity-75 rounded-lg">
        <h1 class="text-center text-white text-3xl my-5">Join Us!</h1>
        <form class="my-4" wire:submit.prevent="submit">
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="text" class="p-2 rounded border shadow-sm w-full" placeholder="Name"
                        wire:model="name" />
                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="email" class="p-2 rounded border shadow-sm w-full" placeholder="Email"
                        wire:model="email" />
                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="flex justify-around my-8">
                <div class="flex flex-wrap w-10/12">
                    <input type="submit" value="Join"
                        class="p-2 w-full rounded tracking-wider cursor-pointer bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out" />
                </div>
            </div>
        </form>
    </section>
</div> --}}

<div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
    <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-gray-800 border-gray-700">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight text-center tracking-tight md:text-2xl text-white">
                Join Us!
            </h1>
            <form class="space-y-4 md:space-y-6" wire:submit.prevent="submit">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-white">name</label>
                    <input wire:model="name" type="text" name="name" id="name" class="bg-gray-700 border sm:text-sm rounded-lg block w-full p-2.5 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="your name" required="">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-white">Email</label>
                    <input wire:model="email" type="email" name="email" id="email" placeholder="your email" class="bg-gray-700 border sm:text-sm rounded-lg block w-full p-2.5 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" required="">
                </div>

                <button type="submit" class="p-2 w-full rounded tracking-wider cursor-pointer bg-gradient-to-r from-purple-800 to-green-500 hover:from-pink-500 hover:to-green-500 text-white font-bold py-2 px-4 rounded focus:ring transform transition hover:scale-105 duration-300 ease-in-out">Sign in</button>
            </form>
        </div>
    </div>
</div>
