<x-videos-app-layout>
    <div class="user-container">
        <h1>Gestió d'Usuaris</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('users.manage.create') }}" class="btn-create-user">Crear Usuari</a>

        <div class="table-responsive">
            <table class="user-table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Accions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.manage.edit', $user) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('users.manage.destroy', $user) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Estàs segur?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <style>
        .user-container {
            padding: 40px;
            background-color: #f4f6f8;
            border-radius: 12px;
            max-width: 1000px;
            margin: auto;
        }

        h1 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 24px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .btn-create-user {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn-create-user:hover {
            background-color: #0056b3;
            transform: scale(1.03);
        }

        .table-responsive {
            overflow-x: auto;
        }

        .user-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .user-table th,
        .user-table td {
            padding: 14px 18px;
            text-align: left;
        }

        .user-table th {
            background-color: #0069d9;
            color: white;
            font-weight: 600;
        }

        .user-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn {
            font-size: 13px;
            padding: 8px 14px;
            border-radius: 5px;
            color: #fff;
            text-decoration: none;
            margin-right: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
        }

        .btn-warning {
            background-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 22px;
            }

            .btn-create-user {
                font-size: 14px;
                padding: 10px 20px;
            }

            .btn {
                font-size: 12px;
                padding: 6px 10px;
            }

            .user-table th,
            .user-table td {
                padding: 10px 12px;
            }
        }
    </style>
</x-videos-app-layout>
