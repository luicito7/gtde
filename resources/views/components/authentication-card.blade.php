<div class="flex flex-col items-center min-h-screen pt-6 bg-black bg-opacity-50 sm:justify-center sm:pt-0">
    
    <div class="relative w-full px-6 py-4 pt-12 mt-8 bg-white shadow-md oveflow-hidden sm:max-w-md sm:rounded-lg">
        <div class="absolute w-11/12 -top-10">
            <div class="grid w-4/5 grid-cols-3 px-8 py-2 m-auto bg-blue-600 rounded-lg justify-items-center">            
            {{ $logo }}
            </div>
        </div>
        {{ $slot }}
    </div>
</div>
