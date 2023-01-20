<x-frontend-layout>
    {{-- Hero primary --}}
    <x-frontend.hero />
    {{-- Promote tale-100/navy-500 --}}
    <x-frontend.promote />
    {{-- About secondary --}}
    <x-frontend.about />
    {{-- Skills tale-100/navy-500 --}}
    <x-frontend.skills :skills="$skills" />
    {{-- Portfolio primary --}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects" />
    {{-- Services secondary --}}
    <x-frontend.services />
    {{-- Contact primary --}}
    <x-frontend.contact />

</x-frontend-layout>
