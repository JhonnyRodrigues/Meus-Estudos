<?php

$xml = <<<XML
<?xml version="1.0" encoding="utf-8"?>
<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:xsd="http://www.w3.org/2001/XMLSchema">
    <soap:Header>
        <WSCorIDSOAPHeader xmlns="http://www.ca.com/apm"
            CorID="4C18CA71BD09547E016040227D62175D,1:3,0,0,SPCDSRVV3531|.NET Process|ws/cnpj|WebServices|Server|https_//acesso.infoconv.receita.fazenda.gov.br/ws/cnpj|ConsultarCNPJP7_SC,2,AgAAALNIQgAAAAFGAAAAAQAAABFqYXZhLnV0aWwuSGFzaE1hcAAAAAJIQgAAAAJGAAAAAgAAABBqYXZhLmxhbmcuU3RyaW5nAApUeG5UcmFjZUlkSEIAAAADRQAAAAIAITRDMThDQTcxQkQwOTU0N0UwMTYwNDAyMjA2MUZEMDc4MEhCAAAABEUAAAACAA9DYWxsZXJUaW1lc3RhbXBIQgAAAAVFAAAAAgANMTc0OTMyODM4MjYyNA==" />
    </soap:Header>
    <soap:Body>
        <ConsultarCNPJP7_SCResponse xmlns="https://acesso.infoconv.receita.fazenda.gov.br/ws/cnpj/">
            <ConsultarCNPJP7_SCResult>
                <CNPJPerfil7>
                    <CNPJ>10636760000143</CNPJ>
                    <Estabelecimento>1</Estabelecimento>
                    <NomeEmpresarial>VOCAIS LTDA</NomeEmpresarial>
                    <NomeFantasia>VOCALISTAS</NomeFantasia>
                    <SituacaoCadastral>02</SituacaoCadastral>
                    <MotivoSituacao>00</MotivoSituacao>
                    <DataSituacaoCadastral>20090128</DataSituacaoCadastral>
                    <CidadeExterior />
                    <CodigoPais />
                    <NomePais />
                    <NaturezaJuridica>2062</NaturezaJuridica>
                    <DataAbertura>20090128</DataAbertura>
                    <CNAEPrincipal>6209100</CNAEPrincipal>
                    <CNAESecundario>
                        <string>4751201</string>
                        <string>7490104</string>
                        <string>7733100</string>
                        <string>9511800</string>
                    </CNAESecundario>
                    <TipoLogradouro>RUA</TipoLogradouro>
                    <Logradouro>CRISTIANO CLEOPATH</Logradouro>
                    <NumeroLogradouro>236</NumeroLogradouro>
                    <Complemento />
                    <Bairro>CENTRO</Bairro>
                    <CEP>13400240</CEP>
                    <UF>SP</UF>
                    <CodigoMunicipio>6875</CodigoMunicipio>
                    <NomeMunicipio>PIRACICABA</NomeMunicipio>
                    <Referencia>BAIRRO CENTRO</Referencia>
                    <DDD1>19</DDD1>
                    <Telefone1>34221473</Telefone1>
                    <DDD2 />
                    <Telefone2 />
                    <Email>CONTATO@EMPRESA.COM.BR</Email>
                    <CPFResponsavel>27501631883</CPFResponsavel>
                    <NomeResponsavel>Dono da empresa</NomeResponsavel>
                    <CapitalSocial>4500000</CapitalSocial>
                    <Sociedade>
                        <SocioPerfil7>
                            <Tipo>2</Tipo>
                            <Nome>Steve Tayler</Nome>
                            <Numero>00027501631883</Numero>
                            <Qualificacao>49</Qualificacao>
                            <CodigoPaisOrigem>000</CodigoPaisOrigem>
                            <NomePaisOrigem />
                        </SocioPerfil7>
                        <SocioPerfil7>
                            <Tipo>2</Tipo>
                            <Nome>Ozzy Osbourne</Nome>
                            <Numero>00026071569800</Numero>
                            <Qualificacao>49</Qualificacao>
                            <CodigoPaisOrigem>000</CodigoPaisOrigem>
                            <NomePaisOrigem />
                        </SocioPerfil7>
                        <SocioPerfil7>
                            <Tipo>2</Tipo>
                            <Nome>Axl Rose</Nome>
                            <Numero>00028059321889</Numero>
                            <Qualificacao>49</Qualificacao>
                            <CodigoPaisOrigem>000</CodigoPaisOrigem>
                            <NomePaisOrigem />
                        </SocioPerfil7>
                    </Sociedade>
                    <Porte>01</Porte>
                    <OpcaoSimples>S</OpcaoSimples>
                    <OpcaoSIMEI>N</OpcaoSIMEI>
                    <SituacaoEspecial />
                    <DataSituacaoEspecial>00000000</DataSituacaoEspecial>
                    <Erro />
                </CNPJPerfil7>
            </ConsultarCNPJP7_SCResult>
        </ConsultarCNPJP7_SCResponse>
    </soap:Body>
</soap:Envelope>
XML;
// var_dump($xml);

# Primeiros passos: carregar o XML e registrar namespaces
$dom = new DOMDocument();
$dom->preserveWhiteSpace = false;
$dom->loadXML($xml);
// echo $dom->saveXML();exit;
$xpath = new DOMXPath($dom);
$xpath->registerNamespace("soap", "http://schemas.xmlsoap.org/soap/envelope/");
$xpath->registerNamespace("ns", "https://acesso.infoconv.receita.fazenda.gov.br/ws/cnpj/");

# Somente os elementos com o prefixo soap: fazem parte do namespace SOAP

# Dicas avançadas de XPath:
## Use // se quiser buscar em qualquer parte do documento (mesmo em profundidade).
## Use / para seguir caminho exato.

# Expressões:
## Filtros com colchetes. Use [1] para pegar o primeiro item (ex: //ns:socioperfil7[1]/ns:nome).
## Seleção condicional
## Busca por texto
## Acesso a atributos. Use @atributo para buscar atributos (ex: @corid).
## Seleção relativa (em relação a um nó pai)
## Usar contains() para buscar parcialmente

########## for debugging ##########
$envelope = $xpath->query('/soap:envelope')->item(0);
// echo $dom->saveXML($envelope);exit('saiu');

$cnpj = $xpath->query('//soap:body/ns:consultarcnpjp7_scresponse/ns:consultarcnpjp7_scresult/ns:cnpjperfil7/ns:cnpj');
$nomeFantasia = $xpath->query('//ns:cnpjperfil7/ns:nomefantasia');
$nomesSocios = $xpath->query('//sociedade/socioperfil7/nome');
$capital = $xpath->query('//ns:capitalsocial');
$filtro = $xpath->query('(//socioperfil7/nome)[1]');
$selecaoCondicional = $xpath->query('socioperfil7[ns:numero="00026071569800"]/nome');
$Busca = $xpath->query('//ns:socioperfil7[ns:qualificacao="49"]/ns:nome');
$Busca = $xpath->query('//ns:socioperfil7[ns:qualificacao="49"]/ns:nome');
$acessoAtributo = $xpath->query('//soap:header/*/@corid');
$acessoAtributoEspecifico = $xpath->query('//soap:header/apm:wscoridsoapheader/@corid');
$buscaParcial = $xpath->query('//ns:socioperfil7[contains(ns:nome, "Ozzy")]/ns:nome');

foreach ($nomeFantasia as $node) {
    echo $dom->saveXML($node);
    // echo $node->nodeValue . PHP_EOL;
}
###################################