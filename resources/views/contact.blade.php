<x-main>
    <x-slot name="title">Contact</x-slot>
    
    <div class="container py-4 w-50">
        <form action="{{route('send')}}" method="POST">

        @method('POST')
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" type="text" name="name" placeholder="Nome" value="{{old('name')}}"/>
        </div>
    
        <div class="mb-3">
            <label class="form-label">Telefono</label>
            <input class="form-control" type="text" name="phone" placeholder="Telefono" value="{{old('phone')}}"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input class="form-control" name="mail" placeholder="Email" value="{{old('mail')}}"/>
        </div>

        <div class="mb-3">
            <label class="form-label">Messaggio</label>
            <textarea class="form-control" placeholder="Messaggio" name="message" style="height: 10rem;">{{old('message')}}</textarea>
        </div>
    
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">Invia</button>
        </div>
        </form>
    </div>
</x-main>