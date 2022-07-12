<div class="flex justify-between items-center border-b border-gray-300">
    @if(Route::current()->getName() == 'dashboard')    
       <h1 class="text-2xl font-semibold pt-2 pb-6">{{ucfirst(Route::current()->getName())}}</h1>
    @else
    <h1 class="text-2xl font-semibold pt-2 pb-6">{{ucfirst(Route::current()->getName())}} Page</h1>
     @endif
</div>