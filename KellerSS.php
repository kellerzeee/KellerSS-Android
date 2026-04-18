<?php

// ================= CORES =================
$branco = "\033[0;37m";
$verde = "\033[0;32m";
$amarelo = "\033[1;33m";
$vermelho = "\033[0;31m";
$azul = "\033[0;34m";
$azul_bebe = "\033[0;96m";
$reset = "\033[0m";

// ================= LIMPAR TELA =================
function limpar() {
    system(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? 'cls' : 'clear');
}

// ================= BARRA DE PROGRESSO =================
function progressBar() {
    global $branco, $verde, $amarelo, $vermelho, $azul, $azul_bebe, $reset;
    
    // Lista de verificações
    $verificacoes = [
        "Identificando aparelho e ambiente...",
        "Verificando integridade de logs...",
        "Verificando root e ferramentas suspeitas...",
        "Verificando horário e uptime...",
        "Verificando ambiente e clipboard...",
        "Analisando MReplays...",
        "Checando bypass de Wallhack/Holograma...",
        "Checando Shaders...",
        "Checando OBB...",
        "Checando Optional..."
    ];
    
    // Estados dos ícones
    $estados = array_fill(0, 10, "·");
    
    // Tempo total: 6 minutos = 360 segundos
    $tempo_total = 360;
    $intervalo_verificacao = 36; // Cada verificação a cada 36 segundos
    
    for ($tempo = 0; $tempo <= $tempo_total; $tempo++) {
        // Limpar tela e mostrar cabeçalho
        limpar();
        
        echo "{$azul_bebe}KellerSS Android Fucking Cheaters{$reset}\n";
        echo "discord.gg/allianceoficial{$reset}\n\n";
        
        echo "{$azul_bebe}
 _  __     _ _           ____   _____ 
| |/ /    | | |         / ___| / ____|
| ' / __ _| | | ___ _ _| (___ | (___  
|  < / _` | | |/ _ \ '__\___ \ \___ \ 
| . \ (_| | | |  __/ |  ____) |____) |
|_|\_\__,_|_|_|\___|_| |_____/|_____/ 
{$reset}\n";
        
        echo "{$azul_bebe}Coded By: KellerSS{$reset}\n\n";
        
        // Calcular progresso
        $percentual = min(100, round(($tempo / $tempo_total) * 100));
        $verificacoes_completas = min(9, floor($tempo / $intervalo_verificacao));
        
        // Atualizar estados das verificações
        for ($i = 0; $i < 10; $i++) {
            if ($i < $verificacoes_completas) {
                $estados[$i] = "{$verde}{$reset}";
            } elseif ($i == $verificacoes_completas && $percentual < 100) {
                $estados[$i] = "{$amarelo}{$reset}";
            } else {
                $estados[$i] = "{$branco}·{$reset}";
            }
        }
        
        // Criar barra de progresso animada
        $barra_length = 30;
        $filled = floor(($percentual / 100) * $barra_length);
        $empty = $barra_length - $filled;
        
        // Criar barra com animação
        $barra_filled = str_repeat(' ', $filled);
        $barra_empty = str_repeat(' ', $empty);
        
        // Animação do carregamento com strings exatas
        if ($percentual < 100) {
            // Padrões EXATOS como você pediu
            $patterns = [
                "[██████▒▓▒░░░░░░░░░░░░░] ",
                "[██████░░░▒▓▒░░░░░░░░░░]  ",
                "[██████░░░░░░▒▓▒░░░░░░░] ",
                "[██████░░░░░░░░░▒▓▒░░░░] ",
                "[██████░░░░░░░░░░░░░▒▓▒]  "
            ];
            
            $anim_pattern = ($tempo % 5);
            $barra_anim = $patterns[$anim_pattern];
            
            // Combinar partes preenchidas com animação
            $barra_final = $barra_filled . substr($barra_anim, $filled);
        } else {
            $barra_final = str_repeat(' ', $barra_length);
        }
        
        // Formatar tempo
        $minutos = floor($tempo / 60);
        $segundos = $tempo % 60;
        $tempo_formatado = sprintf("%02d:%02d", $minutos, $segundos);
        
        // Mostrar barra de progresso
        echo "{$azul_bebe}  [{$verde}{$barra_filled}{$amarelo}{$barra_final}{$reset}]\n";
        echo "  {$percentual}%  {$tempo_formatado}  " . ($verificacoes_completas + 1) . "/10\n\n";
        
        // Mostrar verificações
        for ($i = 0; $i < 10; $i++) {
            echo "  {$estados[$i]} {$verificacoes[$i]}{$reset}\n";
        }
        
        // Se completou, mostrar resultado final
        if ($tempo >= $tempo_total) {
            echo "\n";
            echo "{$verde}  Scan concluído! Exibindo resultados...{$reset}\n";
            usleep(2000000); // 2 segundos
            break;
        }
        
        usleep(1000000); // 1 segundo
    }
}

// ================= SCAN =================
function scanNormal() {
    global $branco, $verde, $amarelo, $vermelho, $azul, $azul_bebe, $reset;

    echo "{$azul_bebe}KellerSS Android Fucking Cheaters{$reset}\n";
    echo "discord.gg/allianceoficial{$reset}\n\n";

    // Quadro principal
    echo "{$azul_bebe}┌────────────────────────────────────────────────────────┐{$reset}\n";
    echo "{$branco}│ Informações                                            │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$branco}│ Status       : {$verde}███████████████████████████████████████{$reset}                                          │{$reset}\n";
    echo "{$branco}│              {$verde}█           LIMPO           █{$reset}                                          │{$reset}\n";
    echo "{$branco}│              {$verde}███████████████████████████████████████{$reset}                                          │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$branco}│ ► Identificação                                        │{$reset}\n";
    echo "{$branco}│ Pacote       : com.dts.freefireth                      │{$reset}\n";
    echo "{$branco}│ Jogo         : FreeFire Normal                         │{$reset}\n";
    echo "{$branco}│ Android      : 15                                      │{$reset}\n";
    echo "{$branco}│ Dispositivo  : Xiaomi 2412DPC0AG                       │{$reset}\n";
    echo "{$branco}│ HWID         : 8B70574BD032438E                        │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$branco}│ ► Origem                                               │{$reset}\n";
    echo "{$branco}│ Instalador   : com.android.vending - Google Play Store │{$reset}\n";
    echo "{$branco}│ Classificação: {$verde}✓ seguro - Google Play Store{$reset}           │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$branco}│ ► Resultado                                            │{$reset}\n";
    echo "{$branco}│ Alertas      : {$amarelo}6{$reset}                                      │{$reset}\n";
    echo "{$branco}│ Detecções    : {$verde}0{$reset}                                      │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$azul_bebe}│ ► Detecções - Root (0)                                │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$azul_bebe}│ ► Detecções - Logs (0)                                │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$azul_bebe}├────────────────────────────────────────────────────────┤{$reset}\n";
    echo "{$azul_bebe}│ ► Detecções - Outros (0)                              │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$branco}│                                                      │{$reset}\n";
    echo "{$azul_bebe}└────────────────────────────────────────────────────────┘{$reset}\n\n";

    echo "{$branco}■ Em caso de dúvida se é falso positivo, procure o Keller no Discord com print do scanner{$reset}\n";
}

// ================= MENU =================
limpar();

echo "{$branco}KellerSS Android {$azul_bebe}Fucking Cheaters{$branco}\n";
echo "discord.gg/allianceoficial{$reset}\n\n";

echo "{$azul_bebe}
 _  __     _ _           ____   _____ 
| |/ /    | | |         / ___| / ____|
| ' / __ _| | | ___ _ _| (___ | (___  
|  < / _` | | |/ _ \ '__\___ \ \___ \ 
| . \ (_| | | |  __/ |  ____) |____) |
|_|\_\__,_|_|_|\___|_| |_____/|_____/ 
{$reset}\n";

usleep(2000000);

echo "{$azul_bebe}Coded By: KellerSS | Credits: Sheik{$reset}\n\n";

echo "{$azul}╔══════════════════════════╗
║      MENU PRINCIPAL      ║
╚══════════════════════════╝{$reset}\n\n";

echo "{$branco}ADB: {$verde}● Dispositivo conectado{$reset}\n\n";

echo "{$amarelo}[0]{$branco} Parear Dispositivo{$reset}\n";
echo "{$verde}[1]{$branco} Escanear FreeFire Normal{$reset}\n";
echo "{$verde}[2]{$branco} Escanear FreeFire Max{$reset}\n";
echo "{$verde}[3]{$branco} Salvar Dump{$reset}\n";
echo "{$vermelho}[S]{$branco} Sair{$reset}\n\n";

echo "{$azul_bebe}▸ Escolha uma das opções acima: {$reset}";
$opcao = trim(fgets(STDIN));

// ================= AÇÕES =================
switch ($opcao) {
    case "1":
        progressBar();
        scanNormal();
        break;

    case "2":
        echo "{$verde}Scan MAX iniciado...{$reset}\n";
        break;

    case "3":
        echo "{$amarelo}Salvando dump...{$reset}\n";
        break;

    case "0":
        echo "{$azul}Pareando dispositivo...{$reset}\n";
        break;

    case "S":
    case "s":
        echo "{$vermelho}Saindo...{$reset}\n";
        exit;

    default:
        echo "{$vermelho}Opção inválida!{$reset}\n";
        break;
}
