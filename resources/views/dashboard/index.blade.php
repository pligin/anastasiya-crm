@extends('layouts.app')

@section('content')
<div class="flex min-h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md">
        <div class="p-6 font-bold text-xl border-b">CRM Меню</div>
        <nav class="mt-4">
            <ul>
                <li>
                    <a href="{{ route('dashboard') }}" class="block px-6 py-3 hover:bg-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-6 py-3 hover:bg-gray-200">
                        Клиенты
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-6 py-3 hover:bg-gray-200">
                        Сделки
                    </a>
                </li>
                <li>
                    <a href="#" class="block px-6 py-3 hover:bg-gray-200">
                        Настройки
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-2xl font-bold mb-4">Добро пожаловать в Dashboard!</h1>
        <p>Вы успешно вошли в систему.</p>
    </main>
</div>
@endsection