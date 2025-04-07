<x-videos-app-layout>
    <div class="edit-user-wrapper">
        <h1>Afegir Nou Usuari</h1>

        @if($errors->any())
            <div class="alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('users.manage.store') }}" method="POST">
            @csrf
            <div class="form-field">
                <label for="name">Nom</label>
                <input type="text" name="name" data-qa="input-name" required>
            </div>

            <div class="form-field">
                <label for="email">Correu electrònic</label>
                <input type="email" name="email" data-qa="input-email" required>
            </div>

            <div class="form-field">
                <label for="password">Contrasenya</label>
                <input type="password" name="password" data-qa="input-password" required>
            </div>

            <button type="submit" class="btn-outline">Crear usuari</button>
        </form>
    </div>

    <style>
        .edit-user-wrapper {
            max-width: 500px;
            margin: 50px auto;
            background: #ffffff;
            padding: 30px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }

        h1 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            color: #222;
        }

        .alert-error {
            background-color: #ffe0e0;
            color: #a33;
            padding: 12px 18px;
            border-left: 4px solid #c00;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .form-field {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #444;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input:focus {
            border-color: #555;
            box-shadow: 0 0 5px rgba(85, 85, 85, 0.3);
            outline: none;
        }

        .btn-outline {
            display: block;
            width: 100%;
            background-color: transparent;
            color: #007bff;
            font-weight: 600;
            font-size: 15px;
            padding: 12px;
            border: 2px solid #007bff;
            border-radius: 6px;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .btn-outline:hover {
            background-color: #007bff;
            color: white;
        }

        @media (max-width: 480px) {
            .edit-user-wrapper {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            .btn-outline {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</x-videos-app-layout>
