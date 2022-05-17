<x-app-layout>
    <x-slot name="header">
        Editar Fornecedor
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('fornecedor.update',$fornecedor->id)}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o nome:</x-label>
                            <x-input name="nome"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->nome}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o Endereço:</x-label>
                            <x-input name="endereco"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->endereco}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe a cidade:</x-label>
                            <x-input name="cidade"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->cidade}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o estado:</x-label>
                            <x-input name="estado"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->estado}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o telefone:</x-label>
                            <x-input name="telefone"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->telefone}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o email:</x-label>
                            <x-input name="email"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->email}}"/>
                        </div>
                        <div style="margin-bottom: 20px">
                            <x-label>Informe o categoria:</x-label>
                            <x-input name="categoria"
                                     class="block mt-1 w-full"
                                     value="{{$fornecedor->categoria}}"/>
                        </div>
                        <div class="mt-5">
                            <x-button>Alterar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-app-layout>

