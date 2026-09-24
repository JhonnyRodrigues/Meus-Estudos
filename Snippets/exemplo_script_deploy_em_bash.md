# Exemplo de script para deploy

## 1. Preparar e validar o backend candidato

```bash
(
set -eu

DEPLOY_DIR="/var/www/html/PCA_PUBLICAR_B"
ARCHIVE="$DEPLOY_DIR/pca-pncp-sprint94-correcao-7a.tar.gz"
CANDIDATE="$DEPLOY_DIR/pca-pncp-backend-candidata-7a"
ACTIVE="$DEPLOY_DIR/pca-pncp-backend"
PREVIOUS="$DEPLOY_DIR/pca-pncp-backend-anterior-7a"

ARCHIVE_SHA="2d1760221bd5cd0d080827c7483c41d1de8215ad3f83663ced504caf4c8b88a3"
MANIFEST_SHA="6ff0b8d4118d86d24f340a745a499277a6de7ae61cb09387b81cafb1a3e192ba"

cd "$DEPLOY_DIR"

echo "$ARCHIVE_SHA  $ARCHIVE" | sha256sum -c -

test -d "$ACTIVE"
test ! -e "$CANDIDATE"
test ! -e "$PREVIOUS"

sudo mkdir "$CANDIDATE"
sudo tar -xzf "$ARCHIVE" -C "$CANDIDATE" --strip-components=1

sudo chown -R administrator:www-data "$CANDIDATE"
sudo find "$CANDIDATE" -type d -exec chmod 2750 {} +
sudo find "$CANDIDATE" -type f -exec chmod 0640 {} +

php -r '
$path = $argv[1];
$found = array_values(array_diff(scandir($path), [".", ".."]));
sort($found);
$expected = ["PACKAGE-MANIFEST.json", "src", "vendor"];
if ($found !== $expected) {
    fwrite(STDERR, "ERRO: topologia divergente: " . implode(", ", $found) . PHP_EOL);
    exit(1);
}
echo "TOPOLOGIA CANDIDATA OK\n";
' "$CANDIDATE"

echo "$MANIFEST_SHA  $CANDIDATE/PACKAGE-MANIFEST.json" | sha256sum -c -

sudo -u www-data php -r '
require "/var/www/html/PCA_PUBLICAR_B/pca-pncp-backend-candidata-7a/vendor/autoload.php";
$ok = class_exists("Semae\\Pca\\PublicadorPcaScriptcase")
    && class_exists("Semae\\Pca\\RegistradorEventosTecnicosScriptcase");
echo $ok ? "BACKEND CANDIDATO 7A CARREGAVEL\n" : "ERRO: BACKEND CANDIDATO INVALIDO\n";
exit($ok ? 0 : 1);
'

sudo -u www-data test ! -w "$CANDIDATE/src"
echo "CANDIDATO 7A APROVADO"
)
```

O final esperado é:

* TOPOLOGIA CANDIDATA OK
* BACKEND CANDIDATO 7A CARREGAVEL
* CANDIDATO 7A APROVADO

## 2. Promover o candidato. Execute somente se o bloco anterior terminou aprovado

```bash
(
set -eu

DEPLOY_DIR="/var/www/html/PCA_PUBLICAR_B"
ACTIVE="$DEPLOY_DIR/pca-pncp-backend"
CANDIDATE="$DEPLOY_DIR/pca-pncp-backend-candidata-7a"
PREVIOUS="$DEPLOY_DIR/pca-pncp-backend-anterior-7a"
REJECTED="$DEPLOY_DIR/pca-pncp-backend-rejeitada-7a"
MANIFEST_SHA="6ff0b8d4118d86d24f340a745a499277a6de7ae61cb09387b81cafb1a3e192ba"

test -d "$ACTIVE"
test -d "$CANDIDATE"
test ! -e "$PREVIOUS"
test ! -e "$REJECTED"

sudo mv "$ACTIVE" "$PREVIOUS"

if ! sudo mv "$CANDIDATE" "$ACTIVE"; then
    sudo mv "$PREVIOUS" "$ACTIVE"
    echo "ERRO NA PROMOCAO; BACKEND ANTERIOR RESTAURADO"
    exit 1
fi

if echo "$MANIFEST_SHA  $ACTIVE/PACKAGE-MANIFEST.json" | sha256sum -c - \
   && sudo -u www-data php -r '
require "/var/www/html/PCA_PUBLICAR_B/pca-pncp-backend/vendor/autoload.php";
$ok = class_exists("Semae\\Pca\\PublicadorPcaScriptcase")
    && class_exists("Semae\\Pca\\RegistradorEventosTecnicosScriptcase");
echo $ok ? "BACKEND ATIVO 7A CARREGAVEL\n" : "ERRO: BACKEND ATIVO INVALIDO\n";
exit($ok ? 0 : 1);
'; then
    echo "CORRECAO 7A IMPLANTADA"
else
    sudo mv "$ACTIVE" "$REJECTED"
    sudo mv "$PREVIOUS" "$ACTIVE"

    sudo -u www-data php -r '
require "/var/www/html/PCA_PUBLICAR_B/pca-pncp-backend/vendor/autoload.php";
$ok = class_exists("Semae\\Pca\\PublicadorPcaScriptcase")
    && class_exists("Semae\\Pca\\RegistradorEventosTecnicosScriptcase");
echo $ok ? "ROLLBACK CONCLUIDO\n" : "ERRO: ROLLBACK NAO CARREGAVEL\n";
exit($ok ? 0 : 1);
'
    exit 1
fi
)
```

O resultado final esperado é:

* BACKEND ATIVO 7A CARREGAVEL
* CORRECAO 7A IMPLANTADA
