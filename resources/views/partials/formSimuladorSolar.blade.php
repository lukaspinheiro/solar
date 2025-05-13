
<div class="w-full max-w-md sm:max-w-lg lg:max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8 space-y-6">
    <h2 class="text-2xl font-bold text-center text-indigo-600">Simulador de Energia Solar</h2>

    <form action="" method="POST" class="space-y-4">
        @csrf
        
        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="endereco">Endereço da Instalação</label>
            <input type="text" id="endereco" name="endereco" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Digite o endereço" required>
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="cep">CEP</label>
            <input type="text" id="cep" name="cep" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Digite o CEP" required>
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="tipo_consumo">Tipo de Consumo</label>
            <select id="tipo_consumo" name="tipo_consumo" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
                <option value="">Selecione</option>
                <option value="reais">Reais (R$)</option>
                <option value="kwh">kWh</option>
            </select>
        </div>

        <div>
            <label class="block text-gray-700 text-sm font-semibold mb-2" for="consumo_mensal">Consumo Mensal</label>
            <input type="number" id="consumo_mensal" name="consumo_mensal" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="Ex: 300" required>
        </div>

        <div class="text-center">
            <button type="submit" class="w-full bg-indigo-600 text-white font-semibold py-3 rounded-lg hover:bg-indigo-700 transition duration-300">
                Calcular Investimento Estimado
            </button>
        </div>
    </form>

    <!-- <div class="mt-6 p-4 bg-gray-50 rounded-lg text-sm text-gray-700 space-y-1">
        <p><span class="font-bold text-indigo-600">📍 Local:</span> Endereço e CEP inseridos</p>
        <p><span class="font-bold text-yellow-600">⚡ Consumo estimado:</span> 1250 kWh/mês</p>
        <p><span class="font-bold text-green-600">🔋 Potência estimada:</span> 10.42 kWp</p>
        <p><span class="font-bold text-blue-600">💵 Investimento estimado:</span> R$ 52.083,33</p>
    </div> -->
</div>
