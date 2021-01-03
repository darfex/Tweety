<x-master>
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex lg:justify-between">
                
                @auth
                    @include('_sidebar-links')
                @endauth


                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>

                @auth
                    @include('_friends-list')
                @endauth

            </div>
        </main>
        
    </section>
</x-master>