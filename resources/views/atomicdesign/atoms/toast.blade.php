@if (session('success'))
    <akk-toast
            props-title=""
            props-message="{{session('success')}}"
            props-type="success"
            props-timeout="7000">
    </akk-toast>
@endif
@if (session('error'))
    <akk-toast
            props-title="Erreur"
            props-message="{{session('error')}}"
            props-type="danger"
            props-timeout="7000">
    </akk-toast>
@endif

