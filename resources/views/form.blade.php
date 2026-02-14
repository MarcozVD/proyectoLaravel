<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; background: #f8fafc; }
    </style>
    <title>Formulario de Contacto</title>
</head>
<body class="flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md p-8 bg-white rounded-[2rem] shadow-[0_20px_50px_rgba(0,0,0,0.05)] border border-gray-100">
        
        <div class="mb-10 text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 mb-4 bg-black text-white rounded-2xl shadow-lg">
                ✉
            </div>
            <h2 class="text-2xl font-bold text-gray-900 tracking-tight">Contacto</h2>
            <p class="text-gray-500 text-sm mt-1">Escríbenos tu mensaje aquí debajo.</p>
        </div>

        <!-- FORMULARIO -->
        <form action="/store" method="GET" class="space-y-5">

            <!-- EMAIL -->
            <div>
                <label for="email" class="block text-[13px] font-semibold text-gray-400 uppercase tracking-widest mb-2 ml-1">
                    Email
                </label>
                <input 
                    type="email"
                    id="email"
                    name="email"
                    placeholder="nombre@ejemplo.com"
                    required
                    autocomplete="email"
                    class="w-full px-5 py-4 bg-gray-50 rounded-2xl border border-gray-200 
                           focus:ring-2 focus:ring-black focus:border-black 
                           transition-all outline-none text-gray-900 
                           placeholder:text-gray-300"
                >
            </div>

            <!-- MENSAJE -->
            <div>
                <label for="mensaje" class="block text-[13px] font-semibold text-gray-400 uppercase tracking-widest mb-2 ml-1">
                    Mensaje
                </label>
                <textarea 
                    id="mensaje"
                    name="mensaje"
                    rows="4"
                    required
                    placeholder="¿En qué podemos ayudarte?"
                    class="w-full px-5 py-4 bg-gray-50 rounded-2xl border border-gray-200 
                           focus:ring-2 focus:ring-black focus:border-black 
                           transition-all outline-none text-gray-900 
                           placeholder:text-gray-300 resize-none"
                ></textarea>
            </div>

            <!-- BOTÓN -->
            <button 
                type="submit"
                class="w-full bg-black hover:bg-gray-800 text-white font-semibold py-4 rounded-2xl 
                       transition-all active:scale-[0.98] shadow-xl shadow-gray-200 
                       flex items-center justify-center gap-2 mt-4"
            >
                Enviar
            </button>

        </form>

    </div>

</body>
</html>