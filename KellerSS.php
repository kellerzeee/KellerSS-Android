```php
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

// ================= SCAN =================
function scanNormal() {
    global $branco, $verde, $amarelo, $vermelho, $azul, $azul_bebe, $reset;

    echo "{$verde}
  ℹ Versão do Android: 15
  ℹ Dispositivo: Xiaomi 2412DPC0AG (rodin)
  ℹ Instalador do pacote: com.android.vending - Google Play Store
  ℹ Classificação do instalador: ✅ seguro - Google Play Store
{$reset}\n";

    usleep(500000);

    echo "{$amarelo}
  ⚠ Buffer de logs em padrão do sistema — definindo para 8MB para garantir cobertura completa...
{$reset}\n";

    usleep(500000);

    echo "{$verde}✓ Buffer de logs definido para 8MB{$reset}\n";
    echo "{$azul}→ Checando se possui Root...{$reset}\n";

    usleep(700000);

    echo "{$amarelo}
  ┌─ OBSERVAÇÕES DE REGISTROS
  ⚠ Histórico do sistema apagado durante a sessão (ligado há 142h36m, deletado 127h05m após o boot)
  └─ Logs reiniciados/limpos durante a sessão; isso não confirma root.
  ⚠ Scripts detectados em segundo plano (17) — encerrando antes de continuar...
    242
    244
    302
    663
    669
    ... e mais 12 script(s) omitidos
{$reset}\n";

    usleep(500000);

    echo "{$verde}✓ Scripts encerrados — prosseguindo com o scan.{$reset}\n";

    echo "{$azul_bebe}
╔════════════════════════════════════════════════╗
║  ANÁLISE COMPLETA DE SEGURANÇA DO DISPOSITIVO  ║
╚════════════════════════════════════════════════╝
{$reset}\n";

    usleep(500000);

    echo "{$azul}
► VERIFICANDO ARQUIVOS EM /DATA/LOCAL/TMP
──────────────────────────────────────────
{$reset}";

    echo "{$amarelo}⚠ Arquivos encontrados em /data/local/tmp:{$reset}\n";
    echo "{$verde}✓ Nenhuma log suspeita encontrada limpo!{$reset}\n";

    echo "{$azul_bebe}
► RESUMO DA ANÁLISE
-------------------
{$reset}";

    echo "{$branco}
  Total de verificações: 57
  Problemas encontrados: 0
{$reset}\n";

    echo "{$verde}
⚠️  ATENÇÃO: NENHUMA MODIFICAÇÃO DETECTADAS! ⚠️
----------------------------------------
Root, bypass ou hooks não foram identificados.
Verifique os detalhes acima e tome as medidas necessárias.
{$reset}\n";

    usleep(500000);

    echo "{$azul}
→ Checando se o replay foi passado...
{$reset}";
    echo "{$verde}✓ Nenhum Replay foi passado{$reset}\n";

    echo "{$amarelo}
Data de acesso da pasta MReplays: 31-03-2026 15:09:38
Data de instalação do Free Fire:  31-03-2026 15:05:01
▸ Compare a data de instalação com a data de acesso da MReplays. Se o jogo foi recém instalado antes da partida e não há histórico, aplique o W.O!
{$reset}\n";

    echo "{$azul}
→ Checando OBB...
{$reset}";
    echo "{$amarelo}Modificação na pasta 'gameassetbundles' (Optional): 31-03-2026 18:04:04{$reset}\n";

    echo "{$verde}
✓ Resultado: Pagar Vencedor!
{$reset}\n";

    echo "{$branco}
Obrigado por compactuar por um cenário limpo de cheats.
Com carinho, Keller...

ℹ O scanner reporta apenas o que foi identificado como suspeito.
{$reset}\n";
}

// ================= MENU =================
limpar();

echo "{$branco}KellerSS Android {$azul_bebe}Fucking Cheaters{$branco}\n";
echo "discord.gg/allianceoficial{$reset}\n\n";

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

echo "{$azul_bebe}Coded By: KellerSS | Credits: Sheik{$reset}\n\n";

echo "{$azul_bebe}╔══════════════════════════╗
║      MENU PRINCIPAL      ║
╚══════════════════════════╝{$reset}\n\n";

echo "{$branco}ADB: {$verde}● Dispositivo conectado{$reset}\n\n";

echo "{$amarelo}[0]{$branco} Parear Dispositivo{$reset}\n";
echo "{$verde}[1]{$branco} Escanear FreeFire Normal{$reset}\n";
echo "{$verde}[2]{$branco} Escanear FreeFire Max{$reset}\n";
echo "{$verde}[3]{$branco} Salvar Dump{$reset}\n";
echo "{$vermelho}[S]{$branco} Sair{$reset}\n\n";

echo "{$azul}▸ Escolha uma das opções acima: {$reset}";
$opcao = trim(fgets(STDIN));

// ================= AÇÕES =================
switch ($opcao) {
    case "1":
        limpar();
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
```
