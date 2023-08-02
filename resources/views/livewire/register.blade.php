<div class="min-h-screen relative over-flow-hidden flex">
    <div class="z-10 flex-1 w-full max-w-lg py-8 bg-white md:py-16">
        <div class="w-full max-w-md px-4 mx-auto sm:px-6 md:px-8">
            

       
  <form wire:submit.prevent="register" class="mt-8 space-y-6 md:mt-12">
     {{ $this->form}}

      <button class=" flex item-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Sign In
      </button>
  
  </form>
  
</div>
 </div>
</div>