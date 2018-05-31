<section class="content-section" style="text-align: left;">
    <div class="container">
        {!! (new Parsedown())->text(file_get_contents(resource_path('data/'.$file))) !!}
    </div>
</section>