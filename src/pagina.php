<?php
// public/layout_test.php

// Dados mockados para visualização do layout
$roleTitle = 'Desenvolvedor';
$userName = 'Hudson Vini';
$userRole = 'Dev Junior';
$userAvatar = '/images/avatar-default-4.png';
$exampleAvatars = [
    ['src' => '/images/avatar-default-1.png', 'alt' => 'Avatar 1'],
    ['src' => '/images/avatar-default-2.png', 'alt' => 'Avatar 2'],
    ['src' => '/images/avatar-default-3.png', 'alt' => 'Avatar 3'],
];
$remainingAvatars = 5;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Layout - Teste</title>
    <style>
        /* CSS Reset básico */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Fontes Gilroy */
        @font-face {
            font-family: 'Gilroy';
            src: url('/fonts/Gilroy-Light.woff') format('woff');
            font-weight: 300; /* Light */
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Gilroy';
            src: url('/fonts/Gilroy-Regular.woff') format('woff');
            font-weight: 400; /* Regular */
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Gilroy';
            src: url('/fonts/Gilroy-Medium.woff') format('woff');
            font-weight: 500; /* Medium */
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Gilroy';
            src: url('/fonts/Gilroy-Bold.woff') format('woff');
            font-weight: 700; /* Bold */
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Gilroy';
            src: url('/fonts/Gilroy-Heavy.woff') format('woff');
            font-weight: 800; /* Heavy */
            font-style: normal;
            font-display: swap;
        }

        /* Estilos Globais do Body (Fundo e Estrutura Principal) */
        html, body {
            height: 100%;
        }

        body {
            font-family: 'Gilroy', sans-serif;
            background-color: #000000;
            color: #ffffff;
            min-height: 100vh;
            display: flex;
            flex-direction: row;
            overflow: hidden; /* Evita scroll no body (o scroll será interno) */
            position: relative;
        }

        /* Sidebar (Painel Esquerdo) */
        .sidebar-container {
            width: 250px;
            background-color: #181818;
            flex-shrink: 0;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            box-shadow: 2px 0 5px rgba(0,0,0,0.2);
            height: 100%;
        }

        .sidebar-header {
            padding: 1rem 0;
            text-align: center;
        }
        .sidebar-logo img {
            width: 80px;
            height: auto;
            margin: 0 auto;
            display: block;
        }

        .sidebar-nav {
            flex-grow: 1;
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .nav-item {
            display: flex;
            align-items: center;
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 8px;
            color: #ffffff;
            text-decoration: none;
            transition: background-color 0.2s ease;
            font-size: 1em;
            font-weight: 500;
        }
        .nav-item:hover { background-color: #2a2a2a; }
        .nav-item.active {
            background-color: #00BCD4;
            color: #000000;
            font-weight: 700;
        }
        .nav-item-icon {
            width: 20px; height: 20px; margin-right: 10px; fill: currentColor; flex-shrink: 0;
        }
        .nav-item.active .nav-item-icon {
            fill: #000000; color: #000000;
        }


        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid #333333;
            margin-top: 1rem;
        }
        .user-info-card {
            background-color: #222222;
            padding: 0.8rem 1rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
            gap: 10px;
        }
        .user-avatar { width: 40px; height: 40px; border-radius: 50%; object-fit: cover; border: 2px solid #222222; }
        .user-name { font-weight: 600; font-size: 0.95em; }
        .user-role { font-size: 0.8em; color: #aaaaaa; }

        .footer-button {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            border-radius: 8px;
            color: #ffffff;
            background-color: #333333;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-size: 1em;
            font-weight: 500;
        }
        .footer-button:hover { background-color: #444444; }
        .footer-button.logout { background-color: #dc2626; }
        .footer-button.logout:hover { background-color: #b91c1c; }
        .footer-button-icon { width: 20px; height: 20px; margin-right: 10px; fill: currentColor; flex-shrink: 0; }

        /* Área de Conteúdo Principal (Painel Direito) */
        .main-content-area {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: #0A0A0A;
            position: relative;
            z-index: 1;
            padding-bottom: 2.25rem; /* Padding inferior de 36px */
            height: 100%; /* MUDANÇA: Garante que o main-content-area ocupe 100% da altura do body */
        }
        .main-content-header-bar {
            background-color: #181818;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            flex-shrink: 0; /* MUDANÇA: Garante que o header não encolha */
        }
        .main-content-header-title {
            font-size: 1.2em;
            font-weight: 600;
            color: #ffffff;
            font-family: 'Gilroy', sans-serif;
            display: flex;
            align-items: center;
        }
        .main-content-header-title svg { width: 20px; height: 20px; margin-right: 8px; fill: #aaaaaa; }
        .avatar-group { display: flex; align-items: center; }
        .avatar { width: 32px; height: 32px; border-radius: 50%; border: 2px solid #0A0A0A; object-fit: cover; margin-left: -8px; }
        .avatar:first-child { margin-left: 0; }
        .avatar-count { font-size: 0.8em; color: #aaaaaa; margin-left: 8px; font-weight: 500; }

        .main-content-body {
            flex-grow: 1; /* Permite que o body ocupe o restante da altura em .main-content-area */
            overflow-y: auto; /* Torna a área scrollável */
            padding: 1.5rem;
            min-height: 0; /* CRÍTICO: Permite que o flex item encolha e ative o overflow */
        }

        /* Estilos para o conteúdo de teste */
        .test-content-title { font-size: 1.8em; font-weight: 600; color: #e0e0e0; margin-bottom: 1rem; }
        .test-content-paragraph { font-size: 1em; color: #cccccc; margin-bottom: 1rem; }
        .test-scroll-area {
            background-color: #0A0A0A; /* Cor de fundo da área de scroll para diferenciar */
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 8px;
            height: auto; /* MUDANÇA: Remover altura fixa */
            color: #e0e0e0;
        }
        .test-scroll-area p { margin-bottom: 0.5rem; }

        /* Media Queries para Responsividade */
        @media (max-width: 768px) {
            body {
                flex-direction: column;
            }
            .sidebar-container {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                padding: 0.5rem;
                box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            }
            .sidebar-header, .sidebar-footer { display: none; }
            .sidebar-nav ul {
                display: flex;
                width: 100%;
                justify-content: space-around;
            }
            .nav-item {
                justify-content: center;
                padding: 0.8rem 0.5rem;
                flex-direction: column;
            }
            .nav-item span { display: none; }
            .nav-item-icon { margin-right: 0; margin-bottom: 5px; }
            .user-info-card, .footer-button { padding: 0.5rem; }
            .user-info-card div { display: none; }
            .footer-button span { display: none; }

            .main-content-area {
                height: calc(100vh - var(--sidebar-height-mobile, 70px));
                padding-bottom: 1rem;
            }
            .main-content-header-bar { padding: 1rem 0.8rem; }
            .main-content-body { padding: 1.5rem 0.8rem; }
        }
        @media (max-width: 480px) {
            .sidebar-logo img { width: 50px; height: auto; }
            .main-content-header-title { font-size: 1.1em; }
            .avatar-group .avatar { width: 28px; height: 28px; }
            .avatar-count { display: none; }
        }
    </style>
</head>
<body>
    <div class="sidebar-container">
        <div class="sidebar-header">
            <img src="hodlpay-white.svg" alt="Logo Hold">
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="#" class="nav-item active"><svg class="nav-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 3h7v7H3z"></path><path d="M14 3h7v7h-7z"></path><path d="M14 14h7v7h-7z"></path><path d="M3 14h7v7H3z"></path></svg> <span>Gestão de tarefas</span></a></li>
                <li><a href="#" class="nav-item"><svg class="nav-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2h8a2 2 0 0 1 2 2v16a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"></path><path d="M12 18h.01"></path></svg> <span>Marcar Ponto</span></a></li>
                <li><a href="#" class="nav-item"><svg class="nav-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20a8 8 0 1 0 0-16a8 8 0 0 0 0 16Z"></path><path d="M12 10v6"></path><path d="M9.5 13H14.5"></path></svg> <span>Análise de Desempenho</span></a></li>
                <li><a href="#" class="nav-item"><svg class="nav-item-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-.84.72-1.78 1.5-2 1-.22 2.3-.61 3.5-1 1.07-.36 2-1.36 2-2.5 0-1.7-.67-3.17-2.19-4.22A4.24 4.24 0 0 0 16 2.5C14.7 2.5 13.5 3.3 12.5 4.5l-.8.9A1.94 1.94 0 0 1 10 7H2v5c2.2.34 3.98 1.5 5 2l.5 1.5 1.34 2.89A4 4 0 0 0 12 22h6c.7 0 1.5-.2 2-.7l1.5-1.5c.5-.5.8-1.2.5-2-.3-.8-1.5-2.2-2-3Z"></path><path d="M17 14h.01"></path></svg> <span>Ideias e sugestões</span></a></li>
            </ul>
        </nav>
        <div class="sidebar-footer">
            <div class="user-info-card">
                <img src="<?= $userAvatar ?>" alt="Avatar Usuário" class="user-avatar" />
                <div>
                    <p class="user-name"><?= $userName ?></p>
                    <p class="user-role"><?= $userRole ?></p>
                </div>
            </div>
            <button class="footer-button"><svg class="footer-button-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83l-2.64 2.64a2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0l-2.64-2.64a2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83l2.64-2.64a2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33a1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0l2.64 2.64a2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82Z"></path></svg> <span>Configurações</span></button>
            <button class="footer-button logout"><svg class="footer-button-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="17 17 22 12 17 7"></polyline><line x1="22" x2="10" y1="12" y2="12"></line></svg> <span>Deslogar</span></button>
        </div>
    </div>

    <div class="main-content-area">
        <div class="main-content-header-bar">
            <h1 class="main-content-header-title"><svg class="main-content-header-title" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Desenvolvedor</h1>
            <div class="avatar-group">
                <?php foreach ($exampleAvatars as $avatar): ?>
                    <img src="<?= $avatar['src'] ?>" alt="<?= $avatar['alt'] ?>" class="avatar" />
                <?php endforeach; ?>
                <?php if ($remainingAvatars > 0): ?>
                    <span class="avatar-count">+<?= $remainingAvatars ?></span>
                <?php endif; ?>
            </div>
        </div>
        <div class="main-content-body">
            <div class="test-scroll-area">
                <p>Este é um espaço grande para testar o scroll.</p>
                <p>Role para baixo para ver o fundo.</p>
                <?php for ($i = 0; $i < 40; $i++): ?>
                    <p>Linha de teste de scroll <?= $i + 1 ?></p>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
</html>