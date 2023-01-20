@props(['skills', 'projects'])
<div class="container mx-auto" x-data="{ selectedSkill: 'all' }">
    <nav class="relative w-full overflow-x-auto mb-12 border-b-2 border-light-tale-100 dark:text-dark-navy-100">
        <ul class="inline-flex">
            <li class="cursor-pointer capitalize m-4">
                <button @click="selectedSkill = 'all'" :class="selectedSkill == 'all' ? 'bg-accent' : ''"
                    class="w-32 text-center px-5 py-2 bg-light-tale-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transition">
                    All
                </button>
            </li>
            @foreach ($skills as $skill)
                <li class="cursor-pointer capitalize m-4" x-data="{ skill: {{ json_encode($skill) }} }">
                    <button @click="selectedSkill = skill.id" :class="selectedSkill == $skill.id ? 'bg-accent' : ''"
                        class="w-32 text-center px-5 py-2 bg-light-tale-500 dark:bg-dark-navy-100 hover:bg-accent text-white rounded-md transition">
                        {{ $skill->name }}
                    </button>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8 md:grid-cols-2 md:gap-4">
        @foreach ($projects as $project)
            <x-frontend.project :project="$project" />
        @endforeach
    </section>
</div>
