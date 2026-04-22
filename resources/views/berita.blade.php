<x-layout>
  <nav aria-label="Global" class="flex items-center bg-gray-900 justify-between p-6 lg:px-8">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" alt="" class="h-8 w-auto" />
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <a href="/" class="text-sm/6 font-semibold text-white">Beranda</a>
      <a href="/tentang" class="text-sm/6 font-semibold text-white">Tentang kami</a>
      <a href="/kontak" class="text-sm/6 font-semibold text-white">Kontak</a>
      <a href="/berita" class="text-sm/6 font-semibold text-white">Berita</a>
      <a href="/fasilitas" class="text-sm/6 font-semibold text-white">Fasilitas</a>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      <a href="#" class="text-sm/6 font-semibold text-white">Log in <span aria-hidden="true">&rarr;</span></a>
    </div>
  </nav>
  <div class="bg-gray-900 py-24 sm:py-32">

    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl lg:mx-0">
        <h2 class="text-4xl font-semibold tracking-tight text-pretty text-white sm:text-5xl">From the blog</h2>
        <p class="mt-2 text-lg/8 text-gray-300">Learn how to grow your business with our expert advice.</p>
      </div>
      <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-700 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
        @foreach ($beritas as $post)
        <article class="flex max-w-xl flex-col items-start justify-between">
          <div class="flex items-center gap-x-4 text-xs">
            <time datetime="{{ $post->created_at }}" class="text-gray-400">{{ $post->created_at->format('M j, Y') }}</time>
            <a href="#" class="relative z-10 rounded-full bg-gray-800/60 px-3 py-1.5 font-medium text-gray-300 hover:bg-gray-800"></a>
          </div>
          <div class="group relative grow">
            <h3 class="mt-3 text-lg/6 font-semibold text-white group-hover:text-gray-300">
              <a href="{{ route('berita.show', $post->id) }}">
                <span class="absolute inset-0"></span>
                {{ $post->judul }}
              </a>
            </h3>
            <p class="mt-5 line-clamp-3 text-sm/6 text-gray-400">{{ $post->isiberita }}</p>
          </div>
          <div class="relative mt-8 flex items-center gap-x-4 justify-self-end">
            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-10 rounded-full bg-gray-800" />
            <div class="text-sm/6">
              <p class="font-semibold text-white">
                <a href="#">
                  <span class="absolute inset-0"></span>
                  {{ $post->author }}
                </a>
              </p>
              <p class="text-gray-400">{{ $post->posisi }}</p>
            </div>
          </div>
        </article>
        @endforeach
      </div>
    </div>
  </div>


</x-layout>