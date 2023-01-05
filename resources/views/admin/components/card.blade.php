<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $header ?? 'Default Title' }}</h5>
        <p class="card-text">
            {{ $slot }}
        </p>
        <div class="card-action">
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>
