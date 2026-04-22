<x-layout>
    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
            <div class="max-w-xl">
                <h2 class="text-3xl font-semibold tracking-tight text-pretty text-white sm:text-4xl">Meet our leadership</h2>
                <p class="mt-6 text-lg/8 text-gray-400">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                @foreach($siswas as $siswa)
                <li>
                    <div class="flex items-center gap-x-6">
                        <img src="{{ $siswa->photo ?? 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="{{ $siswa->nama }}" class="size-16 rounded-full outline-1 -outline-offset-1 outline-white/10" />
                        <div>
                            <a href="{{ route('siswa.show', $siswa->id) }}" class="text-lg font-semibold text-white hover:text-indigo-400">
                                <h3 class="text-base/7 font-semibold tracking-tight text-white">{{ $siswa->nama }}</h3>
                            </a>
                            <p class="text-sm/6 font-semibold text-indigo-400">{{ $siswa->kelas}}</p>
                            <p class="text-sm/6 font-semibold text-indigo-400">{{ $siswa->jurusan}}</p>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layout>