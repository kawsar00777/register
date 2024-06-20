<?php
class PHP_Email_Form {
    public $ajax;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp = [];

    private $messages = [];

    public function add_message($content, $label, $priority = 0) {
        $this->messages[] = ['content' => $content, 'label' => $label, 'priority' => $priority];
    }

    public function send() {
        // Basic email sending logic here
        $headers = "From: {$this->from_name} <{$this->from_email}>\r\n";
        $message = "";
        foreach ($this->messages as $msg) {
            $message .= "{$msg['label']}: {$msg['content']}\n";
        }
        return mail($this->to, $this->subject, $message, $headers);
    }
}
?>
