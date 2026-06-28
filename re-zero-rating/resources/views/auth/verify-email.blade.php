<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Antes de continuar, por favor verifique seu endereço de email clicando no link que enviamos. Se você não recebeu o email, clique no botão abaixo para solicitar um novo.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Um novo link de verificação foi enviado para o endereço de email fornecido durante o registro.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Reenviar Email de Verificação') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="p-0.5 underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-accent-active">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout>
