@props(['skills', 'projects'])
<section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center text-center">
            <h2 class="section-title">My Latest Work</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                <br> Magni reiciendis neque sed nam
                commodi nisi maiores eveniet incidunt fugit! Eius.
            </p>
        </div>
    </div>
    <x-frontend.projects :skills="$skills" :projects="$projects" />
</section>
