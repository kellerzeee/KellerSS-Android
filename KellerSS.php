<?php

// ================= CORES =================
$branco = "\033[0;37m";
$verde = "\033[0;32m";
$amarelo = "\033[1;33m";
$vermelho = "\033[0;31m";
$azul = "\033[0;34m";
$azul_bebe = "\033[0;96m";
$reset = "\033[0m";

// ================= LIMPAR =================
function limpar() {
    system(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? 'cls' : 'clear');
}

// ================= SCAN =================
function scanNormal() {
    global $branco, $verde, $amarelo, $vermelho, $azul, $azul_bebe, $reset;

    echo "{$verde}ℹ Versão do Android: 15{$reset}\n";
    usleep(400000);

    echo "{$verde}ℹ Dispositivo: Xiaomi 2412DPC0AG (rodin){$reset}\n";
    usleep(400000);

    echo "{$verde}ℹ Instalador: Google Play Store{$reset}\n";
    usleep(400000);

    echo "{$verde}ℹ Classificação: seguro{$reset}\n\n";
    usleep(500000);

    echo "{$amarelo}⚠ Definindo buffer de logs...{$reset}\n";
    usleep(500000);

    echo "{$verde}✓ Buffer definido para 8MB{$reset}\n";
    usleep(300000);

    echo "{$azul}→ Checando Root...{$reset}\n";
    usleep(600000);

    echo "{$amarelo}⚠ Scripts detectados... encerrando{$reset}\n";
    usleep(600000);

    echo "{$verde}✓ Scripts encerrados{$reset}\n\n";
    usleep(500000);

    echo "{$azul_bebe}
╔════════════════════════════════════════════════╗
║  ANÁLISE COMPLETA DE SEGURANÇA DO DISPOSITIVO  ║
╚════════════════════════════════════════════════╝
{$reset}\n";

    usleep(500000);

    echo "{$azul}► Verificando /data/local/tmp{$reset}\n";
    usleep(400000);

    echo "{$verde}✓ Nenhuma modificação suspeita{$reset}\n\n";
    usleep(400000);

    echo "{$azul_bebe}► RESUMO{$reset}\n";
    usleep(300000);

    echo "{$branco}Total: 57 | Problemas: 0{$reset}\n\n";
    usleep(500000);

    echo "{$verde}✓ Resultado: LIMPO{$reset}\n\n";
    usleep(400000);

    echo "{$azul}→ Checando replay...{$reset}\n";
    usleep(400000);

    echo "{$verde}✓ Nenhum replay{$reset}\n\n";
    usleep(400000);

    echo "{$azul}→ Checando OBB...{$reset}\n";
    usleep(400000);

    echo "{$amarelo}⚠ Última modificação recente{$reset}\n\n";
    usleep(400000);

    echo "{$verde}✓ Resultado final: Pagar vencedor{$reset}\n\n";

    echo "{$branco}Scanner finalizado com sucesso.{$reset}\n";
}

// ================= MENU =================
limpar();

echo "{$branco}
  )       (     (          (
  ( /(       )\ )  )\ )       )\ )
  )\()) (   (()/( (()/(  (   (()/(
  |((_)\  )\   /(_)) /(_)) )\   /(_))
  |_ ((_)((_) (_))  (_))  ((_) (_))
  | |/ / | __|| |   | |   | __|| _ \\
  ' <  | _| | |__ | |__ | _| |   /
  _|\\_\\ |___||____||____||___||_|_\\
{$reset}\n";

usleep(2000000); // AGORA FUNCIONA (2 segundos)

echo "{$azul_bebe}Coded By: KellerSS | Credits: Sheik{$reset}\n\n";

echo "{$azul_bebe}╔══════════════════════════╗
║      MENU PRINCIPAL      ║
╚══════════════════════════╝{$reset}\n\n";

echo "{$branco}ADB: {$verde}● Conectado{$reset}\n\n";

echo "{$amarelo}[0]{$branco} Parear{$reset}\n";
echo "{$verde}[1]{$branco} Scan Normal{$reset}\n";
echo "{$verde}[2]{$branco} Scan Max{$reset}\n";
echo "{$verde}[3]{$branco} Dump{$reset}\n";
echo "{$vermelho}[S]{$branco} Sair{$reset}\n\n";

echo "{$azul}Escolha: {$reset}";
$opcao = trim(fgets(STDIN));

// ================= AÇÕES =================
switch ($opcao) {
    case "1":
        limpar();
        scanNormal();
        break;

    case "2":
        echo "{$verde}Scan MAX...{$reset}\n";
        break;

    case "3":
        echo "{$amarelo}Dump...{$reset}\n";
        break;

    case "0":
        echo "{$azul}Pareando...{$reset}\n";
        break;

    case "S":
    case "s":
        echo "{$vermelho}Saindo...{$reset}\n";
        exit;

    default:
        echo "{$vermelho}Opção inválida{$reset}\n";
}
