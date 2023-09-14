<div class="my-10 flex justify-center w-full">
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
</div>