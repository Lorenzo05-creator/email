<x-layout title="Contattaci">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                @if (session('success'))
                    <div class="alert alert-success shadow mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Inviaci un messaggio</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label class="form-label">Nome</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                @error('name') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                @error('email') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Messaggio</label>
                                <textarea name="message" rows="5" class="form-control @error('message') is-invalid @enderror">{{ old('message') }}</textarea>
                                @error('message') 
                                    <div class="invalid-feedback">{{ $message }}</div> 
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Invia Richiesta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>