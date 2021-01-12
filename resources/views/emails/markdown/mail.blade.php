@component('back::atomicdesign.components.email-blank')
{{ucfirst(json_decode($event->content, true)['body'])}}
@endcomponent
