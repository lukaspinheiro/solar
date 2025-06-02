@extends('layouts.app')

@section('title', 'Sobre')
@section('head')
<script src="https://kit.fontawesome.com/6df76df637.js" crossorigin="anonymous"></script>
@endsection

@section('content')
<div class="w-full max-w-4xl mx-auto bg-gray-800 bg-opacity-90 shadow-lg rounded-2xl p-10 mt-8">
    <h2 class="text-center text-white text-3xl font-bold mb-6">
        Sobre o Solarize
    </h2>

    <p class="text-gray-300 text-lg mb-6">
        O <span class="text-yellow-400 font-semibold">Solarize</span> é uma plataforma desenvolvida com o objetivo de ajudar empresas e consumidores na simulação de custos e orçamentos para a instalação de sistemas de energia solar fotovoltaica.
    </p>

    <p class="text-gray-300 text-lg mb-6">
        Através da nossa ferramenta, é possível calcular de forma rápida e precisa quanto custará a implementação de placas solares, considerando o consumo mensal de energia.
    </p>

    <h3 class="text-white text-2xl font-semibold mt-10 mb-4">
        Quem Somos
    </h3>

    <p class="text-gray-300 text-lg mb-6">
        Este site foi desenvolvido como uma atividade avaliativa para a disciplina de <span class="text-yellow-400">Desenvolvimento e Programação Web</span>, com o propósito de aplicar conhecimentos práticos em desenvolvimento de sistemas web.
    </p>

    <div class="grid sm:grid-cols-1 md:grid-cols-3 gap-6 text-center">
    <!-- Card Lukas -->
    <div class="bg-gray-700 p-6 rounded-xl hover:scale-105 transition">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/profile-lukas.jpeg') }}" alt="Foto de Lukas"
                class="w-24 h-24 rounded-full border-4 border-yellow-400 object-cover">
        </div>
        <h4 class="text-yellow-400 font-bold text-lg">Lukas Pinheiro da Silva</h4>
        <p class="text-gray-300 mb-4">Desenvolvedor Full Stack</p>
        <div class="flex justify-center gap-4">
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <!-- Card Marya -->
    <div class="bg-gray-700 p-6 rounded-xl hover:scale-105 transition">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/marya.jpg') }}" alt="Foto de Marya"
                class="w-24 h-24 rounded-full border-4 border-yellow-400 object-cover">
        </div>
        <h4 class="text-yellow-400 font-bold text-lg">Marya Clara</h4>
        <p class="text-gray-300 mb-4">Desenvolvedora Front-end</p>
        <div class="flex justify-center gap-4">
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <!-- Card Erick -->
    <div class="bg-gray-700 p-6 rounded-xl hover:scale-105 transition">
        <div class="flex justify-center mb-4">
            <img src="{{ asset('images/profile-erick.jpeg') }}" alt="Foto de Erick"
                class="w-24 h-24 rounded-full border-4 border-yellow-400 object-cover">
        </div>
        <h4 class="text-yellow-400 font-bold text-lg">Erick</h4>
        <p class="text-gray-300 mb-4">Desenvolvedor Back-end</p>
        <div class="flex justify-center gap-4">
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="#" target="_blank" class="text-gray-300 hover:text-yellow-400 text-xl">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

</div>
@endsection
