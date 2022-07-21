@extends('layouts.dashboard')

@section('dash-title', __('Dashboard'))

@section('dash-content')
    <h3>Список стримов</h3>
    <div class="mb-2">
        <a class="btn btn-primary" href="{{ route('stream-create-form') }}">Добавить стрим</a>
    </div>
    @forelse ($streams as $stream)
        @include('components.stream-card', compact('stream'))
    @empty
        <div class="alert alert-info">Стримы не найдены...</div>
    @endforelse
    {{ $streams->links() }}
@endsection
