<div class="modal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $titleModal }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{ $bodyModal }}</p>
            </div>
            <div class="modal-footer">
                @foreach($buttonsModal as $button)
                    <button type="button" class="btn btn-{{ $button['class'] }}" data-bs-dismiss="modal">{{ $button['text'] }}</button>
                @endforeach
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
