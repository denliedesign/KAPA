<div class="row mt-4">
    <div class="col-sm-3 d-flex align-items-center justify-content-center">
        <img class="img-fluid rounded shadow" src="images/{{ $image }}" style="filter: grayscale(100%);">
    </div>
    <div class="col-sm-9">
        <div class="accordion" id="accordion{{ $plug }}">
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $plug }}">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $plug }}" aria-expanded="true" aria-controls="collapse{{ $plug }}">
                        <div>
                            <p style="font-size: 1.25em;" class="fw-bold mb-0 p-0 text-dark">{{ $name }} <span class="fw-normal" style="font-size: 0.65em;">{{ $title }}</span></p>
                        </div>
                    </button>
                </h2>
                <div id="collapse{{ $plug }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $plug }}" data-bs-parent="#accordion{{ $plug }}">
                    <div class="accordion-body">
                        <p>
                            {{ $bio }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
