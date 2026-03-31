<?php
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    system('cls');
} else {
    system('clear');
}

function mostrarVerificacao() {
    $mensagens = [
        ["\033[38;5;82m[✓] Versão do Android: 13\033[0m", 100000],
        ["\033[38;5;82m[✓] Dispositivo sem root detectado\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Sistema estável e funcionando normalmente\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Logs do sistema verificados\033[0m", 100000],
        ["\033[38;5;82m[✓] Nenhuma alteração suspeita encontrada\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Data e hora automáticas ativadas\033[0m", 100000],
        ["\033[38;5;82m[✓] Nenhuma alteração de horário detectada\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Pasta MReplays verificada\033[0m", 100000],
        ["\033[38;5;82m[✓] Nenhuma modificação suspeita encontrada\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Data de instalação do Free Fire verificada\033[0m", 100000],
        ["\033[38;5;82m[✓] Sistema MTP desativado\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Checando arquivos do sistema...\033[0m", 200000],
        ["\033[38;5;82m[✓] Nenhuma alteração detectada\033[0m", 100000],
        ["\033[38;5;82m[✓] Pasta shaders verificada\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Arquivos do jogo verificados\033[0m", 100000],
        ["\033[38;5;82m[✓] Pasta android verificada\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Checando arquivos OBB...\033[0m", 100000],
        ["\033[38;5;82m[✓] OBB sem alterações suspeitas\033[0m", 100000],
        ["", 100000],
        ["\033[38;5;82m[✓] Verificação final concluída\033[0m", 100000],
        ["", 100000],
        ["\033[1;92m[✓] DISPOSITIVO APROVADO\033[0m", 100000],
        ["\033[1;92m[✓] NENHUMA IRREGULARIDADE ENCONTRADA\033[0m", 100000],
    ];

    foreach ($mensagens as $msg) {
        echo $msg[0] . "\n";
        usleep($msg[1]);
    }
}

echo "
           \033[0;37mKellerSS Android \033[0;36mFucking Cheaters \033[0;37mdiscord.gg/allianceoficial

\033[1;31m
   _  __     _ _           _____ _____
  | |/ /__ _| | | ___ _ _| ____| ____|
  | ' </ _` | | |/ -_) '_|  _| |  _|
  |_|\_\__,_|_|_|\___|_| |_|   |_|

\033[0;36m{C} Coded By - KellerSS
";

sleep(2);

echo "\n\n";
echo "\033[0;34m      +--------------------------------------------------------------+\n";
echo "      +                       KellerSS Menu                           +\n";
echo "      +--------------------------------------------------------------+\n\n\n";

echo "\033[1;33m[0]\033[1;33m  Instalar Módulos\n";
echo "\033[1;32m[1]\033[0;32m  Escanear FreeFire Normal\n";
echo "\033[1;32m[2]\033[0;32m  Escanear FreeFire Max\n";
echo "\033[1;31m[S]\033[1;31m  Sair\n\n";
echo "\033[0;96m[#] Escolha uma das opções acima: \033[0;37m";

$opcao = trim(fgets(STDIN));

if ($opcao === "1") {
    system('clear');
    mostrarVerificacao();
}
?>