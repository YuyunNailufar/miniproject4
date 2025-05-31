@extends('layouts.app')

@section('content')
<style>
    body {
        background: linear-gradient(to bottom right, #f3e8ff, #e9d5ff);
        min-height: 100vh;
    }

    .auth-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .auth-card {
        background: white;
        display: flex;
        max-width: 1000px;
        width: 90%;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .auth-image {
        flex: 1;
        background: url('{{ asset('images/foto1.jpg') }}') center/cover no-repeat;
        min-height: 400px;
    }

    .auth-form {
        flex: 1.2;
        padding: 2rem;
    }

    .auth-form h2 {
        color: #9333EA;
        margin-bottom: 1rem;
    }

    .auth-form input {
        width: 100%;
        padding: 0.75rem;
        margin-bottom: 1rem;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .auth-form button {
        width: 100%;
        padding: 0.75rem;
        background-color: #9333EA;
        color: white;
        border: none;
        border-radius: 8px;
        font-weight: bold;
    }

    .navbar {
        background-color: transparent !important;
    }
</style>

<div class="auth-container">
    <div class="auth-card">
        <div class="auth-image"></div>
        <div class="auth-form">
            <h2>Masuk ke ApoTrack</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</div>
@endsection
