<x-guest-layout>
    <div class="flex min-h-screen items-center justify-center bg-amber-50">
        <div class="w-full max-w-md bg-white rounded-lg shadow-lg p-8">
            <h2 class="text-2xl font-bold text-center text-amber-600 mb-6">Employee Login</h2>
            @if (session('status'))
                <div class="mb-4 text-green-600 text-center">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" name="email" type="email" required autofocus autocomplete="username"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50" value="{{ old('email') }}">
                    @error('email')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required autocomplete="current-password"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-amber-400 focus:ring focus:ring-amber-200 focus:ring-opacity-50">
                    @error('password')
                        <span class="text-red-600 text-xs">{{ $message }}</span>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="rounded border-gray-300 text-amber-600 shadow-sm focus:ring-amber-500">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-amber-600 hover:underline">Forgot password?</a>
                </div>
                <button type="submit" class="w-full py-2 px-4 bg-amber-500 hover:bg-amber-600 text-white font-semibold rounded-md shadow focus:outline-none focus:ring-2 focus:ring-amber-400">Login</button>
            </form>
        </div>
    </div>
</x-guest-layout>
