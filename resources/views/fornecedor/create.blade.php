<x-app-layout>
    <x-slot name="header">
        Nova Fornecedor
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.store')}}" method="post">
                        @csrf
                        <div>
                            <x-label>Nome:</x-label>
                            <x-input name="nome"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Endereço:</x-label>
                            <x-input name="endereco"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Cidade:</x-label>
                            <x-input name="cidade"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Estado:</x-label>
                            <x-input name="estado"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Telefone:</x-label>
                            <x-input name="telefone"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Email:</x-label>
                            <x-input name="email"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div>
                            <x-label>Categoria:</x-label>
                            <x-input name="categoria"
                                     class="block mt-1 w-full"/>
                        </div>
                        <div class="mt-5">
                            <x-button>Salvar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>

