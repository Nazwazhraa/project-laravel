@if (session()->has('flash_notification.message'))
    <div class="container">
        <div class="alert alert-{{ session()->get('flash_notification.level') }} alert-dismissible" role="alert">
            <div>
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {!! session()->get('flash_notification.message') !!}
            </div>
        </div>
    </div>
@endif
