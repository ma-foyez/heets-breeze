<div class="sc-accordion-section-area sc-pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-z-idex" data-sal="slide-right" data-sal-duration="800">
                <div class="sc-accordion-area sc-pr-10 sc-md-pr-0">
                    <div class="sc-heading-area sc-mb-35">
                        <span class="sub-title"><i class="icon-line"></i> Essential Query</span>

                        <h2 class="title">
                            Business Common Popular <span class="primary-color italic">Question</span> & Answer
                        </h2>
                    </div>
                    <div class="accordion sc-faq-style" id="accordionExample">

                        @foreach ($faqs as $item)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $item->id }}">
                                    <button
                                        class="accordion-button  @if ($item->order != 1) collapsed @endif "
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $item->id }}" aria-expanded="false"
                                        aria-controls="collapse{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $item->id }}"
                                    class="accordion-collapse collapse @if ($item->order == 1) show @endif"
                                    aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>{{ $item->answer }}</strong>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="sc-essential-image text-end sc-pl-40 sc-md-pl-0 sc-md-pt-50">
                    <img src="{{ asset('') }}assets/web//images/project/essential-bg.jpg" alt="Essential" />
                </div>
            </div>
        </div>
    </div>
    <div class="sc-essential-shape">
        <img src="{{ asset('') }}assets/web//images/bg/essential-shape.png" alt="Shape" />
    </div>
</div>
