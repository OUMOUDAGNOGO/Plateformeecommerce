@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('boutique.store') }}">
                        @csrf

                        <!-- nom_complet -->
                        <div class="row mb-3">
                            <label for="nom_complet" class="col-md-4 col-form-label text-md-end">{{ __('nom_complet') }}</label>

                            <div class="col-md-6">
                                <input id="nom_complet" type="text" class="form-control @error('nom_complet') is-invalid @enderror" name="nom_complet" value="{{ old('nom_complet') }}" required autocomplete="nom_complet" autofocus>

                                @error('nom_complet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- fin nom_complet -->

                        <!-- nom_boutique -->
                        <div class="row mb-3">
                            <label for="nom_boutique" class="col-md-4 col-form-label text-md-end">{{ __('Nom_boutique') }}</label>

                            <div class="col-md-6">
                                <input id="nom_boutique" type="text" class="form-control @error('nom_boutique<') is-invalid @enderror" name="nom_boutique" value="{{ old('nom_boutique') }}" required autocomplete="nom_boutique" autofocus>

                                @error('nom_boutique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- fin nom_boutique -->

                        <!-- adresse_boutique -->
                        <div class="row mb-3">
                            <label for="adresse_boutique" class="col-md-4 col-form-label text-md-end">{{ __('Adresse_boutique') }}</label>

                            <div class="col-md-6">
                                <input id="adresse_boutique" type="text" class="form-control @error('adresse_boutique') is-invalid @enderror" name="adresse_boutique" value="{{ old('adresse_boutique') }}" required autocomplete="adresse_boutique" autofocus>

                                @error('adresse_boutique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- fin adresse_boutique -->

                        <!-- telephone_boutique -->
                        <div class="row mb-3">
                            <label for="telephone_boutique" class="col-md-4 col-form-label text-md-end">{{ __('telephone_boutique') }}</label>

                            <div class="col-md-6">
                                <input id="telephone_boutique" type="text" class="form-control @error('telephone_boutique') is-invalid @enderror" name="telephone_boutique" value="{{ old('telephone_boutique') }}" required autocomplete="telephone_boutique" autofocus>

                                @error('telephone_boutique')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--fin telephone_boutique -->

                        <!-- type_boutiqueId -->
                        <div class="row mb-3">
                            <label for="type_boutiqueId" class="col-md-4 col-form-label text-md-end">{{ __('type boutique') }}</label>

                            <div class="col-md-6">
                              
                                <select name="type_boutiqueId" id="">
                                    @foreach($typeb as $type)
                                    <option value="{{$type->id}}">{{$type->nom}}</option>
                                    @endforeach
                                </select>
                                @error('type_boutiqueId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!-- fin type_boutiqueId -->
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
