@extends('layout.index')

@section('app')
    <div class="w-11/12 flex justify-center flex-wrap flex-col items-center ">
        <form action="{{ route('configuracionpost') }}" method="post">
            @csrf


            <x-forms.input titulo="Nombre Invitacion" name="nombre_invitacion" placeholder="Nombre" :value="$data->nombre_invitacion" />
            <x-forms.input titulo="Papa del novio" name="papa_novio" placeholder="Papa del novio" :value="$data->papa_novio" />
            <x-forms.input titulo="Mama del novio" name="mama_novio" placeholder="Mama del novio" :value="$data->mama_novio" />
            <x-forms.input titulo="Papa de la novia" name="papa_novia" placeholder="Papa de la novia" :value="$data->papa_novia" />
            <x-forms.input titulo="Mama de la novia" name="mama_novia" placeholder="Mama de la novia" :value="$data->mama_novia" />
            <x-forms.input titulo="Padrino" name="padrino" placeholder="Padrino" :value="$data->padrino" />
            <x-forms.input titulo="Madrina" name="madrina" placeholder="Madrina" :value="$data->madrina" />
            <x-forms.input titulo="Titulo Mesa" name="titulo_mesa" placeholder="Titulo Mesa" :value="$data->titulo_mesa" />
            <x-forms.input titulo="Mensaje de mesa" name="mensaje" placeholder="Mensaje de mesa" :value="$data->mensaje" />
            <x-forms.input titulo="Enlace mesa" name="mesa" placeholder="Enlace mesa" :value="$data->mesa" />
                <div class="mt-4 mb-2">
                    <div class="notification is-danger ">
                        <button class="delete !top-0 "></button>
                        Usa los el termino "<strong>--enlace--</strong>" para asignar la url con la invitacion
                    </div>
                </div>
            <x-forms.textarea type="textarea" titulo="Mensaje de whatsapp" name="mensaje_whatsapp"
                placeholder="Mensaje de whatsapp" :value="$data->mensaje_whatsapp" />
            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-success">enviar</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
<script>
    document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});
</script>
@endsection
