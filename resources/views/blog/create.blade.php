    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Créer project') }}
            </h2>
        </x-slot>
    
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                    <div class="w-4/5 m-auto text-left mt-5">
                        <div class="py-15">
                            <h1 class="text-6xl" style="font-size: 35px;text-align:center;">
                                Créer projet
                            </h1>
                        </div>
                    </div>
                
                    @if ($errors->any())
                        <div class="w-4/5 m-auto">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    <div class="w-4/6 m-auto pt-20" style="padding:20px 20px;">
                        <form 
                            action="{{ route('store') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                
                            <input 
                                type="text"
                                name="title"
                                placeholder="titre..."
                                class="bg-transparent mb-4 block border-b-2 w-full border-0 outline-none h-20 text-4xl outline-none form-control bottom-line">
                    
                            <textarea 
                                name="content"
                                placeholder="Description..."
                                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none form-control border-0 bottom-line"></textarea>
                    
                            <div class="bg-grey-lighter pt-15 mt-5">
                                <label class="w-44 flex flex-col items-center px-2 py-3 shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                                    <span class="mt-2 text-base leading-normal" style="padding:10px 20px;background-color:rgba(220, 226, 226, 0.588);border-radius:50px;margin-bottom:10px;width:100%;text-align:center;">
                                        Selecter un fichier
                                    </span>
                                    <input 
                                        type="file"
                                        name="image"
                                        class="hidden">
                                </label>
                            </div>
                    <div style="text-align: center;">
                        <button    
                            type="submit"
                            class="uppercase mt-6 "
                            style="padding: 20px 20px; background-color:antiquewhite;color:black;border-radius:50px;">
                            Ajouter projet
                        </button>
                    </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </x-app-layout>