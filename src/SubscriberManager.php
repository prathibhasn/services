<?php

namespace Prathibha\DIExample;
use Prathibha\DIExample\Mailer;
use PDO;

class SubscriberManager {

    protected $pdo;
    protected $config;
    public function __construct($config) {
      $this->config = $config;
      $this->pdo = new PDO($this->config['dsn']);
    }

    public function notifySubscribers($mailer){
        $query = 'SELECT * FROM subscribers';
        $subscribers = $this->pdo->query($query);

        // Sender and Subject of the mail.
        $sender = 'subscriptions@example.com';
        $subject = 'New Article alert for you!';

        foreach ($subscribers as $subscriber) {
        // Customized message of the mail.
        $message = sprintf(<<<EOF
Hello %s! A new article has been published in the domain you have subscribed for.
You can visit the link below to read the article below. To unsubscribe, browse to our website, login & click on unsubscribe button!.
EOF
,$subscriber['name']);
        $mailer->sendMail($sender, $subscriber['email'], $subject, $message);
        }
    }
}