<div class="page-content page-{{$page->id}}">
  <div class="container">
    <div class="content-breadcrumb">
      @include('page::frontend.partials.breadcrumb')
    </div>
    <div>
      <h1 id="title-page" class="text-center mb-4">
        {{$page->title}}
      </h1>
      <div class="content-image">
        <x-media::single-image
          imgClasses="w-100 mb-3"
          :mediaFiles="$page->mediaFiles()"
          :isMedia="true"
          :alt="$page->title"/>
      </div>
      <div id="descriptionPage">
        {!!$page->body!!}
      </div>
    </div>
    <hr class="line-footer">
  </div>
  <div class="gallery-section py-3">
    <x-media::gallery :mediaFiles="$page->mediaFiles()"
                      :responsive="[0 => ['items' => 1], 640 => ['items' => 2], 992 => ['items' => 5]]"/>
  </div>
</div>

<style>
    .page-content #title-page {
        font-size: 32px;
        color: var(--primary);
    }

    .page-content #descriptionPage p, .page-content #descriptionPage li {
        font-size: 17px;
    }

    .page-content #descriptionPage strong {
        font-size: 24px;
    }

    .page-content #galleryCarousel.owl-stage-outer img {
        height: 240px;
        object-fit: cover;
    }

</style>