<form method="POST" action="{{ route('login') }}">
<<<<<<< HEAD
@csrf
<input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
<input type="password" name="password" placeholder="Password">
<button type="submit">Login</button>

<!-- Display the error message if it exists -->
@if(session('error'))
<div style="color: red; margin-top: 10px;">
{{ session('error') }}
</div>
@endif
</form>

<style>
    /* Style for the form */
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border: 1px solid #FFC5C5; /* Pastel pink border */
        border-radius: 20px; /* Rounded corners */
        background-color: #FFD7D7; /* Light pastel pink background */
        box-shadow: 0 0 10px rgba(255, 182, 193, 0.5); /* Soft shadow */
    }

    /* Style for input fields */
    input[type="email"], input[type="password"] {
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #FF99CC; /* Pastel pink border */
        border-radius: 10px; /* Rounded corners */
        width: 100%;
        max-width: 300px;
        background-color: #FFF0F0; /* Light background */
    }

    /* Style for the submit button */
    button[type="submit"] {
        padding: 10px;
        background-color: #FF69B4; /* Pink background */
        color: white;
        border: none;
        border-radius: 10px; /* Rounded corners */
        cursor: pointer;
        font-weight: bold;
    }

    /* Style for error message */
    div {
        color: red;
        margin-top: 10px;
        font-size: 14px;
    }

    /* Optional: Add cute icons */
    input[type="email"]::before {
        content: "\2709"; /* Envelope icon */
        font-size: 20px;
        margin-right: 5px;
        color: #FF99CC;
    }

    input[type="password"]::before {
        content: "\1F510"; /* Lock icon */
        font-size: 20px;
        margin-right: 5px;
        color: #FF99CC;
    }
</style>
=======
    @csrf
    <input type="email" name="email" placeholder="Email">
    <input type="password" name="password" placeholder="Password">
    <button type="submit">Login</button>
</form>
>>>>>>> 0a266ac610b9e19484e347233c42fb3658a77814
