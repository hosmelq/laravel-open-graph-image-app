<x-open-graph-image-layout>
    <div class="flex h-screen items-center justify-center bg-[#f3f3f3] p-20">
        <div class="flex flex-col gap-y-16">
            <div class="flex flex-col gap-y-4">
                <div class="text-4xl text-[#616161]">{{ $title }}</div>
                <div class="text-6xl leading-tight text-black">
                    {{ $description }}
                </div>
            </div>
            <div class="self-start rounded-xl bg-black p-1">
                <div class="px-3 pt-0.5 pb-1.5 text-lg text-[#f3f3f3]">
                    Terminal
                </div>
                <div class="rounded-lg bg-white p-5 font-mono text-xl flex items-center gap-x-2">
                    <div class="text-[#fed1d0]">$</div>
                    <div class="text-black">
                        composer require {{ $packageName }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-open-graph-image-layout>
