<x-videos-app-layout>

    <div class="edit-wrapper">
        <h1>Editar Usuari</h1>

        <form action="{{ route('users.manage.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" value="{{ $user->name }}" required>
            </div>

            <div class="form-group">
                <label for="email">Correu electrònic</label>
                <input type="email" name="email" value="{{ $user->email }}" required>
            </div>

            <button type="submit" class="btn-save">Actualitzar usuari</button>
        </form>
    </div>

    <style>
        .edit-wrapper {
            max-width: 500px;
            margin: 40px auto;
            background: #f5fef7;
            padding: 30px;
            border: 1px solid #d4ecd9;
            border-radius: 12px;
        }

        h1 {
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 25px;
            color: #2f6636;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #3e3e3e;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #cddfd2;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus {
            border-color: #67b26f;
            box-shadow: 0 0 6px rgba(103, 178, 111, 0.4);
            outline: none;
        }

        .btn-save {
            width: 100%;
            background-color: #67b26f;
            color: white;
            font-weight: 600;
            font-size: 15px;
            padding: 12px;
            border: none;
            border-radius: 6px;
            transition: background-color 0.3s, transform 0.2s ease;
            cursor: pointer;
        }

        .btn-save:hover {
            background-color: #4d9b56;
            transform: translateY(-2px);
        }

        @media (max-width: 480px) {
            .edit-wrapper {
                padding: 20px;
            }

            h1 {
                font-size: 20px;
            }

            .btn-save {
                font-size: 14px;
            }
        }
    </style>

</x-videos-app-layout>
