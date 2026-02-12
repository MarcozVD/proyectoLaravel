<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Contáctanos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.container {
    width: 100%;
    max-width: 420px;
    padding: 35px;
    border-radius: 15px;
    backdrop-filter: blur(15px);
    background: rgba(255, 255, 255, 0.12);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    color: #fff;
    animation: fadeIn 0.6s ease-in-out;
}

h2 {
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
}

.input-group {
    margin-bottom: 18px;
}

label {
    font-size: 14px;
    display: block;
    margin-bottom: 6px;
}

input, textarea {
    width: 100%;
    padding: 10px 12px;
    border-radius: 8px;
    border: none;
    outline: none;
    font-size: 14px;
}

input:focus, textarea:focus {
    box-shadow: 0 0 0 2px #fff;
}

textarea {
    resize: none;
}

button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 8px;
    background: #ffffff;
    color: #764ba2;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s ease;
}

button:hover {
    background: #f1f1f1;
    transform: translateY(-2px);
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(15px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
</head>

<body>

<div class="container">
    <h2>💌 Contáctanos</h2>

    <form>
        <div class="input-group">
            <label for="correo">Correo electrónico</label>
            <input type="email" id="correo" name="correo" required>
        </div>

        <div class="input-group">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="4" required></textarea>
        </div>

        <button type="submit">Enviar mensaje</button>
    </form>
</div>

</body>
</html>
