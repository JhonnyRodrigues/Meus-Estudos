<?php

# emailHandler.class.php armazena as configuracoes de e-mail e manipula a classe PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer.php';
require_once 'SMTP.php';
require_once 'Exception.php';
require_once 'languages/phpmailer.lang-pt_br.php';

class EmailHandler
{
    private $emailsConfig = array(
        'NO-REPLY' => array(
            'host' => '200.144.6.60',
            'Username' => 'no-reply@semaepiracicaba.sp.gov.br',
            'Password' => '',
            'SMTPAuth' => false,
            'Port' => 25,
            'IsHTML' => true,
            'From' => "no-reply@semaepiracicaba.sp.gov.br"
        ),
        'ENVIAEMAIL' => array(
            'host' => 'smtp.office365.com',
            'Username' => 'enviaemail@semaepiracicaba.sp.gov.br',
            'Password' => '-3n+v1@2022#',
            'SMTPAuth' => true,
            'Port' => 587,
            'IsHTML' => true,
            'From' => "enviaemail@semaepiracicaba.sp.gov.br"
        ),
        'SEMAE' => array(
            'host' => 'smtp.office365.com',
            'Username' => 'semae@semaepiracicaba.sp.gov.br',
            'Password' => 'Pira@2022',
            'SMTPAuth' => true,
            'Port' => 587,
            'IsHTML' => true,
            'From' => "semae@semaepiracicaba.sp.gov.br"
        ),
        'AMERICANOPOLIS' => array(
            'host' => 'americanopolis.prodesp.sp.gov.br',
            'Username' => 'no-reply@semaepiracicaba.sp.gov.br',
            'Password' => '',
            'SMTPAuth' => false,
            'Port' => 25,
            'IsHTML' => true,
            'From' => "no-reply@semaepiracicaba.sp.gov.br"
        ),
        'INVALIDADO' => array(
            'host' => 'itaitinga.prodesp.sp.gov.br',
            'Username' => 'no-reply@semaepiracicaba.sp.gov.br',
            'Password' => '',
            'SMTPAuth' => false,
            'Port' => 25,
            'IsHTML' => true,
            'From' => "no-reply@semaepiracicaba.sp.gov.br"
        ),
        'TESTINHO' => array(
            'host' => '200.144.6.14',
            'Username' => 'testinho@semaepiracicaba.sp.gov.br',
            'Password' => '',
            'SMTPAuth' => false,
            'Port' => 25,
            'IsHTML' => true,
            'From' => "testinho@semaepiracicaba.sp.gov.br"
        )
    );
    private $mailer = null;

    /**
     * @var SEMAE configuracao OFFICE365 com autenticacao
     */
    const ENVIAEMAIL = 'ENVIAEMAIL';
    /**
     * @var SEMAE configuracao OFFICE365 com autenticacao
     */
    const SEMAE = 'SEMAE';
    /**
     * @var SEMAE configuracao PRODESP sem autenticacao
     */
    const NOREPLAY = 'NO-REPLAY';
    /**
     * @var SEMAE configuracao PRODESP sem autenticacao
     */
    const TESTINHO = 'TESTINHO';

    public function __construct($configName = 'NO-REPLY')
    {
        $this->setPhpMailer($configName);
    }

    public function changeConfig($configName = 'NO-REPLY')
    {
        $this->setPhpMailer($configName);
    }

    private function setPhpMailer($configName)
    {
        if (!array_key_exists($configName, $this->emailsConfig)) {
            throw new Exception("Configura&ccedil;&atilde;o do e-mail inv&aacute;lida", 1);
        }

        /*Create an instance; passing `true` enables exceptions*/
        $this->mailer = new PHPMailer(true); 

        try {
            $this->mailer->SMTPDebug = 0; /*debugging: 1 = errors and messages, 2 = messages only*/
            $this->mailer->Mailer = "smtp";
            $this->mailer->IsSMTP();
            $this->mailer->Host = $this->emailsConfig[$configName]['host'];
            $this->mailer->SMTPAuth = $this->emailsConfig[$configName]['SMTPAuth'];
            $this->mailer->SMTPAutoTLS = ($this->mailer->SMTPAuth) ? true : false; /*habilitar quando houver autenticação*/
            $this->mailer->Username = $this->emailsConfig[$configName]['Username'];
            $this->mailer->Password = $this->emailsConfig[$configName]['Password'];
            $this->mailer->Port = $this->emailsConfig[$configName]['Port'];
            $this->mailer->SMTPSecure = false; /*outras opções: SSL ou TLS*/
            $this->mailer->SMTPKeepAlive = true;
            $this->mailer->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true /*Permite certificados auto assinados*/
                )
            );
            $this->mailer->IsHTML($this->emailsConfig[$configName]['IsHTML']);
            $this->mailer->From = $this->emailsConfig[$configName]['From'];
            $this->mailer->CharSet = PHPMailer::CHARSET_ISO88591; /* CHARSET_UTF8, CHARSET_ISO88591 */
			$this->mailer->Encoding = PHPMailer::ENCODING_8BIT; /* ENCODING_7BIT, ENCODING_8BIT, ENCODING_BASE64, ENCODING_BINARY, ENCODING_QUOTED_PRINTABLE */
			$this->mailer->SetLanguage("br", "languages/");
        } catch (Exception $e) {
            throw new Exception($this->mailer->ErrorInfo, 2);
        }
    }

    public function enviarEmail($destinatarios, $assunto, $mensagem, $alias = 'Semae - DTI')
    {
        if ((!is_array($destinatarios)) || (count($destinatarios) == 0)) {
            throw new Exception("Par&acirc;metro do destinat&aacute;rio incorreto", 3);
        }

        try {
			$this->mailer->FromName = '=?ISO-8859-1?B?' . base64_encode($alias) . '?='; /* MIME encoded-word */
			$this->mailer->Subject = '=?ISO-8859-1?B?' . base64_encode($assunto) . '?=';
            $this->mailer->Body = $mensagem;

            foreach ($destinatarios as $destinatario) {
                $this->mailer->AddAddress($destinatario);
            }

			$this->mailer->send();
			
			$this->mailer->clearAddresses();
			$this->mailer->clearAttachments();
			
        } catch (Exception $e) {
            $this->mailer->getSMTPInstance()->reset();
            throw new Exception($this->mailer->ErrorInfo, 4);
        }
		
		return true;
	}
}

# enviarEmail.php - cria uma instância da classe de EmailHandler e registra automaticamente logs dos e-mails enviados.
sc_include_library("sys", "semae", "sendMails/emailHandler.class.php", true, true);
function enviarEmail($destinatariosEnviaEmail, $assuntoEnviaEmail, $mensagemEnviaEmail, $aliasEnviaEmail) {
    $logDestinatarios = implode(', ', $destinatariosEnviaEmail);
    $logAplicacao = $this->Ini->nm_cod_apl;
    $logServidor = strstr($_SERVER["SERVER_NAME"], '.', true);

    try {
        $objMail = new EmailHandler();
        // $objMail->changeConfig('TESTINHO');
        if ($objMail->enviarEmail($destinatariosEnviaEmail, $assuntoEnviaEmail, $mensagemEnviaEmail, $aliasEnviaEmail)) {
            $stmtInsertLogEmail = "
                INSERT INTO LOGS_EMAILS (
                    DESTINATARIOS,
                    APLICACAO,
                    SUCESSO,
                    SERVIDOR
                ) VALUES (
                    '$logDestinatarios',
                    '$logAplicacao',
                    'S',
                    '$logServidor'
                )
            ";
            sc_exec_sql($stmtInsertLogEmail);
        }
    } catch (Exception $e) {
        $stmtInsertLogEmail = "
            INSERT INTO LOGS_EMAILS (
                DESTINATARIOS,
                APLICACAO,
                SUCESSO,
                SERVIDOR,
                MENSAGEM_ERRO
            ) VALUES (
                '$logDestinatarios',
                '$logAplicacao',
                'N',
                '$logServidor',
                '" . $e->getMessage() . ", código: " . $e->getCode() . "'
            )
        ";
        sc_exec_sql($stmtInsertLogEmail);
        return false;
    }
    return true;
}

?>